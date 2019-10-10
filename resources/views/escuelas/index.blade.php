@extends('layouts.main')

@section('content')

<h1>Total Escuelas</h1>



<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Escuela</th>
                <th>Domicilio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($escuelas as $escuela)

                    <tr>
                        <td><i class="mdi mdi-school text-muted"><a href="{{ route('escuelas.show', $escuela->id) }}"> {{$escuela->escuela}}</a></td>
                        <td>{{ $escuela->domicilio }}</td>
                    </tr>

            @endforeach
        </tbody>
    </table>

</div>








@endsection

