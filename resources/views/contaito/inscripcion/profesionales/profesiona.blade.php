<style>
    .divider {
        border: 0;
        height: 0.5px;
        background: #dfdede;
        margin: 10px 0;
    }

    .instructions {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
    }

    .checkbox-group {
        margin-top: 10px;
    }

    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        margin-left: 0; /* Asegura alineación a la izquierda */
    }

    .form-check-input {
        margin-right: 10px; /* Espacio entre el checkbox y el texto */
        margin-left: 0; /* Asegura que no se desplace a la derecha */
    }

    .form-check-label {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #333;
    }

    .continue-btn {
        margin-top: 20px;
        text-align: right; /* Alinea el botón a la derecha */
    }

    .toggle-button {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #f8f9fa; /* Fondo similar al de la imagen */
        color: #3a10b9; /* Color del texto */
        font-size: 16px; /* Tamaño del texto */
        font-family: Arial, sans-serif;
        border: 1px solid #ced4da; /* Borde gris claro */
        border-radius: 5px; /* Bordes redondeados */
        padding: 10px 15px; /* Espaciado interno */
        cursor: pointer; /* Cursor de mano al pasar por encima */
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
        transition: background-color 0.3s ease;
    }

    .toggle-button:hover {
        background-color: #e2e6ea; /* Cambio de fondo al pasar el mouse */
    }

    .toggle-icon {
        font-size: 18px; /* Tamaño del ícono */
        color: #6c757d; /* Color del ícono */
        transition: transform 0.3s ease; /* Animación al girar el ícono */
    }

    .toggle-icon2 {
        font-size: 18px; /* Tamaño del ícono */
        color: #6c757d; /* Color del ícono */
        transition: transform 0.3s ease; /* Animación al girar el ícono */
    }

    .toggle-icon3 {
        font-size: 18px; /* Tamaño del ícono */
        color: #6c757d; /* Color del ícono */
        transition: transform 0.3s ease; /* Animación al girar el ícono */
    }

    .toggle-icon.collapsed {
        transform: rotate(90deg); /* Girar ícono cuando está colapsado */
    }

    #checkbox-container {
        margin-top: 10px;
        display: none; /* Inicialmente oculto */
        border: 0.5px solid #ced4da;
        padding: 25px;
        border-radius: 15px;
        background-color: #ffffff;
    }

</style>

@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <h5 class="page__heading" style="color:black">Identifica tu actividad económica</h5>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5>1.- Ubica el subgrupo o la actividad</h5>
                        <p class="instructions">
                            Instrucciones: Da clic sobre el texto del subgrupo para ver el listado de actividades o bien, si se muestra un listado de actividades sin opción de subgrupos, da clic sobre alguna para seleccionarla. Puedes seleccionar más de un subgrupo o más de una actividad; utiliza el ícono con la flecha inversa para realizar otra búsqueda. Pasa el apuntador del mouse sobre el texto de la actividad para obtener más información. Cuentas también con la opción de búsqueda por palabra o parte de la palabra.
                        </p>
                        <hr class="divider">
                        <form action="{{ route('inscripcion.porcientoPorfesional') }}" method="POST">
                            @csrf
                            <div id="toggle-profesionales" class="toggle-button">
                                <span>Profesionales</span>
                                <span id="toggle-icon" class="toggle-icon">➕</span>
                            </div>

                            <div id="checkbox-container" style="display: none;">
                                <div class="checkbox-group text-left">
                                    @foreach (App\Models\Actividade::where('categoria', 'Profesionales')->get() as $actividad)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="actividad_{{ $actividad->id }}"
                                                name="actividades[]"
                                                value="{{ $actividad->id }}">
                                            <label
                                                class="form-check-label"
                                                for="actividad_{{ $actividad->id }}">
                                                {{ $actividad->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <br>
                            <div id="toggle-educativos" class="toggle-button">
                                <span>Educativos</span>
                                <span id="toggle-icon2" class="toggle-icon2">➕</span>
                            </div>

                            <div id="checkbox-container2" style="display: none; border: 0.5px solid #ced4da; padding: 25px;">
                                <div class="checkbox-group text-left">
                                    @foreach (App\Models\Actividade::where('categoria', 'Educativos')->get() as $actividad)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="actividad_{{ $actividad->id }}"
                                                name="actividades[]"
                                                value="{{ $actividad->id }}">
                                            <label
                                                class="form-check-label"
                                                for="actividad_{{ $actividad->id }}">
                                                {{ $actividad->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <br>
                            <div id="toggle-salud" class="toggle-button">
                                <span>Salud</span>
                                <span id="toggle-icon3" class="toggle-icon3">➕</span>
                            </div>

                            <div id="checkbox-container3" style="display: none; border: 0.5px solid #ced4da; padding: 25px;">
                                <div class="checkbox-group text-left">
                                    @foreach (App\Models\Actividade::where('categoria', 'Salud')->get() as $actividad)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="actividad_{{ $actividad->id }}"
                                                name="actividades[]"
                                                value="{{ $actividad->id }}">
                                            <label
                                                class="form-check-label"
                                                for="actividad_{{ $actividad->id }}">
                                                {{ $actividad->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <br>
                            <div id="toggle-construccion" class="toggle-button">
                                <span>Apoyo a la construcción</span>
                                <span id="toggle-icon4" class="toggle-icon4">➕</span>
                            </div>

                            <div id="checkbox-container4" style="display: none; border: 0.5px solid #ced4da; padding: 25px;">
                                <div class="checkbox-group text-left">
                                    @foreach (App\Models\Actividade::where('categoria', 'Construccion')->get() as $actividad)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="actividad_{{ $actividad->id }}"
                                                name="actividades[]"
                                                value="{{ $actividad->id }}">
                                            <label
                                                class="form-check-label"
                                                for="actividad_{{ $actividad->id }}">
                                                {{ $actividad->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <br>
                            <div id="toggle-turismo" class="toggle-button">
                                <span>Guia de turismo</span>
                                <span id="toggle-icon5" class="toggle-icon5">➕</span>
                            </div>

                            <div id="checkbox-container5" style="display: none; border: 0.5px solid #ced4da; padding: 25px;">
                                <div class="checkbox-group text-left">
                                    @foreach (App\Models\Actividade::where('categoria', 'Turismo')->get() as $actividad)
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="actividad_{{ $actividad->id }}"
                                                name="actividades[]"
                                                value="{{ $actividad->id }}">
                                            <label
                                                class="form-check-label"
                                                for="actividad_{{ $actividad->id }}">
                                                {{ $actividad->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="continue-btn">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/serviciosProfesionales.js') }}"></script>

@endsection
