<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Provider;
use \App\Models\Service;
use \App\Models\AppointmentRating;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //brisanje svega iz tabela
        User::truncate();
        Provider::truncate();
        Service::truncate();
        AppointmentRating::truncate();

        User::factory(5)->create();
        Provider::factory(10)->create();

        $service1 = Service::create([
            'name' => 'Ocni pregled'
        ]);

        $service2 = Service::create([
            'name' => 'Dermatoloski pregled'
        ]);

        $service3 = Service::create([
            'name' => 'Otorinolaringoloski pregled'
        ]);

        $service4 = Service::create([
            'name' => 'Vadjenje krvi'
        ]);

        $service5 = Service::create([
            'name' => 'Pregled za vozacku'
        ]);

        $appointementRating1 = AppointmentRating::create([
            'date_and_time' => now(),
            'user' => 1,
            'service' => 1,
            'provider' => 1,
            'rating' => 5,
            'note' => 'Posvecena doktorka, proverila mi je dioptriju i ocni pritisak. Sve pohvale.'
        ]);

        $appointementRating2 = AppointmentRating::create([
            'date_and_time' => now(),
            'user' => 2,
            'service' => 1,
            'provider' => 2,
            'rating' => 5,
            'note' => 'Resili su mi problem - oko me je peklo svaki dan. Dali su mi kapi koje sipam par dana. Posveceni, sve pohvale.'
        ]);
    }
}
