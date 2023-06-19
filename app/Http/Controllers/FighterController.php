<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Fighter;


class FighterController extends Controller
{
    public function index()
    {
        $fighter = Fighter::all();
        return response()->json($fighter);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'string|required|max:25',
            'age' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }
        $status = Fighter::create([
            'username' => request('username'),
            'age' => request('age'),
            'weight' => request('weight'),
            'height' => request('height'),
            'experience' => request('experience')
        ]);

        return [
            'success' => $status
        ];
    }

    public function show(Fighter $fighter)
    {
        return $fighter;
    }

    public function update(Fighter $fighter, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'string|required|max:25',
            'age' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }
        $status = $fighter->update([
            'username' => request('username'),
            'age' => request('age'),
            'weight' => request('weight'),
            'height' => request('height'),
            'experience' => request('experience')
        ]);

        return [
            'success' => $status
        ];
    }

    public function destroy(Fighter $fighter)
    {
        $status = $fighter->delete();

        return [
            'status' => $status
        ];
    }
}
