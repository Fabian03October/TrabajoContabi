<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activación de Contribuyente</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .header {
            background-color: #094293; /* Color azul */
            color: white; /* Letras blancas */
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .body-content {
            padding: 20px;
            color: #094293; /* Letras en azul */
        }
        .body-content p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .button {
            background-color: #094293; /* Color azul */
            color: white; /* Letras blancas */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .button:hover {
            background-color: #083373; /* Azul más oscuro para hover */
        }
        .footer {
            background-color: #f4f4f4;
            color: #777;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
        .footer p {
            margin: 0;
        }
        .footer a {
            color: #094293; /* Enlaces en azul */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>{{ $details['title'] }}</h1>
        </div>

        <!-- Body content -->
        <div class="body-content">
            <!-- Saludo personalizado en azul -->
            <p>Estimad@ {{ $details['name'] }},</p>

            <p>{{ $details['body'] }}</p>

            <!-- Button -->
            <div class="button-container">
                <a href="{{ $details['url'] }}" class="button">Continua con tu registro</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Gracias por utilizar {{ config('app.name') }}.</p>
            <p><a href="{{ config('app.url') }}">Visítanos en nuestro sitio web</a></p>
        </div>
    </div>
</body>
</html>
