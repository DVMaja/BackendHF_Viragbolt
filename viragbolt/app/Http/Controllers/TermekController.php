<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use App\Models\User;
use Illuminate\Http\Request;

class TermekController extends Controller
{
    //DVM 8000/api/termek en található meg a laravel
    public function index()
    {
        return Termek::all();
    }
    public function show($id)
    {
        return Termek::find($id);
    }
    public function destroy($id)
    {
        Termek::find($id)->delete();        
        return redirect('/termek/list');
    }
    public function update(Request $request, $id)
    {
        $termek = Termek::find($id);
        $termek->termek_id = $request->termek_id;
        $termek->eladasi_ar = $request->eladasi_ar;
        $termek->virag_id = $request->virag_id;
        $termek->save();        
        return redirect('/termek/list');
    }
    public function store(Request $request)
    {
        $termek = new Termek();
        $termek->termek_id = $request->termek_id;
        $termek->eladasi_ar = $request->eladasi_ar;
        $termek->virag_id = $request->virag_id;
        $termek->save();         
        return redirect('/termek/list');
    }

    //VIEW-OK
    public function newView()
    {
        $users = User::all();
        return view('termek.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $users = User::all();
        $termek = Termek::find($id);
        return view('termek.edit', ['users' => $users, 'termek' => $termek]);
    }
    public function listView()
    {
        $termeks = Termek::all();
        return view('termek.list', ['termeks' => $termeks]);
    }
}
