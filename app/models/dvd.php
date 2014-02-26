<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2/18/14
 * Time: 3:59 PM
 */

class Dvd extends Eloquent
{

    public function rating(){return $this->belongsTo('rating');}
    public function genre(){return $this->belongsTo('genre');}
    public function label(){return $this->belongsTo('label');}
    public function sound(){return $this->belongsTo('sound');}
    public function format(){return $this->belongsTo('format');}


    public static function search($dvd_title, $rating, $genre) //TODO: What are the parameters
    {
        $query = Dvd::with('rating','genre','label','sound','format')->take(30);

        if($dvd_title)
        {
            $query->where('title','LIKE',"%$dvd_title%");
        }
        if($rating != 'All')
        {
            $query->where('rating.id','=',"$rating");
        }
        if($genre != 'All')
        {
            $query->where('genre.id','=',"$genre");
        }

        $dvds = $query->get();

        return $dvds;
    }
    /*

    public static function pullRatings()
    {
        $query = DB::table('dvds')
            ->select('rating')
            ->join('ratings','dvds.rating_id','=','ratings.id');
        $genres = $query->get();
        return $genres;
    }*/
}