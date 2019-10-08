@extends('layouts.main')

@section('content')

<h1>Total de Votos de Gobernadores</h1>



<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Categoria</th>
                <th>Lista</th>
                <th>Total de Votos</th>
                <th>%</th>

            </tr>
        </thead>
        <tbody>

            @if ($sum > 0)
                @foreach ($candidatos as $candidato )
                    <tr>
                        <td>{{$candidato->candidato}}</td>

                        <td>{{ $candidato->categoria->categoria }}</td>

                        <td>{{$candidato->lista}}</td>

                        <td>{{$candidato->totalvotos}}</td>

                        <td>{{ $candidato->totalvotos * 100 / $sum }} %</td>
                    </tr>
                @endforeach
            @endif
                <small>No hay votos por el momento.</small>


        </tbody>
    </table>
    {{ $candidatos->links() }}

</div>


@endsection

