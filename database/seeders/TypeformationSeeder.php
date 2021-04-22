<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "nom" => "Coding School 16",
                "created_at" => now(),
            ],
            [
                "nom" => "Coding School 17",
                "created_at" => now(),
            ],
            [
                "nom" => "Coding School 18",
                "created_at" => now(),
            ],
            [
                "nom" => "Coding School 19",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 1",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 2",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 3",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 4",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 5",
                "created_at" => now(),
            ],
            [
                "nom" => "Marketing Lab 6",
                "created_at" => now(),
            ]
        ]);
    }
}
