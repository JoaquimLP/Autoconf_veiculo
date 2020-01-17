<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class dataBaseEstado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            "id" => "1",
            "nome" =>"Acre"
        ]);
        DB::table('estado')->insert([
            "id" => "2",
            "nome" =>"Alagoas"
        ]);
        DB::table('estado')->insert([
            "id" => "3",
            "nome" =>"Amapá"
        ]);
        
        DB::table('estado')->insert([
            "id" => "4",
            "nome" =>"Amazonas"
        ]);
        DB::table('estado')->insert([
            "id" => "5",
            "nome" =>"Bahia"
        ]);
        DB::table('estado')->insert([
            "id" => "6",
            "nome" =>"Ceará"
        ]);
        DB::table('estado')->insert([
            "id" => "7",
            "nome" =>"Distrito Federal"
        ]);
        DB::table('estado')->insert([
            "id" => "8",
            "nome" =>"Espírito Santo"
        ]);
        
        DB::table('estado')->insert([
            "id" => "9",
            "nome" =>"Goiás"
        ]);
        DB::table('estado')->insert([
            "id" => "10",
            "nome" => "Maranhão"
        ]);
        DB::table('estado')->insert([
            "id" => "11",
            "nome" => "Mato Grosso"
        ]);
        DB::table('estado')->insert([
            "id" => "12",
            "nome" => "Mato Grosso do Sul"
        ]);
        DB::table('estado')->insert([
            "id" => "13",
            "nome" => "Minas Gerais"
        ]);
        DB::table('estado')->insert([
            "id" => "14",
            "nome" => "Pará"
        ]);
        DB::table('estado')->insert([
            "id" => "15",
            "nome" => "Paraíba"
        ]);
        DB::table('estado')->insert([
            "id" => "16",
            "nome" => "Paraná"
        ]);
        DB::table('estado')->insert([
            "id" => "17",
            "nome" => "Pernambuco"
        ]);
        DB::table('estado')->insert([
            "id" => "18",
            "nome" => "Piauí"
        ]);
        DB::table('estado')->insert([
            "id" => "19",
            "nome" => "Rio de Janeiro"
        ]);
        DB::table('estado')->insert([
            "id" => "20",
            "nome" => "Rio Grande do Norte"
        ]);
        DB::table('estado')->insert([
            "id" => "21",
            "nome" => "Rio Grande do Sul"
        ]);
        DB::table('estado')->insert([
            "id" => "22",
            "nome" => "Rondônia"
        ]);
        DB::table('estado')->insert([
            "id" => "23",
            "nome" => "Roraima"
        ]);
        DB::table('estado')->insert([
            "id" => "24",
            "nome" => "Santa Catarina"
        ]);
        DB::table('estado')->insert([
            "id" => "25",
            "nome" => "São Paulo"
        ]);
        DB::table('estado')->insert([
            "id" => "26",
            "nome" => "Sergipe"
        ]);
        DB::table('estado')->insert([
            "id" => "27",
            "nome" => "Tocantins"
        ]);
    }
}
