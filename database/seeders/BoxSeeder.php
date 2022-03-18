<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BoxSeeder extends Seeder
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
            DB::table('boxes')->insert([
                'box_name' => Str::random(10),
                'box_quantity' => random_int(0, 200),
            ]);
            $broj_zapisa--;
        }
    }
}
