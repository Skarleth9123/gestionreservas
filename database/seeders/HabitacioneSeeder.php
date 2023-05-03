<?php

namespace Database\Seeders;

use App\Models\Habitacione;
use Illuminate\Database\Seeder;

class HabitacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitacione::factory()->count(100)->create();
    }
}
