<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Fighter;

class FighterController extends Controller
{
    public function index()
    {
        $fighters = Fighter::all();
        return response()->json($fighters);
    }

    public function store(Request $request)
    {
        $fighter = new Fighter;
        $fighter->save();
        return response()->json($fighter, 201);
    }

    public function show($id)
    {
        $fighter = Fighter::findOrFail($id);
        return response()->json($fighter);
    }

    public function update(Request $request, $id)
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
