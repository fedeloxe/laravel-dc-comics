<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function getComics()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }
}
