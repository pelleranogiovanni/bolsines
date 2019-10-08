<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Escuela;
use App\Candidato;
use App\Categoria;
use Illuminate\Http\Request;

class TotalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $candidatos = Candidato::all();
        $candidatos = Candidato::orderBy('totalvotos', 'DESC')
            ->where('categoria_id', 'LIKE', $request->categoria_id)
            // ->get()
            ->paginate(10);

        $categorias = Categoria::all();

        $sum = $candidatos->sum('totalvotos');

        return view('totales.index', compact('candidatos', 'categorias', 'sum'));
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


    public function totalesCategorias($id){

        $candidatos = Candidato::orderBy('totalvotos', 'DESC')
            ->where('categoria_id', 'LIKE', $id)
            // ->get()
            ->paginate(10);

        $categorias = Categoria::find($id);

        $sum = $candidatos->sum('totalvotos');

        return view('totales.intendentes', compact('candidatos', 'categorias', 'sum'));
    }


}
