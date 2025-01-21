@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; background-color: #f8f9fa; padding: 15px; border-bottom: 2px solid #ddd;">
        <h3 class="page__heading" style="font-weight: bold; color: #333;">Detalles de la Actividad Económica</h3>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header text-white"  style="background-color: rgb(46, 118, 200)">
                        <h5 class="mb-0">Información de la Actividad</h5>
                    </div>
                    <div class="card-body" style="background-color: #fff;">
                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Nombre:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->nombre }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Clave:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->clave }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Categoría:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->categoria }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Tasa Impositiva:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->tasa_impositiva }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Régimen Fiscal:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->regimen }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Tipo Persona:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $actividad->tipopersona }}" readonly>
                            </div>
                        </div>

                        <div class="form-group text-center mt-4">
                            <a href="{{ route('actividades.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i> Regresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
