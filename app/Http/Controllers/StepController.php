<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StepController extends Controller
{
    private $step;

    public function __construct(Step $step) {
        $this->step = $step;
    }

    public function store(Request $request) {
        log::debug('Request Data of store method in StepController');
        log::debug($request);

        $requestData = $request->stepData;
        $stepData = json_decode($requestData, true);

        log::debug('Step Data');
        log::debug($stepData);

        // getting thumbnail
        for($i=0; $i<100; $i++) {
            log::debug(isset($stepData['file_input' . $i]));

            if(isset($stepData['file_input' . $i])) {

                log::debug($request->hasFile('file_input' . $i));
                if($request->hasFile('file_input' . $i)) {
                    log::debug('Confirm existing step data');
                    log::debug($request->file('file_input' . $i));
                    log::debug($stepData['text_input' . $i]);

                    Log::info('Attempting to store file');
                    Storage::disk('public')->makeDirectory('assets/steps');

                    $stepImageName = $request->file('file_input' . $i)->getClientOriginalName();
                    $stored = $request->file('file_input' . $i)->storeAs('assets/steps', $stepImageName, 'public');

                    if($stored) {
                        Log::debug('File stored successfully');

                        if($request->file('file_input' . $i)) {
                            Log::debug('Deleting old avatar: ' . $stepData['file_input' . $i]);
                            Storage::disk('public')->delete('assets/steps' . $request->file('file_input' . $i));
                        }

                        $this->step = new Step();
                        $this->step->image = $stepImageName;
                        $this->step->description = $stepData['text_input' . $i];
                        $this->step->save();

                        log::debug('Each step data');
                        log::debug($this->step);

                    } else {
                        Log::error('Failed to store file');
                    }
                }
            } else {
                break;
            }
        }
    }
}
