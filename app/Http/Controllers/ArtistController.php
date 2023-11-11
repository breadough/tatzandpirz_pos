<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        return Artist::all();
    }
}
