@extends('layouts.main')

@section('content')

<h1>Votos</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Votar
</button>

<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Votos</th>
                <th>Mesa</th>
                <th>Escuela</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mesa)


                    <tr>
                        <td>{{$mesa->escuela}}</td>


                    </tr>


            @endforeach


        </tbody>
    </table>

</div>








@endsection

