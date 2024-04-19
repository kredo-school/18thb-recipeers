<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // temporarily disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // drop the existing table before attempting creating the new table with the same name
        Schema::dropIfExists('cities');

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $path = resource_path('data/cities.csv');
        
        $data = array_map('str_getcsv', file($path));

        // Remove header row
        array_shift($data);

        foreach ($data as $row) {
            DB::table('cities')->insert([
                'name' => $row[0],
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
        Schema::dropIfExists('cities');
    }
};
