<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyecto 401</title>

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

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
            background: url("img/fondo.png") no-repeat center center fixed;
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


    </style>
</head>
<body>
<div>
    <!-- Título grande y difuminado -->
    <h1 class="title">Proyecto 401</h1>
    <!-- Botón de ejemplo -->
</div>
</body>
</html>
