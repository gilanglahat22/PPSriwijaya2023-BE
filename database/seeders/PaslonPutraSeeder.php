<?php

namespace Database\Seeders;

use App\Models\PaslonPutra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaslonPutraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaslonPutra::create([
            'name'   => "Gilang",
            'count_vote' => 1,
        ]);
    }
}
