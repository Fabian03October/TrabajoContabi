<style>
    .divider {
        border: 0; /* Elimina el borde predeterminado */
        height: 0.5px; /* Altura de la línea */
        background: #dfdede; /* Color de la línea */
        margin: 10px 0; /* Espaciado arriba y abajo de la línea */
    }

    .instructions {
        font-family: Arial, sans-serif; /* Cambia el tipo de letra del label */
        font-size: 16px; /* Ajusta el tamaño de la fuente si es necesario */
        color: #333; /* Cambia el color del texto si es necesario */
    }
    .checkbox-group {
    margin-top: 10px; /* Espacio arriba de los checkboxes */
}

.form-check {
    margin-bottom: 10px; /* Espacio abajo de cada checkbox */
    margin-left: 20px; /* Ajusta el margen izquierdo para desplazar los checkboxes hacia la derecha */
}

.form-check-label {
    font-family: Arial, sans-serif; /* Tipo de letra para las etiquetas */
    font-size: 14px; /* Tamaño de la fuente para las etiquetas */
    color: #333; /* Color del texto de las etiquetas */
}

</style>
@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="navbar-breadcrumbs">
            <x-breadcrumbs :breadcrumbs="$breadcrumbs" />
        </div>

        <h3 class="page__heading" style="color:black">Inscripción al régimen</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Tipos de ingreso</h4>
                        <hr class="divider"> <!-- Línea horizontal -->
                        <label for="xx" class="instructions">
                            Instrucciones: Señala el tipo de ingreso que percibes dando clic en la opción que corresponda. Pasa el apuntador del mouse o da clic sobre el texto de cada ingreso para obtener ayuda.
                        </label>
                        <hr class="divider">
                        <label for="income-types" class="instructions">
                            Por favor identifica el tipo de ingreso que percibes:
                        </label>
                        <form action="{{ route('inscripcion.select') }}" method="POST">
                            @csrf
                            <div class="checkbox-group">
                                @foreach(\App\Models\TipoIngreso::all() as $familia)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="income{{ $familia->id }}" name="income[]" value="{{ $familia->id }}">
                                        <label class="form-check-label" for="income{{ $familia->id }}">
                                            {{ $familia->nombre }}
                                        </label>
                                    </div>
                                @endforeach
                                <!-- Puedes agregar más checkboxes estáticos aquí si es necesario -->
                            </div>
                            <button type="submit" class="btn btn-primary" title="Guardar nuevo usuario">
                                <i class="fas fa-check"></i> Guardar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
