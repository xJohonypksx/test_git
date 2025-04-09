<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyecto 401</title>

    <!-- Fuente -->
    <link href="img/fondo.png" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            width: 100%;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            overflow: hidden;
        }

        /* Fondo que ocupa toda la pantalla */
        body {
            background: url('https://source.unsplash.com/1920x1080/?landscape,nature') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        /* Estilo para el título */
        .title {
            font-size: 4rem;
            font-weight: 700;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeIn 2s ease-in-out;
        }

        /* Animación para el título */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Botón */
        .button {
            margin-top: 20px;
            padding: 10px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border: 2px solid white;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .button:hover {
            background: white;
            color: black;
            border: 2px solid transparent;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div>
    <!-- Título grande y difuminado -->
    <h1 class="title">Proyecto 401</h1>
    <!-- Botón de ejemplo -->
    <a href="#!" class="button">Explorar</a>
</div>
</body>
</html>
