@extends('layouts.main')

@section('content')

<h1>Crear Proyecto</h1>


<div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
        <div class="card-block">
        <form class="form-horizontal form-material" method="POST" action="{{ route('proyectos.store') }}">
            @csrf
                <div class="form-group">
                    <label class="col-md-12">Nombre</label>
                    <div class="col-md-12">
                    <input type="text"  class="form-control form-control-line" name="nombre" value="{{old('nombre')}}">
                        {{$errors->first('nombre')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Autor</label>
                    <div class="col-md-12">
                    <input type="text"  class="form-control form-control-line" name="autor" value="{{old('autor')}}">
                        {{$errors->first('autor')}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                    <input type="email" class="form-control form-control-line" name="email" id="example-email" value="{{old('email')}}">
                        {{$errors->first('email')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Descripción</label>
                    <div class="col-md-12">
                    <textarea rows="5" class="form-control form-control-line"  name="descripcion" value="{{old('descripcion')}}"></textarea>
                    {{$errors->first('descripcion')}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

