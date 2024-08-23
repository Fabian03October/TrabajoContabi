@extends('layouts.app')

@section('content')
@can('ver-usuario')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading" style="color:black">Contribuyentes</h3> <!-- Cambié el título -->
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                            @can('crear-usuario')
                                    <a class="btn btn-outline-info" href="{{ route('usuarios.create')}}" title="Crear nuevo contribuyente" style="border-color: rgb(11, 75, 146); color: rgb(11, 75, 146);">
                                        <i class="fas fa-plus"></i> Nuevo contribuyente
                                    </a>
                                @endcan
                            </div>
                            <br>
                        </div>

                        <table class="table table-striped mt-2 table_id" id="miTabla">
                            <thead style="background-color:rgb(28, 118, 221)">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">RFC</th>
                                <th style="color:#fff;">Correo electrónico</th>
                                <th style="color:#fff;">Rol</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody style="color:black">
                                @foreach ($usuarios as $usuario)
                                <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ ucfirst(strtolower($usuario->name)) }} {{' '}} {{ucfirst(strtolower($usuario->apellido_p))}} {{' '}} {{ucfirst(strtolower($usuario->apellido_m))}}</td>
                                    <td>{{ $usuario->rfc }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                        @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolNombre)
                                                <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a  class="btn btn-no-border btn-outline-warning" href="{{ route('usuarios.edit', $usuario->id) }}" title="Editar usuario"><i class="fas fa-edit"></i> Editar</a>
                                        <button class="btn btn-no-border btn-outline-danger"  onclick="confirmDelete({{ $usuario->id }}, '{{ $usuario->name }}')" title="Borrar usuario">  <i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style' => 'display:inline', 'id' => 'delete-form-' . $usuario->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    new DataTable('#miTabla', {
        lengthMenu: [
            [10, 25, 50, 100],
            [10, 25, 50, 100]
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        }
    });

    function confirmDelete(usuarioId, nombre) {
        Swal.fire({
            title: '¿Deseas borrar al contribuyente ' + nombre + '?',
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
            confirmButtonColor: 'rgb(11, 75, 146)'
        });
    </script>
@endif
@endsection
@endcan
