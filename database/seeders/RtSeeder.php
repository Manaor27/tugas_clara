<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rt')->insert([
            'rt' => '1'
        ]);
        DB::table('rt')->insert([
            'rt' => '2'
        ]);
        DB::table('rt')->insert([
            'rt' => '3'
        ]);
        DB::table('rt')->insert([
            'rt' => '4'
        ]);
        DB::table('rt')->insert([
            'rt' => '5'
        ]);
        DB::table('rt')->insert([
            'rt' => '6'
        ]);
    }
}
