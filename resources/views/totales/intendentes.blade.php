@extends('layouts.main')

@section('content')

@switch($categorias->id)
    @case(1)
    <h1>Total de Votos Gobernador</h1>
        @break

    @case(2)
    <h1>Total de Votos Diputados</h1>
        @break

    @case(3)
    <h1>Total de Votos Intendente</h1>
        @break

    @case(4)
    <h1>Total de Votos Concejales</h1>
    @break

    @default

@endswitch




<div class="card-text">
    <table class="table">
        <thead>
            <tr>
                <th>Partido</th>
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
            <i class="mdi mdi-alert-circle text-warning"></i><span class="text-warning"> No se han registrado votos hasta el momento.</span>

            @endif

        </tbody>
    </table>

    <hr>

    <div class="row text-center m-t-20">
        <div class="col-lg-3 col-md-3 m-t-20">
            <h3 class="m-b-0 font-light text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $votosblancos }}</font></font></h3><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Votos en Blanco</font></font></small>
        </div>

        <div class="col-lg-3 col-md-3 m-t-20">
            <h3 class="m-b-0 font-light text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $votosnulos }}</font></font></h3><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Votos Nulos</font></font></small>
        </div>

        <div class="col-lg-3 col-md-3 m-t-20">
            <h3 class="m-b-0 font-light text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $votosrecurridos }}</font></font></h3><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Votos Recurridos</font></font></small>
        </div>

        <div class="col-lg-3 col-md-3 m-t-20">
            <h3 class="m-b-0 font-light text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $votosimpugnados }}</font></font></h3><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Votos Impugnados</font></font></small>
        </div>

    </div>

    <div class="row text-center m-t-20">
        <div class="col-lg-12 col-md-12 m-t-20">
            <h3 class="m-b-0 font-light text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $totalsufragios }}</font></font></h3><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Sufragios</font></font></small>
        </div>
    </div>






</div>


@endsection

