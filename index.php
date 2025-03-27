<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>Carta Sabor&Arte</title>
    <link href="./img/Logo.png" rel="icon" type="image/icon">
</head>
<body>

<?php

// Comprobación de existencia del archivo XML de encartelera
if (file_exists('./XML/carta.xml')) {

    // Carga del XML de encartelera de películas y almacenamiento en una variable $films
    $films = simplexml_load_file('./XML/carta.xml');

} else {

    exit('Error al abrir el archivo de datos');
    
}

?>


</body>
</html>