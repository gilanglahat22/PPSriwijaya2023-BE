<?php

namespace Database\Seeders;

use App\Models\PaslonPutri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaslonPutriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaslonPutri::create([
            'name'   => "Dewi",
            'count_vote' => 3,
        ]);
    }
}
