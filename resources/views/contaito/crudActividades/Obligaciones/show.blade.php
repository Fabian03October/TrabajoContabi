@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; background-color: #f8f9fa; padding: 15px; border-bottom: 2px solid #ddd;">
        <h3 class="page__heading" style="font-weight: bold; color: #333;">Detalles de la Obligación Fiscal</h3>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header text-white"  style="background-color: rgb(46, 118, 200)">
                        <h5 class="mb-0">Información de la Obligación</h5>
                    </div>
                    <div class="card-body" style="background-color: #fff;">
                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Nombre:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $obligacion->nombre }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Clave:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $obligacion->clave }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-4 col-form-label font-weight-bold">Descripcion:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" value="{{ $obligacion->descripcion }}" readonly>
                            </div>
                        </div>


                        <div class="form-group text-center mt-4">
                            <a href="{{ route('obligaciones.index') }}" class="btn btn-outline-secondary">
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
