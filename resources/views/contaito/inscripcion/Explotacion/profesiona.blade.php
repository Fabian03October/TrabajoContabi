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

    .toggle-button {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #f8f9fa; /* Fondo similar al de la imagen */
        color: #3a10b9; /* Color del texto */
        font-size: 16px;
        font-family: Arial, sans-serif;
        border: 1px solid #ced4da; /* Borde gris claro */
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
        transition: background-color 0.3s ease;
    }

    .toggle-button:hover {
        background-color: #e2e6ea; /* Cambio de fondo al pasar el mouse */
    }

    .toggle-icon {
        font-size: 18px;
        color: #6c757d;
        transition: transform 0.3s ease;
    }

    .toggle-icon.collapsed {
        transform: rotate(90deg); /* Girar ícono cuando está colapsado */
    }

    .activity-list {
        display: none; /* Inicialmente oculto */
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 15px;
        margin-top: 10px;
        background-color: #ffffff;
        max-height: 300px; /* Limita la altura */
        overflow-y: auto; /* Agrega scroll si el contenido excede la altura */
    }

    .activity-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .form-check-input {
        margin-right: 10px; /* Espacio entre el checkbox y el texto */
    }

    .continue-btn {
        margin-top: 20px;
        text-align: right;
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

                        <form action="{{ route('inscripcion.porcientoExplotacion') }}" method="POST">
                            @csrf
                            <div id="toggle-Explotacion" class="toggle-button" onclick="toggleActivityList(1)">
                                <span>Explotación de obras de tu creación</span>
                                <span id="toggle-icon-1" class="toggle-icon">➕</span>
                            </div>

                            <div id="activity-list-1" class="activity-list">
                                @if(isset($actividades) && $actividades->count() > 0) 
                                    @foreach ($actividades as $actividad)
                                        <div class="activity-item">
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
                                @else
                                    <p>No hay actividades disponibles.</p>
                                @endif
                            </div>

                            <div class="continue-btn">
                                <a href="{{ route('verificar.codigooo') }}" class="btn btn-secondary" style="color: black; margin-right: 10px;" title="Regresar al inicio">
                                    <i class="fas fa-arrow-left"></i> Regresar
                                </a>
                                <button type="submit" class="btn btn-primary">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleActivityList(id) {
        const list = document.getElementById(`activity-list-${id}`);
        const icon = document.getElementById(`toggle-icon-${id}`);
        if (list.style.display === "none" || list.style.display === "") {
            list.style.display = "block";
            icon.textContent = "➖";
        } else {
            list.style.display = "none";
            icon.textContent = "➕";
        }
    }
</script>
@endsection
