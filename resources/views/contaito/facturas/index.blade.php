@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Servicios de Factura</h3>
            <div class="ml-auto">
                <div class="ml-auto">
                    <a href="#" class="mr-3">Consultar</a>
                    <a href="{{ route('facturacion.create') }}" >
                        Generar <i class="fas fa-caret-down"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Seleccione la opción deseada:</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Consultar Facturas Emitidas</a></li>
                                <li class="list-group-item"><a href="#">Consultar Facturas Recibidas</a></li>
                                <li class="list-group-item"><a href="#">Recuperar Descargas de CFDI</a></li>
                                <li class="list-group-item"><a href="#">Consultar Solicitudes de Cancelación</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
