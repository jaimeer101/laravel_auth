<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalUsersAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_users_attributes')->insert([
            [
                'code' => 'profile_picture',
                'name' => 'Profile Picture',
                'created_by' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
