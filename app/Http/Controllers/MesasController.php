<?php

namespace App\Http\Controllers;

use Alert;
use App\Mesa;
use App\Escuela;
use App\Candidato;
use App\Categoria;
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
        $mesas = Mesa::orderBy('numero', 'ASC')->paginate(4);

        $candidatos = Candidato::all();

        $categorias = Categoria::all();

        $escuelas = Escuela::all();

        return view('escuelas.mesas.index', compact('mesas', 'candidatos', 'categorias', 'escuelas'));
    }

    //votar individualmente metodo para guardar
    public function votoIndividual(Request $request){

        $mesa = new Mesa();

        $mesa->candidatos()->attach('candidato_id', ['candidato_id' => $request->candidato_id,'mesa_id'=> $request->mesa_id, 'votos'=>$request->votos]);

        $candidato = Candidato::find($request->candidato_id);

        $candidato->totalvotos = $candidato->totalvotos + $request->votos;

        $candidato->save();

        return redirect()->route('mesas.index');
    }

    //funcion javascript para candidatos
    public function getCandidatos(Request $request, $id){
        if($request->ajax()){
            $candidatos = Candidato::candidatos($id);
            return response()->json($candidatos);
        }
    }

    //funcion javascript para mesas
    public function getMesas(Request $request, $id){
        if($request->ajax()){
            $mesas = Mesa::mesas($id);
            return response()->json($mesas);
        }
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

        $mesa = Mesa::find($request->mesa);

        $votos = $request->votos;
        $candidatos = $request->candidato;
        $longitud = count($candidatos);
        $j=0;
        for ($i=0; $i < $longitud; $i++) {

            $mesa->candidatos()->attach('candidato_id', ['candidato_id' => $candidatos[$j],'mesa_id'=> $request->mesa, 'votos'=> $votos[$j]]);


            $candidato = Candidato::find($candidatos[$j]);
            $candidato->totalvotos = $candidato->totalvotos + $votos[$j];
            $candidato->save();

            $j++;

        }



        // $candidato = Candidato::find($request->candidato_id);

        // $candidato->totalvotos = $candidato->totalvotos + $request->votos;

        // $candidato->save();

        return redirect()->route('mesas.show', $request->mesa);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidatos = Candidato::orderBy('totalvotos', 'DESC')->paginate(10);
        $mesa = Mesa::find($id);
        $categorias = Categoria::all();

        return view('escuelas.mesas.categoriamesa', compact('candidatos', 'mesa', 'categorias'));
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
        // $candidatos= 6;
        // $mesa = 3;
        // $votos=100;
        // $managementUnit = Mesa::find(3);
        // $managementUnit->candidatos()->where('id', 6)->wherePivot('votos', 100)->detach(3);


    }

    public function verMesas(){
        $mesas = Mesa::all();

        return view('mesas.vermesas', compact('mesas'));
    }

    public function mesasCategoria(Request $request){

        $candidatos = Candidato::where('categoria_id', 'LIKE', $request->categoria_id)->get();
        $mesa = Mesa::find($request->mesa_id);
        $categoria =  Categoria::find($request->categoria_id);

        return view('escuelas.mesas.show', compact('candidatos', 'mesa', 'categoria'));
    }


    public function eliminarvoto($candidato, $mesa, $voto){

        $mesa = Mesa::find($mesa);

        $candi = Candidato::find($candidato);

        $candi->totalvotos = $candi->totalvotos - $voto;

        $candi->save();

        $mesa->candidatos()->detach([$candidato]);

        return redirect()->route('mesas.show', $mesa);


    }

}
