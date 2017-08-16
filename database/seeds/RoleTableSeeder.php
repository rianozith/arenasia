<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into roles (code, role) values (:code, :role)', [
        'code' => 0 , 
        'role' =>  'admin', 
        ]);
        
        DB::insert('insert into roles (code, role) values (:code, :role)', [
        'code' => 1 , 
        'role' =>  'member', 
        ]);

        $this->command->info('Berhasil menambah role');
    }
}
