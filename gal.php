<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .imagem {
            width: 250px;
            margin: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra suave */
            transition: box-shadow 0.3s ease; /* Transição suave da sombra */
        }

        .imagem:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2); /* Sombra mais intensa ao passar o mouse */
        }

        .imagem img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .imagem:hover img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <div class="galeria">
        <div class="imagem">
            <img src="imagem1.jpg" alt="Descrição da imagem 1">
        </div>
        <div class="imagem">
            <img src="imagem2.jpg" alt="Descrição da imagem 2">
        </div>
        <div class="imagem">
            <img src="imagem3.jpg" alt="Descrição da imagem 3">
        </div>
        <!-- Adicione mais imagens aqui -->
    </div>

</body>
</html>