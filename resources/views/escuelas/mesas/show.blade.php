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
            <form action="{{ route('mesas.store') }}" method="POST">
                @csrf
               <input type="text" name="mesa" value="{{ $mesa->id }}" hidden>
                @foreach ($candidatos as $candidato)


                        <tr>
                            <td>{{$candidato->candidato}}</td>
                            <td>{{$candidato->lista}}</td>

                            <td>
                                <input type="text"  name="votos[]" >
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






@endsection


