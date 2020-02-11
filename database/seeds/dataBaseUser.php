<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class dataBaseUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'          =>  'Joaquim Pena33' ,
            'email'     => 'joaquim2013@gmail.com',
            'password'     => bcrypt('12345678'),
            'loja_id' => '1',
            'perfil_id' => '2',
        ]);
    }
}
