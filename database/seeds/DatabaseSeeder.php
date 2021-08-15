<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PlantTableSeeder::class);
         $this->command->info('Таблица растений создана');

         $this->call(FamilyTableSeeder::class);
         $this->command->info('Таблица семейств создана');

         $this->call(CountryTableSeeder::class);
         $this->command->info('Таблица стран создана');
    }
}
