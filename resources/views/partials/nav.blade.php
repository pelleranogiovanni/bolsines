<nav class="sidebar-nav">
    <ul id="sidebarnav">
    <li class="{{ setActive('home')}}"> <a class="waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
        </li>
    <li class="{{ setActive('proyectos')}}"> <a class="waves-effect waves-dark" href="{{ route('bolsines.index')}}" aria-expanded="false"><i class="mdi mdi-view-list"></i><span class="hide-menu">Bolsines Registrados</span></a>
        </li>
    <li class="{{ setActive('proyectos')}}"> <a class="waves-effect waves-dark" href="{{ route('bolsines.create') }}" aria-expanded="false"><i class="mdi mdi-account-plus  "></i><span class="hide-menu">Registrar</span></a>
    </li>
        {{-- <li class="{{ request()->routeIs('perfil') ? 'active' : ''}}"> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
        </li> --}}

    {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="icon-grid font-18"></i><span class="hide-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Totales
    </font></font></span></a>
    <ul aria-expanded="false" class="first-level collapse" style="height: 10px;">
        <li class="sidebar-item"><a href="{{ route('totales-categorias', 1) }}" class="sidebar-link"><span class="hide-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gobernador </font></font></span></a></li>
        <li class="sidebar-item"><a href="{{ route('totales-categorias', 2) }}" class="sidebar-link"><span class="hide-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Diputados </font></font></span></a></li>
        <li class="sidebar-item"><a href="{{ route('totales-categorias', 3) }}" class="sidebar-link"><span class="hide-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Intendentes </font></font></span></a></li>
        <li class="sidebar-item"><a href="{{ route('totales-categorias', 4) }}" class="sidebar-link"><span class="hide-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Concejales </font></font></span></a></li>
    </ul> --}}
</li>
    </ul>


</nav>


