@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Obligación</h3>
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

                        <form action="{{ route('obligaciones.update', $obligacion->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="nombre" style="color: black; font-weight: bold;">Nombre: <span class="required text-danger">*</span></label>
                                        <input type="text" name="nombre" class="form-control" value="{{ $obligacion->nombre ?? '' }}" required pattern="[A-Z()a-z.]+"  title="Debe contener solo letras">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="clave" style="color: black; font-weight: bold;">Clave: <span class="required text-danger">*</span></label>
                                        <input type="text" name="clave" class="form-control" value="{{ $obligacion->clave ?? '' }}" required pattern="[0-9]+" title="Debe contener números" >
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="descripcion" style="color: black; font-weight: bold;">Categoria: <span class="required text-danger">*</span></label>
                                        <input type="text" name="descripcion" class="form-control" value="{{ $obligacion->descripcion ?? '' }}" required pattern="[A-Za-z0-9áéíóú.\s]+" title="Debe contener solo letras mayúsculas y números">
                                    </div>
                                </div>


                                <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                                    <a href="/actividades" class="btn btn-secondary" style="color: black; margin-right: 10px;" title="Regresar al inicio">
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
