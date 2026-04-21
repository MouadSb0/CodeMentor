<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Exercise;

class ExerciceController extends Controller
{
    public function index()
    {
        $exercices = Exercise::all();
        return view('exercice', compact('exercices'));
    }

    public function show($id)
    {
        $exercice = Exercise::findOrFail($id);
        return view('single_exercice', compact('exercice'));
    }
}
