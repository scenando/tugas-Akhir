<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('p_l_e_s')->insert([
            'user_id' => 1,
            'arus_1' => rand(1, 4),
            'arus_2' => rand(1, 4),
            'daya_1' => rand(1, 1000),
            'daya_2' => rand(1, 1000),
            'rata_daya' => rand(1, 1000),
            'rata_arus' => rand(1, 4),
            'rata_voltage' => 220,
            'jam' => 1,
            'hari' => 0,
            'bulan' => 0,
        ]);
    }
}
