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

    public function store()
    {
        $concert = Auth::user()->horses()->create([
            'name' => request('name'),
            'gender' => request('gender'),
            'breed' => request('breed'),
            'color' => request('color'),
            'height' => request('height'),
        ]);
        return redirect()->route('horses.index');
    }
}
