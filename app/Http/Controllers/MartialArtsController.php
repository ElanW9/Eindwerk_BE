<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MartialArt;


class MartialArtsController extends Controller
{
    public function index()
    {
        $martialart = MartialArt::all();
        return response()->json($martialart);
    }


    public function show(MartialArt $martialart)
    {
        return $martialart;
    }
}
