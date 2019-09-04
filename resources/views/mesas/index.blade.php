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
                <th>Tipo</th>
                <th>Votos</th>
                <th>Mesa</th>
                <th>Escuela</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mesas as $mesa)

                @foreach ($mesa->candidatos as $candidato )
                    <tr>
                        <td>{{$candidato->candidato}}</td>

                        <td>{{$candidato->categoria->categoria}}</td>

                        <td>{{$candidato->pivot->votos}}</td>

                        <td>{{$mesa->numero}}</td>

                        <td>{{ $mesa->escuela }}</td>

                    </tr>

                @endforeach
            @endforeach


        </tbody>
    </table>

</div>





<!-- Modal Nuevo Movimiento-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Votación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mesas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <select name="categoria_id" id="categoria" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option value="" hidden>Seleccionar la Categoría</option>
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                     <select name="candidato_id" id="candidato" class="form-control">
                            <option value="" hidden>Seleccionar Candidato</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="mesa_id" id="" class="form-control">
                        @foreach ($mesas as $mesa )
                            <option value="{{ $mesa->id }}">{{ $mesa->numero." - ".$mesa->escuela }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Votos" name="votos">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            </div>
        </div>
        </div>
</div>


@endsection

