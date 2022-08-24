<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CastModel;
class CastController extends Controller
{
    //view data
    public function index()
    {
        $cast = castModel::all(); //nama model
        return view('cast.view',compact('cast'));
    }
    public function create()
    {
        return view('cast.input');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'umur'=>'required|integer',
            'bio'=>'required'
        ]);
        $cast = new CastModel;
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->save();
        return redirect('/cast');
    }

    public function show($cast_id)
    {
        $c = castModel::find($cast_id);
        return view('cast.detail',compact('c'));
    }

    public function edit($cast_id)
    {
        $c = castModel::find($cast_id);
        return view('cast.edit',compact('c'));
    }

    public function update($cast_id, Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'umur'=>'required|integer',
            'bio'=>'required'
        ]);
        $cast = castModel::find($cast_id);
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;

        $cast->save();
        return redirect('/cast');
    }
    public function destroy($cast_id)
    {
        $cast = castModel::find($cast_id);
        $cast->delete();
        return redirect('/cast');
    }
}
