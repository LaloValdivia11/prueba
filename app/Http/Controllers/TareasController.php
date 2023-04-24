<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller
{
    public function store(Request $request){
        $request -> validate([
            'title' => 'required|min:3'
        ]);
        $tarea = new Tarea;
        $tarea -> title= $request -> title;
        $tarea -> save();
        return redirect()->route('todos')->with('success','tarea creada correctamente');


        

    }
}
