<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        foreach ( range(1,5) as $index ) {
            
        DB::insert('insert into venues (nama_venue, alamat_venue, telp_venue, info_venue, lokasi_id) values (:nama_venue, :alamat_venue, :telp_venue, :info_venue, :lokasi_id)', 
            [
            'nama_venue'    => $faker->lastName. ' Futsal',
            'alamat_venue'  => $faker->address,
            'telp_venue'    => $faker->phoneNumber,
            'info_venue'    => $faker->sentence($nbWords = 2, $variableNbWords = true),
            'lokasi_id'     => 1
        ]);
        }
        $this->command->info('Berhasil menambah '.$index. ' venue');
    }
}
