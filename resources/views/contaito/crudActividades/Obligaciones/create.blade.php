@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading" style="color: black">Crear nueva Obligación Fiscal</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <label class="text-danger">Los campos con * son obligatorios</label>
                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form action="{{ route('obligaciones.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="clave">Clave: <span class="required text-danger">*</span></label>
                                        <input type="text" name="clave" class="form-control" required pattern="[0-9]+" title="Debe contener solo números">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="nombre">Nombre: <span class="required text-danger">*</span></label>
                                        <input type="text" name="nombre" class="form-control" required pattern="[A-Z()a-z.]+" title="Debe contener solo letras mayúsculas y números" placeholder="Ingrese el nombre">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="descripcion">
                                            Descripción: <span class="required text-danger">*</span>
                                        </label>
                                        <input
                                            type="text"
                                            name="descripcion"
                                            class="form-control"
                                            required
                                            pattern="[A-Za-z0-9áéíóú.\s]+"
                                            title="Debe contener solo letras, números y espacios"
                                            placeholder="Ingrese la descripción">
                                    </div>
                                </div>

                                <!-- Otros campos de formulario aquí -->

                                <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                                    <a href="/obligaciones" class="btn btn-secondary" style="color: black; margin-right: 10px;" title="Regresar al inicio">
                                        <i class="fas fa-times"></i> Cancelar
                                    </a>
                                    <button type="submit" class="btn" title="Guardar Bacteria Lactica" style="background-color: rgb(11, 75, 146); color: white;">
                                        <i class="fas fa-check"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
