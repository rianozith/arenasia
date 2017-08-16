<?php

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = new DateTime('today');
		
        DB::table('jadwals')->insert([
			'name'			=> 'Pisyek',
			'title' 		=> 'Meeting with VC from UAE',
			'start_time'	=> $datetime->setTime(10, 00)->format('Y-m-d H:i:s'),
			'end_time'		=> $datetime->add(new DateInterval('PT1H'))->format('Y-m-d H:i:s'),
		]);
		
		$datetime = new DateTime('tomorrow');
		
		DB::table('jadwals')->insert([
			'name'			=> 'Ali Baba',
			'title'			=> 'Meeting Para Penyamun',
			'start_time'	=> $datetime->format('Y-m-d H:i:s'),
			'end_time'		=> $datetime->add(new DateInterval('PT2H'))->format('Y-m-d H:i:s'),
		]);
		
		$datetime = new DateTime('yesterday');
		
		DB::table('jadwals')->insert([
			'name'			=> 'Vince',
			'title' 		=> 'Zumba with Zin Hamka',
			'start_time'	=> $datetime->setTime(11, 00)->format('Y-m-d H:i:s'),
			'end_time'		=> $datetime->add(new DateInterval('PT1H'))->format('Y-m-d H:i:s'),
		]);
		
		DB::table('jadwals')->insert([
			'name'			=> 'Lili',
			'title' 		=> 'Lunch',
			'start_time'	=> $datetime->setTime(14, 00)->format('Y-m-d H:i:s'),
			'end_time'		=> $datetime->add(new DateInterval('PT2H'))->format('Y-m-d H:i:s'),
		]);
		$this->command->info('Berhasil menambah jadwal');
    }
}
