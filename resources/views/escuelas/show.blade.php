@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>Total Mesas de Escuela: {{ $escuela->escuela }}</h1>
        <h4 class="font-italic text-info">Total de Mesas: {{ $mesas->count() }}</h4>
        <hr>
    </div>

    <div class="col-md-4">
        <a href="{{ route('escuelas.index') }}" class="btn btn-info">Volver <i class="mdi mdi-arrow-left-drop-circle-outline"></i></a>
    </div>
</div>


<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>N° Mesa</th>
                <th>Circuito</th>
                <th>Tipo Mesa</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mesas as $mesa)
                    <tr>
                        <td><i class="mdi mdi-table text-muted"><a href="{{ route('mesas.show', $mesa->id) }}"> {{$mesa->numero}}</a></td>
                        <td>{{ $mesa->circuito }}</td>
                        <td>{{ $mesa->tipo }}</td>

                    </tr>
            @endforeach


        </tbody>
    </table>

</div>








@endsection

