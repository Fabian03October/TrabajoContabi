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
            padding: 5px; /* Espaciado interno */
            text-align: right; /* Centra el contenido */
            border-top: 5px solid #141415; /* Borde superior */
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
    </style>
</head>
<body>

    <div class="watermark">SIN VALIDEZ OFICIAL</div>
    <div class="container">

        <table class="">
            <tr>
                <th>
                    <div class="fiscal-card">
                    <div class="fiscal-card-left">
                        <div class="fiscal-card-title">CÉDULA DE IDENTIFICACIÓN FISCAL</div>
                        {{-- <img src="{{ asset('img/sat2.png') }}" alt="logo" width="120" class="shadow-light"> --}}


                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path().'/img/qr.png'))}}" style="width: 50%; height: 20%; float: left;">
                        <p style="color:grey"><strong>HACIENDA</strong><br>SECRETARÍA DE HACIENDA Y CRÉDITO PÚBLICO</p>
                        <p style="color:grey"><strong>SAT</strong><br>SERVICIO DE ADMINISTRACIÓN TRIBUTARIA</p>
                        <p class="uppercase" style="color:grey">{{ $usuario->rfc }}<br>Registro Federal de Contribuyentes</p>
                        <p class="uppercase" >
                            {{ $usuario->name }} {{ $usuario->apellido_p }} {{ $usuario->apellido_m }}<br>
                            Nombre, denominación o razón social</p>
                        {{-- <p>idCIF: 22080453693<br>VALIDA TU INFORMACIÓN FISCAL</p> --}}
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
                                <p><strong>CONSTANCIA DE SITUACIÓN FISCAL</strong></p>
                                <p>Lugar y Fecha de Emisión</p>
                                <p class="uppercase">
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
            <caption><strong>Datos de Identificación del Contribuyente:</strong></caption>
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
                    <td>Activo</td>
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
            <caption><strong>Datos del domicilio registrado</strong></caption>
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
                <th></th>
                <td></td>
            </tr>

        </table>
        <div class="footer">
            <div class="footer-logo">
                {{-- <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path().'/img/footer-Sat.png'))}}" style="width: 60%; height: 45%; float: left;"> --}}

            </div>
            <div class="contact-info">
                <p> <strong>Contacto</strong></p>
                <p>Av. Hidalgo 77, col. Guerrero, CP. 06300, Ciudad de México.</p>
                <p>Atención telefonica desde cualquier parte del pais</p>
                <p>MarcaGAT 55 627 22 728 </p>
            </div>
        </div>
    </div>
</body>
</html>
