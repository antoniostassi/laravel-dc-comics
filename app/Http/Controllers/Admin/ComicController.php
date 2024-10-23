<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::get(); // Cattura tutti i dati dal DB nella tabella Comics.
        return view('comics.index', compact('comics')); // Mostrami la pagina index nella cartella view/comics passandogli $comics
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // post
    {
        //
        $data = $request->all();
        
        $newComic = new Comic;
    
            $newComic->title = $data['title'];
            $newComic->description = $data['description'];
            $newComic->thumb = $data['thumb'];
            $newComic->price = $data['price'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];

            // Arrays Setup 
            // With array_filter we ensure to remove all null values ( it happens if the customer send an empty field )
            $newArtists = array_filter($request->author); 
            $newWriters = array_filter($request->writer);

            $newComic->artists = json_encode($newArtists);
            $newComic->writers = json_encode($newWriters);
            
            $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic')); // Mostra la pagina "comics/show.blade.php" e lascia la variabile $comic che corrisponde al valore Comic corrispondente alla primary key passata in argomento.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic) // post
    {
        $data = $request->all();
        //
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        // Arrays Setup 
        // With array_filter we ensure to remove all null values ( it happens if the customer send an empty field )
        $newArtists = array_filter($request->author); 
        $newWriters = array_filter($request->writer);

        $comic->artists = json_encode($newArtists);
        $comic->writers = json_encode($newWriters);

        $comic->save();
        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->destroy();

        return redirect()->route('comics.index');

    }
}
