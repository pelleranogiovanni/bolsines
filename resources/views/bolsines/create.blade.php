@extends('layouts.main')

@section('content')

<h1>Registro de Bolsin</h1>
<hr>

<div class="container">


            <form class="form-horizontal form-material" action="{{ route('bolsines.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="col-md-12">Apellido</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" class="form-control form-control-line" name="apellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">Nombre</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" class="form-control form-control-line" name="nombre" id="example-email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">DNI</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" class="form-control form-control-line" name="dni" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Box</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" class="form-control form-control-line" name="box" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Guardar <i class="mdi mdi-check-circle-outline"></i></button>
                    </div>
                </div>

            </form>

            <div class="row">
                <div class="col-md-12">
                        <i class="mdi mdi-alert-circle text-warning"></i><span class="text-warning"> Recuerde que todos los campos son obligatorios.</span> <br>
                        <i class="mdi mdi-alert-circle text-warning"></i><span class="text-warning"> El campo DNI y Box aceptan números unicamente.</span>
                </div>
            </div>


        </div>
@endsection
