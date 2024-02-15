<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'judul'=>'Hujan',
            'penulis'=>'Tere Liye',
            'penerbit'=>'Gramedia Pustaka Utama',
            'tahunterbit'=>'2016',
            'sinopsis'=> Str::random('15'),
        ]);
    }
}
