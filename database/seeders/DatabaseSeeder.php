<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();
        // \App\Models\Record::factory(10)->create();

        $this->call(
            RecordSeeder::class,
        );

        // \App\Models\Artist::factory()->create([
        //     'name' => 'Randeng',
        // ]);
        
        \App\Models\Artist::factory()->createMany([
            ['name' => 'Randeng'],
            ['name' => 'John'],
            ['name' => 'Janine'],
            ['name' => 'Bread'],
            ['name' => 'Guest'],
        ]);

        \App\Models\Service::factory()->createMany([
            ['name' => 'Tattoo' , 'code' => 'T'],
            ['name' => 'Piercing' , 'code' => 'P'],
            ['name' => 'Cleaning' , 'code' => 'C'],
            ['name' => 'Sell' , 'code' => 'S'],
        ]);

        \App\Models\Appointment::factory()->createMany([
            ['name' => 'Scheduled' , 'code' => 'S'],
            ['name' => 'Walk-in' , 'code' => 'W'],
            ['name' => 'Other' , 'code' => 'O'],
        ]);

        
    }
}
