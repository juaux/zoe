<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Cursos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .gallery-item {
            width: 250px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            color: #333;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .gallery-item .info {
            padding: 15px;
        }

        .gallery-item h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Todos Cursos">
            <div class="info">
                <h3>Todos Cursos</h3>
            </div>
        </div>

        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Mulher">
            <div class="info">
                <h3>Mulher</h3>
            </div>
        </div>

        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Combate Depressão">
            <div class="info">
                <h3>Combate Depressão</h3>
            </div>
        </div>

        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x200" alt="Autismo">
            <div class="info">
                <h3>Autismo</h3>
            </div>
        </div>
    </div>
</body>
</html>