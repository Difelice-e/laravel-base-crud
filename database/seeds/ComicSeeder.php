<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $c) {
            $comic = new Comic();

            $comic->title = $c['title'];
            $comic->thumb = $c['thumb'];
            $comic->description = $c['description'];
            $comic->price = $c['price'];
            $comic->series = $c['series'];
            $comic->sale_date = $c['sale_date'];
            $comic->type = $c['type'];

            $comic->save();

        }
    }
}
