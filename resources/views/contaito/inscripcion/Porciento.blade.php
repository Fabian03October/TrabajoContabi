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

    .table-container {
        margin-top: 20px;
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
                        <h5>2.- Completa tu información respondiendo las siguientes preguntas:</h5>
                        <p class="instructions">
                            Instrucciones: Da clic en el recuadro de la respuesta de tu elección, después da clic en el botón Aceptar para que se muestre la siguiente pregunta. En caso de que no haya más preguntas da clic en el botón Continuar.
                        </p>
                        <h6>Indica cómo realizas tus actividades y el porcentaje de ingresos que percibes por cada una.</h6>
                        <hr class="divider">
                        <form action="{{ route('inscripcion.procesar') }}" method="POST">
                            @csrf
                            <div class="table-container">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Descripción</th>
                                            <th>Forma en que realizas tu actividad económica</th>
                                            <th>Porcentaje</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($actividades as $actividad)
                                            <tr>
                                                <td>{{ $actividad['descripcion'] }}</td>
                                                <td>
                                                    <select class="form-select" name="forma_actividad[]">
                                                        <option value="">Selecciona opción</option>
                                                        <option value="individual">Individual</option>
                                                        <option value="sociedad">Sociedad</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="porcentaje[]" min="0" max="100" value="0">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i> Borrar
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-end">Total:</td>
                                            <td>
                                                <input type="text" class="form-control" readonly value="0%" id="totalPorcentaje">
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
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
