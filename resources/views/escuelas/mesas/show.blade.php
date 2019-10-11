@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>Mesa N° {{ $mesa->numero }} Escuela: {{ $mesa->escuela->escuela }}</h1>
        <h3>Categoria: {{ $categoria->categoria }}</h3>
    </div>

    <div class="col-md-4">
        <a href="{{ route('mesas.show', $mesa->id) }}" class="btn btn-info">Volver <i class="mdi mdi-arrow-left-drop-circle-outline"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Advertencia - </strong> Recuerde que no puede cargar votos por duplicado!
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">


<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Lista</th>
                <th>Votos</th>

            </tr>
        </thead>
        <tbody>
            <form action="{{ route('mesas.store') }}" method="POST" class="form-horizontal form-material">
                @csrf
               <input type="text" name="mesa" value="{{ $mesa->id }}" hidden>
                @foreach ($candidatos as $candidato)


                        <tr>
                            <td><p class="font-weight-bold">{{$candidato->candidato}}</td>
                            <td>{{$candidato->lista}}</td>

                            <td>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-line"  name="votos[]" required>
                                </div>
                                <input type="text" name="candidato[]" value="{{ $candidato->id }}" hidden>
                            </td>


                        </tr>
                @endforeach

                    <tr>
                       <td><button type="submit" class="btn btn-success">Guardar <i class="mdi mdi-check-circle-outline"></i></button></td>
                    </tr>


            </form>




        </tbody>
    </table>



</div>
</div>
</div>

<div class="row">
        <div class="col-md-12">
                <i class="mdi mdi-alert-circle text-warning"></i><span class="text-warning"> Recuerde que todos los campos son obligatorios.</span>
        </div>
    </div>






@endsection


