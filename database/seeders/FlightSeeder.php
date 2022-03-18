<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $broj_zapisa = 15;
        while ($broj_zapisa > 0) {
            DB::table('flights')->insert([
                'aviokompanija' => Str::random(10),
                'destinacija' => Str::random(10),
            ]);
            $broj_zapisa--;
        }
    }
}
