<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom" => "Photoshop",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ],
            [
                "nom" => "Illustrator",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ],
            [
                "nom" => "Coding School",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing School",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ],
            [
                "nom" => "Cubase",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ],
            [
                "nom" => "Wordpress",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, corporis.",
                "created_at" => now(),
            ]
        ]);
    }
}
