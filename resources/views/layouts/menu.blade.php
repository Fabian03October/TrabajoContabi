<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Inicio</span>
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

    <a class="nav-link" href="{{ route('usuarios.pdf', auth()->user()->id) }}" target="_blank">
            <i class="fas fa-file-pdf"></i><span>Imprimir CSF</span>
    </a>

    <div class="dropdown" style="margin-bottom: 3px;">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-bottom: 3px;">
            <span class="d-none d-sm-inline">
                <i class="fas fa-file-invoice-dollar"></i>Gestión de Actividades
            </span> <!-- Texto, oculto en dispositivos pequeños -->
        </a>

        <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuLink" style="font-size: 0.9rem; width: 245px; text-align: center;"> <!-- Ajustar el ancho del submenu -->

            <a class="nav-link small" href="/actividades" style="padding-left: 1px; padding-right: 1px; color:  rgb(11, 75, 146); width: 200px; margin: auto; margin-bottom: 5px; margin-top: 5px; background-color: #ffffff;"> <!-- Ajustar el ancho del botón del submenu y centrar horizontalmente -->
                <i class="fas fa-file-invoice-dollar"></i><span>Actividades Fiscales</span>
            </a>

            <a class="nav-link small" href="/obligaciones" style="padding-left: 1px; padding-right: 1px; color:  rgb(11, 75, 146); width: 200px; margin: auto; margin-bottom: 5px; margin-top: 5px; background-color: #ffffff;"> <!-- Ajustar el ancho del botón del submenu -->
                <i class="fas fa-user-lock"></i><span>Obligaciones</span>
            </a>

    </div>    </div>
    <a class="nav-link" href="/inscripcion">
        <i class="fa-solid fa-receipt"></i><span>Inscripción a un Régimen</span>
    </a>



</li>
