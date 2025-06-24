<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UsersAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_users_attributes')->insert([
            [
                'code' => 'first_name',
                'name' => 'First Name',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],[
                'code' => 'middle_name',
                'name' => 'Middle Name',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],[
                'code' => 'last_name',
                'name' => 'Last Name',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],[
                'code' => 'email',
                'name' => 'Email Address',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],[
                'code' => 'age',
                'name' => 'Age',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],[
                'code' => 'birthday',
                'name' => 'Birthday',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
