<?php

namespace App\Http\Controllers;

use App\Models\Tipus;
use App\Models\Virag;
use Illuminate\Http\Request;

class ViragController extends Controller
{
    //

    public function index()
    {
        return Virag::all();
    }
    public function show($id)
    {
        return Virag::find($id);
    }
    public function destroy($id)
    {
        Virag::find($id)->delete();
        return redirect('/virag/list');
    }
    public function update(Request $request, $id)
    {
        $virag = Virag::find($id);
        $virag->virag_id = $request->virag_id;
        $virag->neve_ar = $request->neve_ar;
        $virag->tipus_id = $request->tipus_id;
        $virag->save();
        return redirect('/virag/list');
    }
    public function store(Request $request)
    {
        $virag = new Virag();
        $virag->virag_id = $request->virag_id;
        $virag->neve_ar = $request->neve_ar;
        $virag->tipus_id = $request->tipus_id;
        $virag->save();
        return redirect('/virag/list');
    }

    //VIEW-OK
    public function newView()
    {
        $tipuses = Tipus::all();
        return view('virag.new', ['tipuses' => $tipuses]);
    }
    public function editView($id)
    {
        $tipuses = Tipus::all();
        $virag = Virag::find($id);
        return view('virag.edit', ['tipuses' => $tipuses, 'virag' => $virag]);
    }
    public function listView()
    {
        $virags = Virag::all();
        return view('virag.list', ['virags' => $virags]);
    }
}
