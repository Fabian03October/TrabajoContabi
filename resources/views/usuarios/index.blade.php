@extends('layouts.app')

@section('content')
@can('ver-usuario')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading" style="color:black">Alta de Contribuyentes</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                
                            </div>
                            <br>
                        </div>

                        <table class="table table-striped mt-2 table_id" id="miTabla">
                            <thead style="background-color:rgb(28, 118, 221)">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Correo electronico</th>
                                <th style="color:#fff;">Rol</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody style="color:black">
                                @foreach ($usuarios as $usuario)
                                <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ ucfirst(strtolower($usuario->name)) }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                        @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolNombre)
                                                <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-no-border btn-outline-primary" href="{{ route('usuarios.show', $usuario->id) }}" title="Revisar usuario">
                                            <i class="fas fa-eye"></i> Revisar
                                        </a>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Centramos la paginacion a la derecha -->
                        {{-- <div class="pagination justify-content-end">
                            {!! $roles->links() !!}
                        </div> --}}
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
    new DataTable('#miTabla', {
        lengthMenu: [
            [10, 25, 50, 100],
            [10, 25, 50, 100]
        ],
        columns: [
            { Id: 'Id' },
            { Nombre: 'Nombre' },
            { Email: 'E-mail' },
            { Rol: 'Rol' },
            { Acciones: 'Acciones' }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        }
    });

    function confirmDelete(usuarioId, nombre) {
        Swal.fire({
            title: '¿Deseas borrar el contribuyente ' + nombre + '?',
            text: "Ya no podrás visualizar este usuario en la tabla.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'rgb(11, 75, 146)',
            cancelButtonColor: '#d33',
            confirmButtonText: '<i class="fas fa-check"></i> Si, Borrar',
            cancelButtonText: '<i class="fas fa-times"></i> Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + usuarioId).submit();
            }
        });
    }
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
@endcan
