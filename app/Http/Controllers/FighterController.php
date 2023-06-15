<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
use App\Models\Fighter;


class FighterController extends Controller
{
    public function index()
    {
        $fighter = Fighter::all();
        return response()->json($fighter);
    }

    public function store(Fighter $fighter)
    {
        $fighter = new Fighter;
        $fighter->save();
        return response()->json($fighter, 201);
    }

    public function show(Fighter $fighter)
    {
        return $fighter;
    }

    public function update(Fighter $fighter, $id)
    {
        $fighter = Fighter::findOrFail($id);
        $fighter->save();
        return response()->json($fighter);
    }

    public function destroy($id)
    {
        $fighter = Fighter::findOrFail($id);
        $fighter->delete();
        return response()->json(null, 204);
    }
}
