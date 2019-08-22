<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Candidato;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();

        $candidatos = Candidato::all();

        return view('mesas.index', compact('mesas', 'candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mesa = new Mesa();

        $mesa->candidatos()->attach('candidato_id', ['candidato_id' => $request->candidato_id,'mesa_id'=> $request->mesa_id, 'votos'=>$request->votos]);


        // $mesa->candidatos()->sync($request->candidato_id);
        // $mesa->candidatos()->sync($request->mesa_id);
        // $mesa->candidatos()->sync($request->votos);

        $candidato = Candidato::find($request->candidato_id);

        $candidato->totalvotos = $candidato->totalvotos + $request->votos;

        $candidato->save();

        return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
