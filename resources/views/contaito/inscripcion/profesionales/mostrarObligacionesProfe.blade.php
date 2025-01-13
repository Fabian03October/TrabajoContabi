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
        <h5 class="page__heading" style="color:black">Cuestionario de actividades económicas y obligaciones de personas físicas</h5>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5> <i class="fa fa-check" aria-hidden="true"></i> Has finalizado la captura de tu información, por favor revísala.</h5>
                        {{-- <p class="instructions">
                            Instrucciones: Da clic en el recuadro de la respuesta de tu elección, después da clic en el botón Aceptar para que se muestre la siguiente pregunta. En caso de que no haya más preguntas da clic en el botón Continuar.
                        </p> --}}
                        <h6>Indica cómo realizas tus actividades y el porcentaje de ingresos que percibes por cada una.</h6>
                        <hr class="divider">
                        <form action="{{ route('inscripcion.inscribirProfesional') }}" method="POST">
                            @csrf
                            <div class="table-container">
                                <table class="table table-bordered" style="border: 2px solid #dcdcdc; border-collapse: collapse;">
                                    <caption style="caption-side: top; font-weight: bold; font-size: 18px; border: 1px solid #dcdcdc; padding: 5px;">
                                        {{'Regimen: '}} {{$regimen->nombre}}
                                    </caption>
                                    <thead style="border: 2px solid #dcdcdc;">
                                        <tr>
                                            <th class="text-center" style="border: 1px solid #dcdcdc; height: 40px;">Clave</th>
                                            <th style="border: 1px solid #dcdcdc; height: 40px;">Características</th>
                                            <th style="border: 1px solid #dcdcdc; height: 40px;">Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody id="actividad-table-body">
                                        @foreach ($actividades as $actividad)
                                            <tr id="actividad-{{ $actividad->id }}">
                                                <td class="text-center" style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{ $actividad->clave }}
                                                    <input type="hidden" name="actividad_id[]" value="{{ $actividad->id }}">
                                                </td>
                                                <td style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{'Actividad economica'}}
                                                </td>
                                                <td style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{$actividad->nombre}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="table-container">
                                <table class="table table-bordered" style="border: 2px solid #dcdcdc; border-collapse: collapse;">
                                    <thead style="border: 2px solid #dcdcdc;">
                                        <tr>
                                            <th class="text-center" style="border: 1px solid #dcdcdc; height: 40px;">Clave</th>
                                            <th style="border: 1px solid #dcdcdc; height: 40px;">Obligaciones</th>
                                            <th style="border: 1px solid #dcdcdc; height: 40px;">Próximo vencimiento</th>
                                        </tr>
                                    </thead>
                                    <tbody id="actividad-table-body">
                                        @foreach ($obligaciones as $obligacion)
                                            <tr id="actividad-{{ $actividad->id }}">
                                                <td class="text-center" style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{ $obligacion->clave }}
                                                    {{-- <input type="hidden" name="actividad_id[]" value="{{ $actividad->id }}"> --}}
                                                </td>
                                                <td class="text-center" style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{$obligacion->nombre}}
                                                </td>
                                                <td class="text-center" style="border: 1px solid #dcdcdc; height: 30px;">
                                                    {{$obligacion->descripcion}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <label>
                                Las obligaciones y características fiscales proporcionadas en esta guía, se asignan con base en la legislación fiscal vigente y en la información que proporcionaste en cada una de las preguntas del cuestionario, por lo que éstas podrán variar si dicha legislación sufre cambios o si te ubicas en una situación jurídica o de hecho diferente. Esta guía se emite con fines informativos, no crea derechos ni establece obligaciones distintas a las contenidas en las disposiciones fiscales vigentes.
                            </label>
                            <div class="continue-btn">
                                <button type="submit" class="btn btn-primary">Inscribir</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
