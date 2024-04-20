<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // temporarily disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // drop the existing table before attempting creating the new table with the same name
        Schema::dropIfExists('countries');

        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code');
            $table->softDeletes();
            $table->timestamps();
        });

        $path = resource_path('data/countries.csv');
        $data = array_map('str_getcsv', file($path));

        // Remove header row
        array_shift($data);

        foreach ($data as $row) {
            DB::table('countries')->insert([
                'name' => $row[0],
                'code' => $row[1],
            ]);
        }

        // re-enable the foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
