<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'aufait_owner',
            'tenent_id' => 1,
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'aufait_admin',
            'tenent_id' => 1,
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'mindster_owner',
            'tenent_id' => 2,
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'mindster_admin',
            'tenent_id' => 2,
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'aufait_user',
            'tenent_id' => 1,
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'mindster_user',
            'tenent_id' => 2,
            'guard_name' => 'web',
        ]);
       
    }
}
