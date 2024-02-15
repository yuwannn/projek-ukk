<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adminpetugas')->insert([
            'nama'=>'Yuwan',
            'username'=>'admin',
            'password'=>Hash::make('123'),
            'email'=>'horoboros@contoh.com',
            'alamat'=>'Irak'
        ]);
        DB::table('adminpetugas')->insert([
            'nama'=>'Rudi',
            'username'=>'rudeus',
            'password'=>Hash::make('1234'),
            'email'=>'rudeus@contoh.com',
            'alamat'=>'London'
        ]);
        DB::table('adminpetugas')->insert([
            'nama'=>'Jeki',
            'username'=>'shanks',
            'password'=>Hash::make('12345'),
            'email'=>'shanks@contoh.com',
            'alamat'=>'Tokyo'
        ]);
    }
}
