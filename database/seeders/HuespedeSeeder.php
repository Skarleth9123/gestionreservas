<?php

namespace Database\Seeders;


use App\Models\Huespede;
use Illuminate\Database\Seeder;

class HuespedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Huespede::factory()->count(100)->create();
    }
}
