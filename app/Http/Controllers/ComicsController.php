<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:50',
            'series' => 'required|max:88',
            'sale_date' => 'required|date',
            'type' => 'nullable',
        ]);
        Comic::create($validator);
        // Comic::create($request->all());
        return redirect('/comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            $data = [
                'comic' => $comic
            ];
            return view('comics.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            $data = [
                'comic' => $comic
            ];
            return view('comics.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validator = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:50',
            'series' => 'required|max:88',
            'sale_date' => 'required|date',
            'type' => 'nullable',
        ]);
        Comic::create($validator);
        // $data = $request->all();
        $comic->update($validator);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index', $comic->id);
    }
}
