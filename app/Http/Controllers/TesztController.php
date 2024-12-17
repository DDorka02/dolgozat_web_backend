<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{

    public function index(){
        return Teszt::all();
    }

    public function store(Request $request)
    {
        $record= new Teszt();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id)
    {
        $teszt = Teszt::where('id',$id)
        ->get();
        return $teszt;
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}

