<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('branches')->insert([
            [
                'City' => 'West Jakarta',
                'Address' => 'Jl. Kebon Jeruk No. 20, West Jakarta, Indonesia'

            ],
            [
                'City' => 'Central Jakarta',
                'Address' => 'Jl. Medan Merdeka Selatan No. 12-13, Central Jakarta, Indonesia'
            ],
            [
                'City' => 'East Jakarta',
                'Address' => 'Jl. Rawamangun No. 10, East Jakarta, Indonesia'
            ],
            [
                'City' => 'South Jakarta',
                'Name' => 'Jl. Kuningan No. 5-6, South Jakarta, Indonesia'
            ],
            [
                'City' => 'North Jakarta',
                'Name' => 'Jl. Sunter Raya No. 28, North Jakarta, Indonesia'
            ]
        ]);
    }

}