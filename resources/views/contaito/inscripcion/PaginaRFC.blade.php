@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <h4 class="page__heading">Relaciones</h4>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Establece las siguientes relaciones</h5>
                        <p>
                            Instrucciones: Ahora establezcamos las siguientes relaciones <br>
                            Actividades Empresariales. Si conoces el RFC del representante de la copropiedad o sociedad conyugal 
                            de la cual eres representado captúralo en el recuadro, de lo contrario selecciona Continuar.
                        </p>

                        <div class="row">
                            <!-- Formulario de captura (diseño estático) -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipoRelacion">Captura de datos</label>
                                    <select class="form-control" id="tipoRelacion" name="tipoRelacion">
                                        <option value="Representante">Representante</option>
                                        <option value="Socio">Socio</option>
                                        <option value="Apoderado">Apoderado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rfc">RFC:</label>
                                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingresa el RFC">
                                </div>
                                <button type="button" class="btn btn-primary">Registrar</button>
                            </div>

                            <!-- Tabla de datos capturados (diseño estático) -->
                            <div class="col-md-6">
                                <label>Datos capturados</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>RFC</th>
                                            <th>Relación</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>RFC123456789</td>
                                            <td>Representante</td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm">Borrar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-center">No existen registros</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Botones de navegación -->
                        <div class="mt-4">
                            <button type="button" class="btn btn-secondary">Regresar</button>
                            <button type="button" class="btn btn-primary">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
