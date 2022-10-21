<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipes;
use App\Models\Groupes;
class EquipesContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipes::orderBy('groupe_id')->take(32)->get();
        $groupes = Groupes::take(32)->get();
        return view ('equipes.index', compact('equipes'), compact('groupes'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipes = Equipes::find($id);
        return view('equipes.detail')->with('equipes', $equipes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipes = Equipes::find($id);
        $groupes = Groupes::all();
        return view('equipes.edit')->with('equipes', $equipes)->with('groupes', $groupes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipes = Equipes::find($id);
        $input = $request->all();
        $equipes->update($input);
        return redirect('equipes')->with('flash_message','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipes::destroy($id);
        return redirect('equipes')->with('flash_message','Data has been deleted');
    }
}
