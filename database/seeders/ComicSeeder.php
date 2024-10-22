<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $comics = config('comics');

        foreach ($comics as $item) {
            $newComic = new Comic;
            $newComic->title = $item['title'];
            $newComic->description = $item['description'];
            $price = explode('$', $item['price']);
            $newComic->price = $price[1];
            $newComic->series = $item['series'];
            $newComic->sale_date = date($item['sale_date']);
            $newComic->type = $item['type'];
            $newComic->artists = json_encode($item['artists']);
            $newComic->writers = json_encode($item['artists']);
            $newComic->save();
        };
        dd('Seeding Completed');
    }
}
