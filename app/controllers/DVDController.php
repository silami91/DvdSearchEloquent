<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2/18/14
 * Time: 4:08 PM
 */

class DVDController extends baseController
{
    public function search()
    {

       $ratings = Rating::all();
       $genres = Genre::all();

       return View::make('DVDs/search',[
           'genres' => $genres,
           'ratings' => $ratings
       ]);
    }

    public function listDvds()
    {
        $dvd_title = Input::get('dvd_title');
        $rating = Input::get('rating');
        $genre = Input::get('genre');

        $dvds = Dvd::search($dvd_title, $rating, $genre);
        return View::make('dvds/dvds-lists',[
            'dvds' => $dvds
        ]);
    }

    public function create()
    {
        $ratings = Rating::all();
        $genres = Genre::all();
        $formats = Format::all();
        $sounds = Sound::all();
        $labels = Label::all();

        return View::make('DVDs/create',[
            'ratings' => $ratings,
            'genres' => $genres,
            'formats' => $formats,
            'sounds' => $sounds,
            'labels' => $labels
        ]);
    }

    public function add()
    {
        $dvd = new Dvd;
        $dvd->title = Input::get('dvd_title');
        $dvd->rating_id = Input::get('rating');
        $dvd->genre_id = Input::get('genre');
        $dvd->format_id = Input::get('format');
        $dvd->sound_id = Input::get('sound');
        $dvd->label_id = Input::get('label');
        $dvd->save();

        return Redirect::to('/dvds/create')->with('success','Dvd added!');
    }
}