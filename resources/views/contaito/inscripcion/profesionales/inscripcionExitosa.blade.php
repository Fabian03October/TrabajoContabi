@extends('layouts.app')

@section('title')
    Éxito - Inscripción Completada
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 style="color: #4caf50;">¡Inscripción Exitosa!</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 style="color: #28a745;">¡Felicidades! Te has inscrito exitosamente a tu actividad económica seleccionada.</h4>
                                <p>Ahora puedes proceder a descargar tu constancia de situación fiscal Actualizada.</p>
                                <div class="mt-4">
                                    <!-- Botón para descargar la constancia -->
                                    <a  href="{{ route('usuarios.pdf', auth()->user()->id) }}" target="_blank" class="btn btn-success btn-lg">
                                        Descargar Constancia de Situación Fiscal
                                    </a>
                                </div>
                                <p class="mt-3">Regresar al inicio.</p>
                                <!-- Botón para volver a la página de inscripción -->
                                <a href="{{ route('home') }}" class="btn btn-secondary">
                                    Volver al Formulario de Inscripción
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
