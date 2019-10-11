@extends('layouts.main')

@section('content')

<h1>Votar Individualmente</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Cargar votación <i class="mdi mdi-email-open"></i>
</button>


<div class="card-text">
    <table class="table table-responsive">
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
                        <td><p class="font-weight-bold">{{$candidato->candidato}}</td>

                        <td>{{$candidato->categoria->categoria}}</td>

                        <td><span class="badge badge-info">{{$candidato->pivot->votos}}</td>

                        <td>{{$mesa->numero}}</td>

                        <td>{{$mesa->escuela->escuela }}</td>

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
                <form action="{{ route('voto-individual') }}" method="POST" class="form-horizontal form-material">
                @csrf
                <div class="form-group">
                    <select name="categoria_id" id="categoria" class="form-control form-control-line" required>
                        @foreach ($categorias as $categoria)
                            <option value="" hidden>Seleccionar la Categoría</option>
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                     <select name="candidato_id" id="candidato" class="form-control form-control-line" required>
                            <option value="" hidden>Seleccionar Candidato</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="escuela_id" id="escuela" class="form-control form-control-line" required>
                        @foreach ($escuelas as $escuela)
                            <option value="" hidden>Seleccionar la Escuela</option>
                            <option value="{{ $escuela->id }}">{{ $escuela->escuela }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="mesa_id" id="mesa" class="form-control form-control-line" required >
                            <option value="" hidden>Seleccionar Mesa</option>
                    </select>
                </div>

                <div class="form-group">
                   <input type="number" class="form-control form-control-line" placeholder="Votos" name="votos" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            </div>
        </div>
        </div>
</div>


@endsection

