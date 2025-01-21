@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="color:black">Obligaciones Fiscales</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    {{-- @can('crear-BacLactica') --}}
                                        <a class="btn btn-outline-info" href="{{ route('obligaciones.create')}}" title="Crear Bacteria Lactica" style="border-color: rgb(11, 75, 146); color: rgb(11, 75, 146);">
                                            <i class="fas fa-plus"></i> Nueva obligacion
                                        </a>
                                    {{-- @endcan --}}
                                </div>
                                {{-- <div class="col-md-6">
                                    <!-- Dropdown de filtros -->
                                    <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="filtroDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Seleccionar filtros" style="background-color: rgb(46, 118, 200)">
                                                <i class="fa fa-filter" aria-hidden="true"></i> Filtros
                                            </button>
                                        <div class="dropdown-menu" aria-labelledby="filtroDropdown">
                                            <form action="{{ route('actividades.index') }}" method="GET" class="p-3">
                                                <div class="form-group">
                                                    <label for="filtroPalenque" style="color: blue; text-align: center;">Selecciona el tipo persona</label>

                                                    <select class="form-control" id="filtroPalenque" name="filtro">
                                                        <option value="">Selecciona un tipo</option>
                                                        <option value="filtro1" {{ request('filtro') === 'filtro1' ? 'selected' : '' }}>Fisica</option>
                                                        <option value="filtro2" {{ request('filtro') === 'filtro2' ? 'selected' : '' }}>Moral </option>
                                                    </select>
                                                    <br>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block mb-2" title="Filtrar">
                                                    <i class="fas fa-check"></i> Aplicar Filtro
                                                </button>
                                            </form>
                                            <form action="{{ route('actividades.index') }}" method="GET" class="p-3">
                                                <button type="submit" class="btn btn-outline-danger btn-block" name="reset_filtro">
                                                    <i class="fas fa-trash-alt"></i> Quitar Filtro
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <br>
                            <div class="table-responsive"> <!-- Agregar la clase table-responsive -->
                                <table class="table table-striped mt-2 table_id" id="miTabla2">
                                    <thead style="background-color:rgb(28, 118, 221)">
                                        <th style="display: none;">ID</th>
                                        <th style="color:#fff; cursor: pointer; width: 110px;" onclick="toggleIcon('icon1')">
                                            Clave <i id="icon1" class="fas fa-caret-up"></i>
                                        </th>
                                        <th style="color:#fff; cursor: pointer; width: 450px;" onclick="toggleIcon('icon2')">
                                            Nombre <i id="icon2" class="fas fa-caret-up"></i>
                                        </th>
                                        <th style="color:#fff; cursor: pointer; width: 350px;" onclick="toggleIcon('icon3')">
                                            Descripción <i id="icon3" class="fas fa-caret-up"></i>
                                        </th>
                                        <th style="color:#fff; text-align: center; width: 410px;">Acciones</th>

                                    </thead>
                                    <tbody style="color: black;">
                                        @foreach ($obligaciones as $obligacion)
                                        <tr>
                                            <td style="display: none;">{{ $obligacion->id }}</td>
                                            <td>{{ $obligacion->clave }}</td>
                                            <td>{{ $obligacion->nombre }}</td>
                                            <td>{{ $obligacion->descripcion }}</td>
                                            <td>
                                                <form action="{{ route('obligaciones.destroy',$obligacion->id) }}" method="POST">

                                                    <a class="btn btn-outline-info" href="{{ route('obligaciones.show', $obligacion->id)}}" title="Ver información" style="border-color: rgb(11, 75, 146); color: rgb(11, 75, 146);">
                                                        <i class="fas fa-search"></i> Inspeccionar
                                                    </a>

                                                        <a href="{{ route('obligaciones.edit', $obligacion->id) }}" class="btn btn-no-border btn-outline-warning" title="Editar Bacteria Lactica">
                                                            <i class="fas fa-edit"></i> Editar
                                                        </a>

                                                        {{-- @php
                                                            $inte = \App\Models\Inscripcione::where('actividade_id', $actividade->id)->exists();
                                                            $canDelete = !$inte && Gate::allows('Borrar-rol');
                                                        @endphp
                                                        @if ($canDelete)
                                                            <button type="submit" class="btn btn-no-border btn-outline-danger" onclick="fntDeleteActividad('{{ $actividade->id }}', '{{ $actividade->name }}')">
                                                                <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                                                            </button>
                                                        @endif --}}
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- Cierre de div.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        new DataTable('#miTabla2', {
    lengthMenu: [
        [10, 25, 50, 100],
        [10, 25, 50, 100]
    ],

    columns: [
        { Id: 'Id' },
        { Clave: 'clave' },
        { Nombre: 'nombre' },
        { Descripcion: 'descripcion' },
        // { tipopersona: 'tipopersona' },
        // { Maguey: 'maguey' },
        // { Alumno: 'alumno' },
        // { Especie: 'especie' },
        { Acciones: 'acciones' }

    ],

    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    }
});
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleIcon(iconId) {
            var icon = document.getElementById(iconId);
            if (icon.classList.contains('fa-caret-up')) {
                icon.classList.remove('fa-caret-up');
                icon.classList.add('fa-caret-down');
            } else {
                icon.classList.remove('fa-caret-down');
                icon.classList.add('fa-caret-up');
            }
        }
        // function fntDeleteActividad(actividadId, nombre){
        //     Swal.fire({
        //         title: '¿Deseas borrar el rol ' + nombre + '?',
        //         text: "Ya no podrás visualizar este rol en la tabla.",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: 'rgb(11, 75, 146)',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: '<i class="fas fa-check"></i> Si, Borrar',
        //         cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
        //     }).then((result) => {
        //     if (result.isConfirmed) {
        //         $.ajax({
        //             type: "post",
        //             url: "actividades/eliminar/"+actividadId,
        //         });
        //         window.location="http://127.0.0.1:8000/actividades";
        //     }
        // })
        // }

    </script>

@endsection

@section('scripts')
    @if(session('success'))
    <script>
        Swal.fire({
            title: "Felicidades!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            confirmButtonColor: 'rgb(11, 75, 146)'  // Cambiado aquí
        });
    </script>
    @endif

@endsection
