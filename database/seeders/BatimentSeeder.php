<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert([
            [
                "nom" => "MGM",
                "description" => "Bâtiment connu du strip à Las Vegas.",
                "created_at" => now(),
            ]
        ]);
    }
}
