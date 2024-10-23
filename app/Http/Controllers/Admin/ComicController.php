<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = floatval($data['price']);;
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $explodeArtists = explode(',',$data['artists']);
        $jsonArtists = json_encode($explodeArtists);
        $newComic->artists = $jsonArtists;
        $explodeWriters = explode(',',$data['writers']);
        $jsonWriters = json_encode($explodeWriters);
        $newComic->writers = $jsonWriters;
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $data = $request->all();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = floatval($data['price']);;
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $explodeArtists = explode(',',$data['artists']);
        $jsonArtists = json_encode($explodeArtists);
        $comic->artists = $jsonArtists;
        $explodeWriters = explode(',',$data['writers']);
        $jsonWriters = json_encode($explodeWriters);
        $comic->writers = $jsonWriters;
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
