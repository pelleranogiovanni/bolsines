@extends('layouts.main')

@section('content')

<h1>Total de Votos</h1>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Votar
</button> --}}

<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Candidato</th>
                <th>Total de Votos</th>

            </tr>
        </thead>
        <tbody>


                @foreach ($candidatos as $candidato )
                    <tr>
                        <td>{{$candidato->candidato}}</td>

                        <td>{{$candidato->totalvotos}}</td>

                    </tr>

                @endforeach



        </tbody>
    </table>

</div>






@endsection

