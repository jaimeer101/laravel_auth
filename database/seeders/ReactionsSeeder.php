<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_reactions')->insert(array(
            array(
                "code" => "like", 
                "name"=> "Like",
                "icon" => "thumbs-up",
                "created_at" => date("Y-m-d H:i:s"),
            ), 
            array(
                "code" => "dislike", 
                "name"=> "Dislike",
                "icon" => "thumbs-down",
                "created_at" => date("Y-m-d H:i:s")
            )
        ));
    }
}
