@extends('layouts.main')

@section('content')

<h1>Mesa N° {{ $mesa->numero }} Escuela: {{ $mesa->escuela->escuela }}</h1>


<div class="card-text">

        <form class="form-inline" action="{{route('mesas-categoria')}}" method="GET">
            @csrf
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Categoría</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option selected hidden>Seleccione...</option>
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
            </select>
            <input type="text" value="{{ $mesa->id }}" name="mesa_id" hidden>

            <button type="submit" class="btn btn-primary my-1">Votar</button>

        </form>


</div>

{{-- Listar votos de la mesa --}}
<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Tipo</th>
                <th>Votos</th>
                <th>Mesa</th>
                <th>Escuela</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>


                @foreach ($mesa->candidatos as $candidato )
                    <tr>
                        <td>{{$candidato->candidato}}</td>

                        <td>{{$candidato->categoria->categoria}}</td>

                        <td>{{$candidato->pivot->votos}}</td>

                        <td>{{$mesa->numero}}</td>

                        <td>{{$mesa->escuela->escuela }}</td>

                        <td>
                            <a href="{{route('mesas.eliminarvoto', [$candidato->id, $mesa->id, $candidato->pivot->votos])}}" class="btn btn-outline-danger btn-sm mr-1" onclick="return confirm('¿Seguro desea borrar el voto de la mesa {{$mesa->numero}} de la {{ $mesa->escuela->escuela }}?')"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>

                @endforeach



        </tbody>
    </table>

    {{ $candidatos->links() }}

</div>





@endsection


