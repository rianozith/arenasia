<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PitchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,5) as $index ){
        	DB::insert('insert into lapangans (nama_lapangan, status_lapangan, harga_lapangan, foto_lapangan, booking_id, jadwal_id, venue_id, created_at) values (:nama_lapangan, :status_lapangan, :harga_lapangan, :foto_lapangan, :booking_id, :jadwal_id, :venue_id, :created_at)', 
        		[
        		'nama_lapangan'		=> $faker->word,
        		'status_lapangan'	=> $faker->randomElement($array = array ('booked','available')),
        		'harga_lapangan'	=> $faker->randomNumber($nbDigits = 6, $strict = false),
        		'foto_lapangan'		=> $faker->imageUrl($width = 640, $height = 480, 'city'),
        		'booking_id'		=> $faker->numberBetween($min = 1, $max = 3),
        		'jadwal_id'			=> $faker->numberBetween($min = 1, $max = 3),
                'venue_id'          => $faker->numberBetween($min = 1, $max = 5),
                'created_at'        => date("Y-m-d H:i:s")

        		]);
        }
        $this->command->info('Berhasil menambah '.$index. ' pitch');
    }
}
