<?php

use Illuminate\Database\Seeder;

class PlantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Plant::class, 10)->create();
    }
}
