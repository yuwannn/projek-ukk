<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoribukus')->insert([
            'namakategori'=>'Romance'
        ]);
        DB::table('kategoribukus')->insert([
            'namakategori'=>'Horror'
        ]);
        DB::table('kategoribukus')->insert([
            'namakategori'=>'Action'
        ]);
    }
}
