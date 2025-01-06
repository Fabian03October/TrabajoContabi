
@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header d-flex justify-content-between align-items-center">
        <div class="ml-auto d-flex align-items-center">
            <x-breadcrumbs :breadcrumbs="$breadcrumbs" />

            <!-- Formulario de Cierre de Sesión -->
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link ml-5" style="color: blue;">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>

    @php
        $cp = \App\Models\User::query()
            ->join('domicilios', 'domicilios.id', '=', 'users.domicilio_id')
            ->select('domicilios.cp as cp')
            ->where('users.id', auth()->user()->id) // Suponiendo que quieres el CP del usuario autenticado
            ->first(); // Usamos first() para obtener un solo registro
        $today = (new \DateTime())->format('Y-m-d');
    @endphp

    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Comprobante 1</h3>
                        <form action="{{ route('facturacion.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3  border-gray p-3">
                                <div class="col">
                                    <label for="regimenFiscal" class="form-label small"><i class="fas fa-bars"></i> Régimen fiscal *</label>
                                    <input type="text" class="form-control" id="regimenFiscal" required>
                                </div>

                                <div class="col">
                                    <label for="codigoPostal" class="form-label small"><i class="fas fa-bars"></i> Código Postal *</label>
                                    <input type="text" class="form-control" value="{{ $cp ? $cp->cp : '' }}" id="codigoPostal" required>
                                </div>
                                <div class="col">
                                    <label for="fechaEmision" class="form-label small"><i class="fas fa-bars"></i> Fecha de emisión *</label>
                                    <input type="date" class="form-control" id="fechaEmision" max="{{ $today }}" value="{{ $today}}"required>
                                </div>
                                <div class="col">
                                    <label for="tipoFactura" class="form-label small"><i class="fas fa-bars"></i> Tipo de factura *</label>
                                    <select class="form-control" id="tipoFactura" required>
                                        <option value="" disabled selected>Seleccione el tipo de factura</option>
                                        <option value="Ingreso">Ingreso</option>
                                        <option value="Pago">Pago</option>
                                        <option value="Nomina">Nómina</option>
                                        <option value="Egreso">Egreso</option>
                                        <option value="Traslado">Traslado</option>
                                    </select>
                                </div>


                                <div class="col">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="forma_pago"><i class="fas fa-bars"></i> Forma pago: <span class="required text-danger">*</span></label>
                                        <select id="forma_pago" name="forma_pago" class="form-control custom-select" required>
                                            <option value="" disabled selected>Selecciona</option>
                                            @foreach(\App\Models\Formapago::all() as $fp)
                                                <option value="{{ $fp->id }}">  {{ $fp->nombre }}<br>
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col">
                                    <label for="metodo_pago" class="form-label small"><i class="fas fa-bars"></i> Método de pago *</label>
                                    <select class="form-control" id="metodo_pago" required>
                                        <option value="1">Pago en Parcialidades o difereido</option>
                                        <option value="2">Pago en una sola exibición</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2 border-gray p-3">
                                <div class="col-12 mb-2">
                                    <label  style="color: black; font-weight: bold;">Datos generales</label>
                                </div>
                                <div class="col">

                                    <div class="col">
                                        <label for="moneda" class="form-label small">
                                            <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje1()">
                                                <i class="fas fa-question-circle" style="color: blue"></i>
                                            </button>
                                            Moneda *:
                                        </label>
                                        <div id="mensaje1" class="mensaje-info d-none" role="alert">
                                            Selecciona el tipo de moneda con la cual se realiza la operación.
                                        </div>
                                        <input type="text" class="form-control" id="moneda" required>
                                    </div>
                                    <div class="col">
                                        <label for="campo5" class="form-label small"><i class="fas fa-bars"></i> Condiciones de Pago:</label>
                                        <input type="text" class="form-control" id="campo5" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="cambio" class="form-label small">
                                        <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje2()">
                                            <i class="fas fa-question-circle" style="color: blue"></i>
                                        </button>
                                        Tipo de cambio *:
                                    </label>
                                    <div id="mensaje2" class="mensaje-info d-none" role="alert">
                                        Cuando hayas seleccionado una Mondea distinata al peso Mexicano debes capturar el número de pesos....
                                    </div>
                                    <input type="text" class="form-control" id="tipoCambio" required>
                                </div>
                                <div class="col">
                                    <label for="serie" class="form-label small">
                                        <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje3()">
                                            <i class="fas fa-question-circle" style="color: blue"></i>
                                        </button>
                                        Serie:
                                    </label>
                                    <div id="mensaje3" class="mensaje-info d-none" role="alert">
                                        Captura la serie de la factura que usas para el control....
                                    </div>
                                    <input type="text" class="form-control" id="tipoCambio" required>
                                </div>
                                <div class="col">
                                    <label for="campo4" class="form-label small"><i class="fas fa-bars"></i> Folio:</label>
                                    <input type="text" class="form-control" id="campo4" required>
                                </div>
                            </div>
                            <div class="row mb-2 border-gray p-3">
                                <div class="col-12 mb-2">
                                    <label  style="color: black; font-weight: bold;" >Datos del cliente</label>
                                </div>
                                <div class="col-4">
                                    <div class="col">
                                        <label for="cliente_id" class="form-label small">
                                            <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje4()">
                                                <i class="fas fa-question-circle" style="color: blue"></i>
                                            </button>
                                            Cliente Frecuente *:
                                        </label>
                                        <div id="mensaje4" class="mensaje-info d-none" role="alert">
                                            Selecciona el cliente registrado.....
                                        </div>
                                        <input type="text" class="form-control" id="cliente_id" style="height: 30px;" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col">
                                        <label for="razonsocial" class="form-label small">
                                            <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje5()">
                                                <i class="fas fa-question-circle" style="color: blue"></i>
                                            </button>
                                            Nombre o Razón Social *:
                                        </label>
                                        <div id="mensaje5" class="mensaje-info d-none" role="alert">
                                            Cuando hayassos....
                                        </div>
                                        <input type="text" class="form-control" id="razonsocial" style="height: 30px;" required>
                                    </div>
                                    <div class="col">
                                        <label for="cp" class="form-label small">Codigo Postal:</label>
                                        <input type="text" class="form-control" id="cp" style="height: 30px;" required>
                                    </div>
                                    <div class="col">
                                        <label for="regimen" class="form-label small">Regimen Fiscal:</label>
                                        <input type="text" class="form-control" id="regimen" style="height: 30px;" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col">
                                        <label for="serie" class="form-label small">
                                            <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje6()">
                                                <i class="fas fa-question-circle" style="color: blue"></i>
                                            </button>
                                            Uso de la factura:
                                        </label>
                                        <div id="mensaje6" class="mensaje-info d-none" role="alert">
                                            Captura ll....
                                        </div>
                                        <input type="text" class="form-control" id="tipoCambio" style="height: 30px;" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2 border-gray p-3">
                                <div class="col-12 mb-2">
                                    <label style="color: black; font-weight: bold;">Productos o servicios</label>
                                </div>

                                <!-- Botón para agregar -->
                                <button type="button" class="btn btn-primary" id="addProductBtn">Agregar</button>

                                <!-- Formulario oculto inicialmente -->
                                <div id="formulario" class="d-none mt-4 p-4 border rounded shadow" style="width: 1200px; max-width: 150%;">
                                    <!-- Contenido del formulario -->

                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="descripcion" class="form-label small">
                                                <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje1()">
                                                    <i class="fas fa-question-circle" style="color: blue"></i>
                                                </button>
                                                Descripcion detallada *:
                                            </label>
                                            <div id="mensaje1" class="mensaje-info d-none" role="alert">
                                                Selecciona el tipo de moneda con la cual se realiza la operación.
                                            </div>
                                            <input type="text" class="form-control" id="descripcion"  style="height: 30px;" required>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="producto" class="form-label small"> Producto o servicio:</label>
                                            <input type="text" class="form-control" id="producto"  style="height: 30px;" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="u_medida" class="form-label small">Unidad de medida:</label>
                                            <input type="text" class="form-control" id="u_medida"  style="height: 30px;" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cantidad" class="form-label small">
                                                <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje1()">
                                                    <i class="fas fa-question-circle" style="color: blue"></i>
                                                </button>
                                                Cantidad *:
                                            </label>
                                            <div id="mensaje1" class="mensaje-info d-none" role="alert">
                                                Selecciona el tipo de moneda con la cual se realiza la operación.
                                            </div>
                                            <input type="text" class="form-control" id="cantidad"  style="height: 30px;" required>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="var_unitario" class="form-label small"> Valor unitario:</label>
                                            <input type="text" class="form-control" id="var_unitario"  style="height: 30px;" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="importe" class="form-label small">Importe:</label>
                                            <input type="text" class="form-control" id="importe"  style="height: 30px;" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="descuento" class="form-label small">Descuento:</label>
                                            <input type="text" class="form-control" id="descuento"  style="height: 30px;" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="ob_impu" class="form-label small">
                                                <button type="button" class="btn btn-link p-0" onclick="mostrarMensaje7()">
                                                    <i class="fas fa-question-circle" style="color: blue"></i>
                                                </button>
                                                Objeto de Impuesto *:
                                            </label>
                                            <div id="mensaje7" class="mensaje-info d-none" role="alert">
                                                Selecciona el objeto de impuesto.
                                            </div>
                                            <select id="ob_impuesto" name="ob_impuesto" class="form-control custom-select" required>
                                                <option value="" disabled selected>Selecciona</option>
                                                @foreach(\App\Models\Obimpuesto::all() as $obip)
                                                    <option value="{{ $obip->id }}">  {{ $obip->nombre }}<br>
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="num_identificacion" class="form-label small"> Numero de identificacion:</label>
                                            <input type="text" class="form-control" id="num_identificacion"  style="height: 30px;" required>
                                        </div>
                                    </div>

                                    <!-- Botones de acción -->
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-danger" id="cancelarBtn">Cancelar</button>
                                    </div>
                                </div>

                            </div>

                            <!-- Aquí puedes añadir más campos o botones -->
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   {{-- Metodo js para esconde el formulario de agregar producto o servicio --}}
    <script>
          document.addEventListener("DOMContentLoaded", function() {
            // Seleccionar los elementos del DOM
            const addProductBtn = document.getElementById('addProductBtn');
            const formularioDiv = document.getElementById('formulario');
            const cancelarBtn = document.getElementById('cancelarBtn');

            // Evento para mostrar el formulario y ocultar el botón "Agregar"
            addProductBtn.addEventListener('click', function() {
                formularioDiv.classList.remove('d-none'); // Mostrar formulario
                addProductBtn.classList.add('d-none'); // Ocultar el botón "Agregar"
            });

            // Evento para ocultar el formulario y mostrar nuevamente el botón "Agregar"
            cancelarBtn.addEventListener('click', function() {
                formularioDiv.classList.add('d-none'); // Ocultar formulario
                addProductBtn.classList.remove('d-none'); // Mostrar el botón "Agregar"
            });
        });
    </script>

</section>
@endsection

<style>
.border-gray {
    border: 0.5px solid rgb(223, 219, 219); /* Contorno gris */
    border-radius: 4px;    /* Esquinas redondeadas (opcional) */
    padding: 10px;         /* Espaciado interno (opcional) */
}
.mensaje-info {
    border: 0.5px solid rgb(97, 97, 228); /* Contorno azul */
    /* color: blue;            Texto azul */
    background-color: transparent; /* Sin fondo */
    padding: 10px;         /* Espaciado interno */
    border-radius: 4px;    /* Esquinas redondeadas (opcional) */
}

</style>

<!-- Importar el archivo JavaScript -->
<script src="{{ asset('js/alertasFactura.js') }}"></script>

