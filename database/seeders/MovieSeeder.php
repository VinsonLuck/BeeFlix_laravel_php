<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
{

    public function run(): void
    {
        $title =[
            'All The Bright Places','Spiderman','Doraemon'
        ];

        $photo =[
            'movie/allthebrightplaces_poster.jpg','movie/spiderman_poster.jpg','movie/doraemon_poster.jpg'
        ];

        $faker = Faker::create('id_ID');

        for($i=0;$i<3;$i++){
            DB::table('movies')->insert([
                'title' => $title[$i],
                'photo' => $photo[$i],
                'publish_date' => now(),
                'description' =>  $faker->text(50),
                'genre_id'=> $i+1,
            ]);
        }
    }
}
