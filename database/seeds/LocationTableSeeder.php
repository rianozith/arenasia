<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range (1,4) as $index) {
        	DB::insert('insert into locations (location_name, longitude, latitude, description) values (:location_name, :longitude, :latitude, :description)', 
            [
            'location_name'	=> $faker->city ,
            'longitude'	=> $faker->longitude($min = -180, $max = 180) ,
            'latitude'	=> $faker->latitude($min = -90, $max = 90) ,
            'description'	=> $faker->sentence($nbWords = 6, $variableNbWords = true)
        ]);
        }
        $this->command->info('Berhasil menambah '.$index. ' location');
    }
}
