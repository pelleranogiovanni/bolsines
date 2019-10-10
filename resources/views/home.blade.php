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
    <p>El sistema de gestión de votos le permitirá cargar por categorias y candidatos los resultados obtenidos.</p>
    <hr>
    <p class="mb-0">Lea las instrucciones y advertencias.</p>
</div>

<div class="alert alert-warning" role="alert">
    <i class="dripicons-warning mr-2"></i> <strong>Advertencia:</strong> Recuerde que sólo puede cargar los votos una sola vez por mesa para cada lista.
</div>

<ul class="nav nav-tabs nav-justified nav-bordered mb-3">
        <li class="nav-item">
            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                <span class="d-none d-lg-block">Escuelas</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#profile-b2" data-toggle="tab" aria-expanded="true"
                class="nav-link">
                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                <span class="d-none d-lg-block">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#settings-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                <span class="d-none d-lg-block">Settings</span>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane" id="home-b2">
            <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim.</p>
            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                porttitor eu, consequat vitae, eleifend ac, enim.</p>
        </div>
        <div class="tab-pane show active" id="profile-b2">
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                eu, consequat vitae, eleifend ac, enim.</p>
            <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim.</p>
        </div>
        <div class="tab-pane" id="settings-b2">
            <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim.</p>
            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                porttitor eu, consequat vitae, eleifend ac, enim.</p>
        </div>
    </div>


@endsection
