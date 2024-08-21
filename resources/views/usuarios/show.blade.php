@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading" style="color: black">Revisar Contribuyente</h3>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Campos de solo lectura -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Nombre</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Apellido Paterno</label>
                                    <input type="text" class="form-control" value="{{ $user->apellido_p }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Apellido Materno</label>
                                    <input type="text" class="form-control" value="{{ $user->apellido_m }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Fecha de Inicio de Operaciones</label>
                                    <input type="text" class="form-control" value="{{ $user->FechaIniOP }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Fecha Último Cambio de Estatus</label>
                                    <input type="text" class="form-control" value="{{ $user->fechaUltiCamEst }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Nombre Comercial</label>
                                    <input type="text" class="form-control" value="{{ $user->NombreComercial }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">CURP</label>
                                    <input type="text" class="form-control" value="{{ $user->curp }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Correo Electrónico</label>
                                    <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <!-- Botones -->
<div class="col-md-12 text-center">
    <!-- Botón "Activar" -->
    <form action="{{ route('usuarios.activate', $user->id) }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-success" title="Activar usuario">
        <i class="fas fa-check"></i> Activar
    </button>
</form>


    <!-- Botón "Cancelar" -->
    <a href="{{ route('usuarios.index') }}" class="btn btn-outline-danger" title="Cancelar">
        <i class="fas fa-times"></i> Cancelar
    </a>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
