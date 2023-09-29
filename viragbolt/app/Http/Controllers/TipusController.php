<?php

namespace App\Http\Controllers;

use App\Models\Tipus;
use Illuminate\Http\Request;

class TipusController extends Controller
{
    //
    public function index()
    {
        $tipuses = response()->json(Tipus::all());
        return $tipuses;
    }

    public function show($id)
    {
        //az azonosító alapján megkeresi
        $tipuses = response()->json(Tipus::find($id));
        return $tipuses;
    }

    public function destroy($id)
    {
        //az azonosító alapján megkeresi
        Tipus::find($id)->delete();
        return redirect('/tipus/list');
    }

    public function store(Request $request)
    {
        $tipus = new Tipus();
        $tipus->neve = $request->neve;        
        $tipus->leiras = $request->leiras;
        $tipus->save();
        return redirect('/tipus/list');
    }

    public function update(Request $request, $id)
    {
        $tipus = Tipus::find($id);
        $tipus->neve = $request->neve;
        $tipus->leiras = $request->leiras;
        $tipus->save();
        return redirect('/tipus/list');
    }

    public function newView()
    {
        $tipuses = Tipus::all();
        return view('tipus.new', ['tipuses' => $tipuses]);
    }

    public function editView($id)
    {
        $tipus = Tipus::find($id);
        return view('tipus.edit', ["tipus" => $tipus]);
    }

    public function listView()
    {
        $tipuses = Tipus::all();
        return view("tipus.list", ["tipuses" => $tipuses]);
    }
}
