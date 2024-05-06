<?php
    // Lógica PHP
    $json = file_get_contents('https://www.freetogame.com/api/games');
    $data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos Gratuitos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
</head>
<body>
    <h1>Juegos Gratuitos</h1>
    <table id="games-table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Plataforma</th>
                <th>Fecha de Lanzamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $game): ?>
                <tr>
                    <td><?php echo $game['title']; ?></td>
                    <td><?php echo $game['genre']; ?></td>
                    <td><?php echo $game['platform']; ?></td>
                    <td><?php echo $game['release_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="diseño.js"></script>
</body>
</html>
