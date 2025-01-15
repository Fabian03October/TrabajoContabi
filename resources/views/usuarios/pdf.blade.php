<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constancia de Situación Fiscal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
        }
        .header {
            background-color: #494949; /* Color de fondo gris claro */
            padding: 20px;
            border: 1px solid #343131; /* Borde gris claro */
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 6rem;
            color: rgba(230, 106, 106, 0.582); /* Color y opacidad */
            white-space: nowrap;
            pointer-events: none; /* Asegura que no interfiera con el contenido */
            z-index: 1000; Asegura que esté sobre el contenido
            text-align: center;
        }
        .uppercase {
            text-transform: uppercase; /* Convierte el texto a mayúsculas */
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .fiscal-card {
            border: 1px solid #000;
            padding: 1px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .fiscal-card-left {
            width: 100%;
            text-align: center;
        }
        .fiscal-card-left img {
            width: 50px;
            vertical-align: middle;
        }
        .fiscal-card-left p {
            margin: 3px 0;
            font-size: 11px;
        }
        .fiscal-card-left strong {
            font-size: 14px;
        }
        .fiscal-card-right {
            width: 35%;
            text-align: right;
        }
        .fiscal-card-right img {
            width: 100px;
        }
        .fiscal-card-title {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            border-bottom: 1px solid #000;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header-left, .header-right {
            width: 48%;
        }
        .header img {
            width: 100px;
        }
        .title {
            font-size: 20px;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1px;
        }
        .info-table th, .info-table td {
            border: 1px solid #000;
            padding: 3px;
            text-align: left;
            vertical-align: top;
        }

        .info-table th {
            width: 35%; /* Ajusta este valor para darle menos ancho al th */
            background-color: #f2f2f2;
        }

        .info-table td {
            width: 65%; /* El ancho del td se ajustará en consecuencia */
        }


        .info-table2 {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table2 th, .info-table2 td {
            border: 1px solid #000;
            padding: 4px 4px; /* Un poco más de padding para que sea más fácil de leer */
            text-align: left;
            vertical-align: top;
        }


        .barcode {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .barcode img {
            width: 200px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 10px;
        }
         td {
            padding: 30px;
            vertical-align: top;
            text-align: left;
        }
        th {
            width: 50%;
            /* border-right: 1px solid #000; */
        }
        .footer {
            margin-top: auto;
            padding: 5px; /* Espaciado interno */
            text-align: right; /* Centra el contenido */
            border-top: 7px solid #494949; /* Borde superior */
            position: relative; /* Posiciona el pie de página en su lugar */
        }

        .footer .contact-info p {
            margin: 0; /* Elimina márgenes para los párrafos */
            font-size: 9px; /* Tamaño de fuente del texto */
            color: #6c757d; /* Color del texto */
        }
        .footer .footer-logo img {
            height: auto; /* Mantiene la proporción de las imágenes */
            margin: 0 10px; /* Espacio entre las imágenes */
        }

        .header2 {
            background-color: #494949; /* Color de fondo gris claro */
            padding: 20px;
            border: 1px solid #343131; /* Borde gris claro */
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            page-break-before: always;
        }
    </style>
</head>
<body>

    <div class="watermark">SIN VALIDEZ OFICIAL</div>
    <div class="container">
    <div class="header"></div>
        <table class="">
            <tr>
                <th>
                    <div class="fiscal-card">
                    <div class="fiscal-card-left">
                        <div class="fiscal-card-title">CÉDULA DE IDENTIFICACIÓN FISCAL</div>
                        {{-- <img src="{{ asset('img/sat2.png') }}" alt="logo" width="120" class="shadow-light"> --}}


                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path().'/img/qr.png'))}}" style="width: 50%; height: 15%; float: left;">
                        {{-- <p style="color:grey"><strong>HACIENDA</strong><br>SECRETARÍA DE HACIENDA Y CRÉDITO PÚBLICO</p> --}}
                        {{-- <p style="color:grey"><strong>SAT</strong><br>SERVICIO DE ADMINISTRACIÓN TRIBUTARIA</p> --}}
                        <p class="uppercase" style="color:grey">{{ $usuario->rfc }}</p>
                        <p  style="color:grey">Registro Federal de Contribuyentes <br> <br></p>
                        <p class="uppercase"  style="color:grey" >
                            {{ $usuario->name }} {{ $usuario->apellido_p }} {{ $usuario->apellido_m }}<br>
                            Nombre, denominación o razón social</p>
                        <p  style="color:grey">Nombre, denominación o razón social<br> </p>
                        <p  style="color:grey">idCIF: 22080453693<br></p>
                        <p  style="color:grey">VALIDA TU INFORMACIÓN FISCAL</p>
                    </div>
                    {{-- <div class="fiscal-card-right">
                        <img src="codigo_qr.png" alt="Código QR">
                    </div> --}}
                    </div>
                </th>
                <td>

                    <div class="text-center">
                       <table>
                            <th>
                                <p  style="font-size: 15px;"><strong>CONSTANCIA DE SITUACIÓN FISCAL</strong> <br> <br></p>
                                <p style="font-size: 12px; color:rgb(92, 90, 90)">Lugar y Fecha de Emisión</p>

                                <p class="uppercase"  style="font-size: 14px;">
                                   <strong> {{ optional($usuario->domicilio)->municipio}}, {{ optional($usuario->domicilio)->entidad}} A {{ app('App\Http\Controllers\UsuarioController')->fechas(now()->format('Y-m-d')) }}</strong>
                                </p>

                                {{-- <div class="barcode">
                                    <img src="barcode.png" alt="Código de Barras">
                                </div> --}}
                            </th>
                       </table>
                    </div>
                </td>
            </tr>
        </table>

        <table class="info-table">
            <tr>
                <th colspan="2" class="section-header" style="background-color: #dedede;">Datos de Identificación del Contribuyente:</th>
            </tr>
            {{-- <caption><strong></strong></caption> --}}
            <tr>
                <th>RFC:</th>
                <td class="uppercase">{{ $usuario->rfc }}</td>
            </tr>
            <tr>
                <th>CURP:</th>
                <td class="uppercase">{{ $usuario->curp }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td class="uppercase">{{ $usuario->name }}</td>
            </tr>
            <tr>
                <th >Primer Apellido:</th>
                <td  class="uppercase">{{ $usuario->apellido_p }}</td>
            </tr>
            <tr>
                <th>Segundo Apellido:</th>
                <td  class="uppercase">{{ $usuario->apellido_m }}</td>
            </tr>
            <tr>
                <th>Fecha de Inicio de Operaciones:</th>
                <td class="uppercase">{{ $usuario->FechaIniOP }}</td>
            </tr>
            <tr>
                <th>Estatus en el Padrón:</th>
                @if ($usuario->status_padron == 1)
                    <td>ACTIVO</td>
                @else
                    <td>INACTIVO</td>
                @endif
            </tr>
            <tr>
                <th>Fecha del Último Cambio de Estado:</th>
                <td  class="uppercase">{{  app('App\Http\Controllers\UsuarioController')->fechas($usuario->fechaUltiCamEst)}}</td>
            </tr>
            <tr>
                <th>Nombre Comercial:</th>
                <td  class="uppercase">{{ $usuario->NombreComercial }}</td>
            </tr>
        </table>
        <br>
        <table class="info-table2">
            <tr>
                <th colspan="2" class="section-header" style="background-color: #dedede;">Datos del domicilio registrado</th>
            </tr>
            <tr>
                <th>Código postal: {{ optional($usuario->domicilio)->cp }}</th>
                <td></td>
            </tr>

            <tr>
                <th>Nombre de Vialidad: {{ optional($usuario->domicilio)->nombre_vialidad }}</th>
                <td>Número Exterior: {{ optional($usuario->domicilio)->num_exterior }}</td>
            </tr>
            <tr>
                <th>Número Interior: {{ optional($usuario->domicilio)->num_interior }}</th>
                <td>Nombre de la Colonia: {{ optional($usuario->domicilio)->colonia }}</td>
            </tr>
            <tr>
                <th>Nombre de la Localidad: {{ optional($usuario->domicilio)->localidad }}</th>
                <td>Nombre del Municipio: {{ optional($usuario->domicilio)->municipio }}</td>
            </tr>
            <tr>
                <th>Nombre de la Entidad Federativa: {{ optional($usuario->domicilio)->entidad }}</th>
                <td>Entre Calle: {{ optional($usuario->domicilio)->entre_calle1 }}</td>
            </tr>
            <tr>
                <th colspan="2">Y calle: </th>¡
            </tr>
        </table>
        <br>
        <div class="footer">
            <br>
            <div class="footer-logo">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path().'/img/footer-Sat.png'))}}" style="width: 60%; height: 45%; float: left;">
            </div>
            <div class="contact-info" style="font-size: 0.9em; line-height: 1.5; text-align: justify;">
                <p><strong>Información de Contacto</strong></p>
                <p><strong>Instituto Tecnológico de Oaxaca</strong></p>
                <p>Av. Ing. Víctor Bravo Ahuja No. 125, Col. Reforma, CP. 68050, Oaxaca de Juárez, Oaxaca.</p>
                <p>Teléfono: +52 951 515 2799</p>
                {{-- <br>
                <p><strong>Desarrolladores:</strong></p>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Sergio Saul Ramirez Lopez - Desarrollador Backend</li>
                    <li>Fabian Martinez - Desarrolladora Frontend</li>
                </ul>
                <p>Correo de contacto: equipo.desarrollo@itoaxaca.edu.mx</p> --}}
            </div>
        </div>
        <div class="header2"></div>
        <div class="watermark">SIN VALIDEZ OFICIAL</div>
        <div>
            <table class="info-table2" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th colspan="5" class="section-header" style="background-color: #dedede; text-align: left; padding: 8px;">
                        Actividades Económicas:
                    </th>
                </tr>
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%; background-color: #dedede;">Orden</th>
                        <th style="width: 50%; background-color: #dedede;">Actividad Económica</th>
                        <th style="width: 15%; background-color: #dedede;">Porcentaje</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Inicio</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Fin</th>
                    </tr>
                </thead>
                <tbody style="font-size: 0.8em; padding: 4px;">
                    @if($actividades != null && $actividades->isNotEmpty()) <!-- Verifica si hay actividades -->
                        @foreach($actividades as $actividad)
                            <tr>
                                <th scope="row" style="text-align: center; width: 5%;">{{ $loop->iteration }}</th>
                                <td style="text-align: center; width: 50%;">{{$actividad->actividad}}</td>
                                <td style="text-align: center; width: 15%;">{{$actividad->porcentaje}}</td>
                                <td style="text-align: center; width: 15%;">{{$usuario->FechaIniOP}}</td>
                                <td style="text-align: center; width: 15%;"></td>
                            </tr>
                        @endforeach
                    @else <!-- Si no hay actividades -->
                        <tr>
                            <th scope="row" colspan="5" style="text-align: center;">Sin actividades economicas fiscales</th>
                        </tr>
                    @endif
                </tbody>
            </table>
            <br>
            <table class="info-table" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th colspan="3" class="section-header" style="background-color: #dedede; text-align: left; padding: 8px;">
                        Regimenes:
                    </th>
                </tr>
                <thead>
                    <tr>
                        <th style="text-align: center; width: 70%; background-color: #dedede;">Regimen</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Inicio</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Fin</th>
                    </tr>
                </thead>
                <tbody style="font-size: 0.8em;">
                    @if($regimenes != null && $regimenes->isNotEmpty())
                    @foreach($regimenes as $regimen)
                        <tr>
                            <td style=" width: 70%;">{{$regimen->regimenes}}</td>
                            <td style="text-align: center; width: 15%;">{{$usuario->FechaIniOP}}</td>
                            <td style="text-align: center; width: 15%;"></td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <th scope="row" colspan="3" style="text-align: center; background-color: white">Sin Regimen Fiscal</th>
                        </tr>
                    @endif
                </tbody>
            </table>

            <br>
            <table class="info-table2" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th colspan="4" class="section-header" style="background-color: #dedede; text-align: left; padding: 8px;">
                        Obligaciones:
                    </th>
                </tr>
                <thead>
                    <tr>
                        <th class="text-center" style="width: 40%; background-color: #dedede;">Decripcion de la Obligacion</th>
                        <th style="width: 30%; background-color: #dedede;">Descripcion</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Inicio</th>
                        <th style="width: 15%; background-color: #dedede;">Fecha Fin</th>
                    </tr>
                </thead>
                <tbody style="font-size: 0.8em; padding: 4px;">
                    @if($obligaciones != null && $obligaciones->isNotEmpty())
                        @foreach($obligaciones as $obligacion)
                        <tr>
                            {{-- <th scope="row" style="width: 40%;"></th> --}}
                            <td style="width: 40%; text-align: justify">
                                {{$obligacion->nombre}}
                            </td>

                            <td style="width: 30%; text-align: justify">
                                {{$obligacion->descripcion}}
                            </td>
                            <td style="width: 15%;text-align: center">
                                    {{$usuario->FechaIniOP}}
                            </td>
                            <td style="width: 15%;"></td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th scope="row" colspan="4" style="text-align: center; background-color: white">Sin Obligaciones Fiscales</th>
                        </tr>
                    @endif
                </tbody>
            </table>
            <br>
            <div>
                <label style="font-size: 0.7em; line-height: 1.5; text-align: justify; display: block; color: black; font-weight: bold;">
                    Sus datos personales son incorporados y protegidos en los sistemas del SAT, de conformidad con los Lineamientos de Protección de Datos
                    Personales y con diversas disposiciones fiscales y legales sobre confidencialidad y protección de datos, a fin de ejercer las facultades conferidas a la autoridad fiscal.
                    <br>
                    Si desea modificar o corregir sus datos personales, puede acudir a cualquier Módulo de Servicios Tributarios y/o a través de la dirección <a href="http://sat.gob.mx" target="_blank">http://sat.gob.mx</a>.
                    <br>
                    "La corrupción tiene consecuencias ¡denúnciala! Si conoces algún posible acto de corrupción o delito presenta una queja o denuncia a través de:
                    <a href="http://www.sat.gob.mx" target="_blank">www.sat.gob.mx</a>,
                    <a href="mailto:denuncias@sat.gob.mx">denuncias@sat.gob.mx</a>,
                    desde México: (55) 8852 2222, desde el extranjero: +55 8852 2222, SAT móvil o <a href="http://www.gob.mx/sfp" target="_blank">www.gob.mx/sfp</a>".
                </label>
            </div>
            {{-- <br> --}}
            <div class="footer">
                <br>
                <div class="footer-logo">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path().'/img/footer-Sat.png'))}}" style="width: 60%; height: 25%; float: left;">
                </div>
                <div class="contact-info" style="font-size: 0.9em; line-height: 1.5; text-align: justify;">
                    <p><strong>Información de Desarrolladores</strong></p>
                    <p><strong>Instituto Tecnológico de Oaxaca</strong></p>
                    <p>Sergio Saul Ramirez Lopez</p>
                    <p>Fabian</p>
                    <p>Correo electrónico: equipo.desarrollo@itoaxaca.edu.mx</p>

                </div>
            </div>

        </div>

    </div>
</body>
</html>
