@extends('layouts.main')

@section('content')

<h1>Total Mesas de Escuela: {{ $escuela->escuela }}</h1>



<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Mesa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mesa)

                @if ($mesa->escuela_id === $escuela->id)


                    <tr>
                        <td><a href="{{ route('mesas.show', $mesa->id) }}">{{$mesa->numero}}</a></td>


                    </tr>

                @endif
            @endforeach


        </tbody>
    </table>

</div>








@endsection

