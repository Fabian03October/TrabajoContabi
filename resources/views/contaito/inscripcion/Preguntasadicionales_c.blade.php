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
                        <h5>Completa tu información respondiendo las siguientes preguntas:</h5>
                        <p class="instructions">
                        Instrucciones: Da clic en el recuadro de la respuesta de tu elección, después da clic en el botón Aceptar para que se muestre la siguiente pregunta. En caso de que no haya más preguntas da clic en el botón Continuar.    
                    </p>
                       
                        <hr class="divider">
                        <form action="{{ route('inscripcion.procesar') }}" method="POST">
                            @csrf
                            <h5>
                            Explotación de obras de tu creación:</h5>
                            <H6>El monto de los ingresos al año por derechos de autor, de las obras de tu creación serán (Monto aplicable durante el ejercicio 2024):</H6>
                            <div class="checkbox-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="patron_mexico" name="income[]" value="patron_mexico">
                                    <label class="form-check-label" for="patron_mexico">Menores o iguales a $100,000</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Mayores a $100,000</label>
                                </div>
                                <H5>Información adicional:</H5>
                            <H6>Para el desarrollo de tus actividades:</H6>
                            <div class="checkbox-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="patron_mexico" name="income[]" value="patron_mexico">
                                    <label class="form-check-label" for="patron_mexico">Tendrás trabajadores asalariados (pagarás sueldos y salarios)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Pagarás ingresos asimilados a salarios</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internacional" name="income[]" value="internacional">
                                    <label class="form-check-label" for="internacional">Pagarás ingresos asimilados a salarios</label>
                                </div>
                            </div>
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

