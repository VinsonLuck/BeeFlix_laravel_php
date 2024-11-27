<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genre = 
        ['romance','action','cartoon'];

        for($i=0;$i<3;$i++){
            DB::table('genres')->insert([
                'name' => $genre[$i]
            ]);
        }
    }
}
