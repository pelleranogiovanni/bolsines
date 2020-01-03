@extends('layouts.main')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body"> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Bienvenido!</h4>
    <p>El sistema de control de bolsines le permitirá registrar a cada beneficiado de manera única.</p>

</div>

<div class="alert alert-warning" role="alert">
    <i class="dripicons-warning mr-2"></i> <strong>Advertencia:</strong> Recuerde que sólo puede registrar una sola vez a cada persona, y todos los campos son OBLIGATORIOS.
</div>


<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-block">
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total de Bolsines Entregados </font></font></h3>
            <h3 class="card-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $total }} </font></font></h3>

        </div>
    </div>
</div>


@endsection
