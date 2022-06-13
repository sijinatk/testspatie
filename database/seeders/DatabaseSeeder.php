<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
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
           //////////////////////////////////

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
        ///////////////////////
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
/////////////////////////////////
         DB::table('users')->insert([
            'name' => 'Roshik',
            'role_id' => 1,
            'email' => 'roshik@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sajid',
            'role_id' => 2,
            'email' => 'sajid@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Thabsheer',
            'role_id' => 4,
            'email' => 'rosik@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Raufjith',
            'role_id' => 3,
            'email' => 'raufjith@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
