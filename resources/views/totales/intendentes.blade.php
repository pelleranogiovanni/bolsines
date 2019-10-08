@extends('layouts.main')

@section('content')

@switch($categorias->id)
    @case(1)
    <h1>Total de Votos de Intendentes</h1>
        @break
    @case(2)
    <h1>Total de Votos de Gobernadores</h1>
        @break
    @default

@endswitch




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
                        <td><p class="font-weight-bold">{{$candidato->candidato}}</p></td>

                        <td>{{ $candidato->categoria->categoria }}</td>

                        <td>{{$candidato->lista}}</td>

                        <td><span class="badge badge-info">{{$candidato->totalvotos}}</span></td>

                        <td><span class="badge badge-danger">{{ sprintf("%.2f",$candidato->totalvotos * 100 / $sum) }} %</span></td>
                    </tr>
                @endforeach
            @else
                <small>No hay votos por el momento.</small>

            @endif

        </tbody>
    </table>
    {{ $candidatos->links() }}

</div>


@endsection

