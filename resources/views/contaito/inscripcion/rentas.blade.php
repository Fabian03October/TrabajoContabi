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
        margin-bottom: 10px;
        margin-left: 20px;
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
</style>

@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <h4 class="page__heading" style="color:black">Preguntas complementarias</h4>
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
                        <form action="{{ route('inscripcion.PreguntasProfe') }}" method="GET">
                            @csrf
                            <h7>Cobras rentas por el alquiler de casa habitación, oficinas, locales</h7>
                            <div class="checkbox-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="patron_mexico" name="income[]" value="patron_mexico">
                                    <label class="form-check-label" for="patron_mexico">Alquiler de Viviendas amuebladas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Alquiler de Viviendas no amuebladas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Alquiler de Salones para fiestas y convenciones</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Alquiler de Oficinas y locales comerciale</label>
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
@endsection

