<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comic::truncate();

        $comics = config('comics');

        foreach ($comics as $comic) {

            $explodePrice = explode('$', $comic['price']);
            $floatPrice = floatval($explodePrice[1]);

            $jsonArtists = json_encode($comic['artists']);
            $jsonWriters = json_encode($comic['writers']);

            $comic = Comic::create([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $floatPrice,
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
                'artists' => $jsonArtists,
                'writers' => $jsonWriters

            ]);

            // $newComic = new Comic();
            // $newComic->title = $comic['title'];
            // $newComic->description = $comic['description'];
            // $newComic->thumb = $comic['thumb'];
            // $explodePrice = explode('$', $comic['price']);
            // $newComic->price = floatval($explodePrice[1]);
            // $newComic->series = $comic['series'];
            // $newComic->sale_date = $comic['sale_date'];
            // $newComic->type = $comic['type'];
            // $jsonArtists = json_encode($comic['artists']);
            // $newComic->artists = $jsonArtists;
            // $jsonWriters = json_encode($comic['writers']);
            // $newComic->writers = $jsonWriters;
            // $newComic->save();
        }
    }
}
