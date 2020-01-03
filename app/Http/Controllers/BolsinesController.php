<?php

namespace App\Http\Controllers;

use App\Bolsine;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBolsin;
use App\Http\Requests\UpdateBolsin;

class BolsinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dni = $request->dni;
        $apellido = $request->apellido;

        $bolsines = Bolsine::orderBy('created_at', 'DESC')
            ->dni($dni)
            ->apellido($apellido)
            ->paginate(25);

        $total = $bolsines->count();

        return view('bolsines.index', compact('bolsines', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bolsines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBolsin $request)
    {
        $bolsin = Bolsine::create($request->all());

        alert()->success('Se ha registrado el bolsin', 'Éxito!');

        return back();
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
        $bolsin = Bolsine::find($id);

        return view('bolsines.edit', compact('bolsin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBolsin $request, $id)
    {
        $bolsin = Bolsine::find($id);

        // $validated = $request->validated();


        $bolsin->update($request->all());

        alert()->success('Se ha actualizado el bolsin', 'Éxito!');

        return redirect()->route('bolsines.index');
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
