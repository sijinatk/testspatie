<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id' => 1,
            'permission' =>'add device',
            'guard_name' => 'web',
        ]);
         DB::table('permissions')->insert([
            'id' => 2,
            'permission' =>'change lock name',
            'guard_name' => 'web',
        ]);
          DB::table('permissions')->insert([
            'id' => 3,
            'permission' =>'unlock device',
            'guard_name' => 'web',
        ]);
           DB::table('permissions')->insert([
            'id' => 4,
            'permission' =>'shedule lock time',
            'guard_name' => 'web',
        ]);
        
    }
}
