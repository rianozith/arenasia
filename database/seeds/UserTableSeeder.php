<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (name, username, email, password, role, history_id) values (:name, :username, :email, :password, :role, :history_id)', [
        'name' => 'administrator' , 
        'username' =>  'admin', 
        'email' =>  'admin@admin.com', 
        'password' =>  bcrypt('admin'),
        'role' =>  'admin',
        'history_id' =>  1,
        ]);
        
        $this->command->info('Berhasil menambah user');
    }
}
