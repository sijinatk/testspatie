<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TenentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenent')->insert([
            'name' => 'Aufait',
            'status' => 1,
        ]);
        DB::table('tenent')->insert([
            'name' => 'Mindster',
            'status' => 1,
        ]);
        DB::table('tenent')->insert([
            'name' => 'MS',
            'status' => 1,
        ]);
        
    }
}
