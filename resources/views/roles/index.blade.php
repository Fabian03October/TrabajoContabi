@extends('layouts.app')

@section('content')
@can('ver-rol')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="color: black;">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @can('crear-rol')
                            <div class="card-body">
                                    <a class="btn btn-outline-info" href="{{ route('roles.create')}}" title="Crear nuevo rol" style="border-color: rgb(11, 75, 146); color: rgb(11, 75, 146);">
                                        <i class="fas fa-plus"></i> Nuevo Rol
                                    </a>
                            <div>
                        @endcan
                            <br>
                        </div>

                            <table class="table table-striped mt-2 table_id" id="miTabla2">
                                <thead style="background-color:rgb(28, 118, 221)">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Rol</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody style="color:black">
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td style="display: none;">{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @can('editar-rol')
                                                <a  href="{{ route('roles.edit',$role->id) }}" class="btn btn-no-border btn-outline-warning" title="Editar rol">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                            @endcan

                                            @can('borrar-rol')
                                                <button type="submit" class="btn btn-no-border btn-outline-danger" onclick="fntDeleteCargo('{{ $role->id }}', '{{ $role->name }}')">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                                                </button>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $roles->links() !!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- SWEETALERT -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
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
        { Name: 'Name' },
        // { Guard_name: 'Guard_name'},
        { Acciones: 'Acciones' }
    ],

    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    }
});
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

    <script>
        function fntDeleteCargo(roleId, nombre){
            Swal.fire({
                title: '¿Deseas borrar el rol ' + nombre + '?',
                text: "Ya no podrás visualizar este rol en la tabla.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'rgb(11, 75, 146)',
                cancelButtonColor: '#d33',
                confirmButtonText: '<i class="fas fa-check"></i> Si, Borrar',
                cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "roles/eliminar/"+roleId,
                });
                window.location="http://127.0.0.1:8000/roles";
            }
        })
        }
    </script>
@endsection
@endcan
