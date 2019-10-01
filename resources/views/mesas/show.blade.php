@extends('layouts.main')

@section('content')

<h1>Mesa N° {{ $mesa->numero }} Escuela: {{ $mesa->escuela->escuela }}</h1>



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
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>


        </tbody>
    </table>



</div>






@endsection


