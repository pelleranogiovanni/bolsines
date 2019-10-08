@extends('layouts.main')

@section('content')

<h1>Mesas Totales</h1>



<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Escuela</th>
                <th>Mesa</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mesa)


                    <tr>
                        <td>{{$mesa->escuela->escuela}}</td>

                        <td><a href="{{ route('mesas.show', $mesa->id) }}">{{$mesa->numero}}</a></td>


                    </tr>


            @endforeach


        </tbody>
    </table>



</div>






@endsection

