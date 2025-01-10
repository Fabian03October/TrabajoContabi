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
                            Instrucciones: Señala el tipo de ingreso que percibes dando clic en la opción que corresponda.
                        </label>
                        <hr class="divider">
                        <form action="{{ route('inscripcion.procesar') }}" method="POST">
                @csrf
                <div class="checkbox-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="asalariado" name="income[]" value="asalariado">
                        <label class="form-check-label" for="asalariado">Eres asalariado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jubilado" name="income[]" value="jubilado">
                        <label class="form-check-label" for="jubilado">Eres jubilado o pensionado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="profesional" name="income[]" value="profesional">
                        <label class="form-check-label" for="profesional">Prestas servicios profesionales de manera independiente</label>
                    </div>
                    <!-- Añade más checkboxes según sea necesario -->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rentas" name="income[]" value="rentas">
                        <label class="form-check-label" for="rentas">Cobras rentas por el alquiler de casa habitación, oficinas, locales</label>
                    </div>

                    <label for="xx" class="instructions">
                         Tienes un negocio y:
                        </label>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ActividadesEmpre" name="income[]" value="ActividadesEmpre">
                        <label class="form-check-label" for="ActividadesEmpre">Realizas actividades empresariales (comerciales, industriales, agrícolas, ganaderas, silvícolas o pesqueras)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="profesional" name="income[]" value="profesional">
                        <label class="form-check-label" for="profesional">Actividades empresariales con ingresos por la enajenación de bienes o la prestación de servicios a través de Internet, plataformas, aplicaciones informáticas y similares</label>
                    </div>
                    

                </div>
                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection