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
                         <!-- Nota al usuario final con color personalizado y auto-ocultamiento -->
                         <div class="alert alert-info" id="autoDismissAlert" role="alert" style="background-color: #487dd9; color: white;">
                            Por favor, active al contribuyente para que pueda inscribirse al RFC.
                        </div>
                        <div class="row">
                            <!-- Campos de solo lectura -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Nombre:</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Apellido Paterno:</label>
                                    <input type="text" class="form-control" value="{{ $user->apellido_p }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Apellido Materno:</label>
                                    <input type="text" class="form-control" value="{{ $user->apellido_m }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Sexo:</label>
                                    <input type="text" class="form-control" value="{{ $user->sexo }}" readonly>
                                </div>
                            </div>

                            @php
                                $fecha_nacimiento = $user->fecha_nacimiento;
                                $fecha_formateada = app('App\Http\Controllers\UsuarioController')->fechas($fecha_nacimiento);
                                $fecha_cambiEstatus = $user->fecha_cambiEstatus;
                                $fecha_statusformateada = app('App\Http\Controllers\UsuarioController')->fechas($fecha_cambiEstatus);
                            @endphp

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Fecha de nacimiento:</label>
                                    <input type="text" class="form-control" value="{{ $fecha_formateada }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">CURP:</label>
                                    <input type="text" class="form-control" value="{{ $user->curp }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Correo Electrónico:</label>
                                    <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Fecha del Último Cambio de Estatus:</label>
                                    <input type="text" class="form-control" value="{{ $fecha_statusformateada }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;">Nombre Comercial:</label>
                                    <input type="text" class="form-control" value="{{ $user->NombreComercial }}" readonly>
                                </div>
                            </div>


                                <!-- Botones -->
                            <div class="col-md-12 text-center">

                                    <!-- Botón "Cancelar" -->
                                <a href="{{ route('usuarios.index') }}" class="btn btn-outline-danger" title="Cancelar">
                                        <i class="fas fa-times"></i> Cancelar
                                </a>
                                      <!-- Botón "Activar" -->
                                <form action="{{ route('usuarios.activate', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success" title="Activar nuevo contribuyente">
                                        <i class="fas fa-check"></i> Activar
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script para ocultar la alerta después de unos segundos -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById('autoDismissAlert').style.display = 'none';
        }, 8000); // La alerta desaparecerá después de 5 segundos
    });
</script>
@endsection
