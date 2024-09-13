<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    @can('ver-usuario')
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Inscripción al RFC</span>
    </a>
    @endcan

    @can('ver-usuario')
    <a class="nav-link" href="/usuarios-activos">
        <i class=" fas fa-users"></i><span>Contribuyentes</span>
    </a>
    @endcan

    @can('ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
    @can('ver-blog')
    <a class="nav-link" href="{{ route('usuarios.pdf', auth()->user()->id) }}" target="_blank">
        <i class="fas fa-file-pdf"></i><span>Imprimir CSF</span>
    </a>
    @endcan

    @can('ver-blog')
    <a class="nav-link" href="/inscripcion">
        <i class="fas fa-bookmark"></i><span>Inscripción a Regimen</span>
    </a>
    @endcan

</li>
