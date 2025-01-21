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
    text-align: right;
    /* Alinea el botón a la derecha */
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
            <h5>1.- Completa tu información respondiendo las siguientes preguntas:</h5>
            <p class="instructions">
              Instrucciones: Da clic en el recuadro de la respuesta de tu elección, después da clic en el botón Aceptar para que se muestre la siguiente pregunta. En caso de que no haya más preguntas, da clic en el botón Continuar.
            </p>
            <h6>Eres asalariado</h6>
            <hr class="divider">
            <form action="{{ route('inscripcion.porcientoAsalariado') }}" method="POST"> 
              @csrf
              <h6>Tus ingresos por salarios o asimilados a salarios:</h6>
              <div class="checkbox-group">
                @foreach($actividades as $actividad)
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="actividad_{{ $actividad->id }}" name="actividades[]"
                    value="{{ $actividad->id }}"> 
                  <label class="form-check-label" for="actividad_{{ $actividad->id }}">
                    {{ $actividad->nombre }}
                  </label>
                </div>
                @endforeach
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