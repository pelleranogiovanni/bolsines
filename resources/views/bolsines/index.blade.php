@extends('layouts.main')

@section('content')

<h1>Bolsines Registrados</h1>
<span class="badge badge-info">Total de Registros: {{ $total }}</span>
<hr>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal form-material" action="{{ route('bolsines.index') }}" method="GET">
            @csrf
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="form-group col-sm-4 col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" placeholder="Buscar por Apellido" name="apellido" value="{{old('apellido')}}">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-outline-success btn-flat"><i class="mdi mdi-account-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-sm-4 col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" placeholder="Buscar por DNI" name="dni" value="{{old('dni')}}">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-outline-success btn-flat"><i class="mdi mdi-account-search"></i></button>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- tabla --}}
<div class="card-text">
    <table class="table">
        <thead class="text-info">
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Box</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
                @forelse ($bolsines as $bolsin )
                    <tr>
                        <td>{{$bolsin->apellido}}</td>

                        <td>{{ $bolsin->nombre }}</td>

                        <td>{{$bolsin->dni}}</td>

                        <td>{{$bolsin->box}}</td>

                        <td>{{ $bolsin->created_at }}</td>
                    </tr>
                @empty
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button>
                        <h5><i class="mdi mdi-alert-outline"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ¡Atención!</font></font></h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        No se han encontrado registros. </font><font style="vertical-align: inherit;"></font></font>
                    </div>
                @endforelse

        </tbody>
    </table>
    {{ $bolsines->links() }}

</div>

@endsection
