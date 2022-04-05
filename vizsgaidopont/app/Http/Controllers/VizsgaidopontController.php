<?php

namespace App\Http\Controllers;

use App\Http\Requests\VizsgaidopontRequest;
use App\Models\Vizsgaidopont;
use Illuminate\Http\Request;

class VizsgaidopontController extends Controller
{
    public function index()
    {
        $vizsgaidopontok = Vizsgaidopont::all();
        return response()->json($vizsgaidopontok);

    }

    public function store(VizsgaidopontRequest $request)
    {
        $vizsgaidopont = new Vizsgaidopont();
        $vizsgaidopont->fill($request->all());
        $vizsgaidopont->save();
        return response()->json($vizsgaidopont, 201);

    }

    public function show(int $id)
    {
        $vizsgaidopont = Vizsgaidopont::findOrFail($id);
        return response()->json($vizsgaidopont);
    }



}
