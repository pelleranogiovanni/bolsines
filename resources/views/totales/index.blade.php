@extends('layouts.main')

@section('content')

<h1>Total de Votos</h1>

<form class="form-inline" action="{{route('totales.index')}}" method="GET">
@csrf
<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Categoría</label>
<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categoria_id">
    @foreach ($categorias as $categoria)
        <option selected hidden>Seleccione...</option>
        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-primary my-1">Filtrar</button>
</form>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Votar
</button> --}}

<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Categoria</th>
                <th>Lista</th>
                <th>Total de Votos</th>

            </tr>
        </thead>
        <tbody>


                @foreach ($candidatos as $candidato )
                    <tr>
                        <td>{{$candidato->candidato}}</td>

                        <td>{{ $candidato->categoria->categoria }}</td>

                        <td>{{$candidato->lista}}</td>

                        <td>{{$candidato->totalvotos}}</td>


                    </tr>

                @endforeach



        </tbody>
    </table>
    {{ $candidatos->links() }}

</div>






@endsection

