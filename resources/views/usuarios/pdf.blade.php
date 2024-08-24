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
            position: relative;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            width: 100px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .sub-header {
            text-align: center;
            margin-top: 5px;
            margin-bottom: 30px;
        }
        .section-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
            margin-bottom: 10px;
            text-align: center;
        }
        .content-table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
        }
        .content-table th, .content-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 60px;
            color: rgba(200, 200, 200, 0.3);
            z-index: -1;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="watermark">DOCUMENTO NO OFICIAL</div>
    <div class="container">
        <div class="header">
            <img src="logo.png" alt="Logo">
            <h1>SERVICIO DE ADMINISTRACIÓN TRIBUTARIA</h1>
        </div>
        <div class="sub-header">
            <h2>Constancia de Situación Fiscal</h2>
            <p>Fecha de emisión: {{ now()->format('d M Y') }}</p>
        </div>
        
        <div class="section-title">Datos del Contribuyente</div>
        <table class="content-table">
            <tr>
                <th>RFC:</th>
                <td>{{ $usuario->rfc }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $usuario->name }}</td>
            </tr>
            <tr>
                <th>Primer Apellido:</th>
                <td>{{ $usuario->apellido_p }}</td>
            </tr>
            <tr>
                <th>Segundo Apellido:</th>
                <td>{{ $usuario->apellido_m }}</td>
            </tr>
            <tr>
                <th>CURP:</th>
                <td>{{ $usuario->curp }}</td>
            </tr>
            <tr>
                <th>Fecha de Inicio de Operaciones:</th>
                <td>{{ $usuario->FechaIniOP }}</td>
            </tr>
            <tr>
                <th>Estatus en el Padrón:</th>
                <td>Activo</td>
            </tr>
            <tr>
                <th>Fecha del Último Cambio de Estado:</th>
                <td>{{ $usuario->fechaUltiCamEst }}</td>
            </tr>
            <tr>
                <th>Nombre Comercial:</th>
                <td>{{ $usuario->NombreComercial }}</td>
            </tr>
        </table>
        
        <!-- Sección de datos no requeridos vacía -->
        <div class="section-title">Datos del  domicilio registrado        </div>
        <table class="content-table">
            <tr><td colspan="2">N/A</td></tr>
        </table>
        
        <div class="section-title">Actividad economica        </div>
        <table class="content-table">
            <tr><td colspan="2">N/A</td></tr>
        </table>

        <div class="section-title">Regimen</div>
        <table class="content-table">
            <tr><td colspan="2">N/A</td></tr>
        </table>

        <div class="section-title">Obligaciones</div>
        <table class="content-table">
            <tr><td colspan="2">N/A</td></tr>
        </table>
        
        <div class="footer">
            <small>IdcGeneraConstancia.jsf</small>
        </div>
    </div>
</body>
</html>
