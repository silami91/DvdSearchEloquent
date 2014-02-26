<?php

class SongController extends BaseController
{
	public function search()
	{
		return View::make('songs/search');
	}

	public function listSongs()
	{
		/**
	* SELECT * FROM songs
	* INNER JOIN aritsts
	* ON songs.artist_id = aritst.id
	* INNER JOIN genres
	* ON songs.genre_id = genres.id
	
	$songs = DB::table('songs')
	->join('artists','artists.id','=','songs.artist_id')
	->join('genres','songs.genre_id', '=', 'genres.id')
	->get();

	//dd($songs);
	return View::make('songs/songs-list', [
		'songs' => $songs
	]);
	*/

	$song_title = Input::get('song_title');
	$artist = Input::get('artist');

	//dd($artist);

	$songs = Song::search($song_title, $artist);

	return View::make('songs/songs-list', [
		'songs' => $songs
		]);
	}
}