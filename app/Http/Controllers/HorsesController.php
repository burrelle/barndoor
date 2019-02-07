<?php

namespace App\Http\Controllers;

use App\Horse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HorsesController extends Controller
{
    public function index()
    {
        return view('horses.index', ['horses' => Auth::user()->horses]);
    }

    public function show($id)
    {
        $horse = Horse::findOrFail($id);
        return view('horses.show', ['horse' => $horse]);
    }

    public function create()
    {
        return view('horses.create');
    }

    public function update($id)
    {
        $horse = Horse::findOrFail($id);
        $horse->name = request('name');
        $horse->gender = request('gender');
        $horse->breed = request('breed');
        $horse->color = request('color');
        $horse->height = request('height');
        $horse->save();
        return redirect()->route('horses.index');
    }

    public function store()
    {
        Auth::user()->horses()->create([
            'name' => request('name'),
            'gender' => request('gender'),
            'breed' => request('breed'),
            'color' => request('color'),
            'height' => request('height'),
        ]);
        return redirect()->route('horses.index');
    }

    public function destroy($id)
    {
        $horse = Horse::findOrFail($id);
        $horse->delete();
        return redirect()->route('horses.index');
    }
}
