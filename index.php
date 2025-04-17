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
    $menu = simplexml_load_file('./XML/carta.xml');

} else {

    exit('Error al abrir el archivo de datos');
    
}
?>
    <header>

        <img src="./img/Logo.png" alt="Logo Sabor&Arte" width="5%">

        <h1 id="titulo">Sabor&Arte</h1>

    </header>

    <main>

        <section>

            <div class="tablas">

                <h1>Entrantes</h1>

                <table>
                    <?php

                        foreach ($menu->plato as $entrante) {
                           
                            if ((string)$entrante['tipo'] === 'entrante') {
                               
                                echo "<tr>";
                                    echo "<td>" . $entrante->nombre . "........" . $entrante->precio . "</td>";
                                echo "</tr>";
                            
                            }
                        }

                    ?>

                </table>
            </div>

            <div class="tablas">

                <h1>Primeros Platos</h1>

                <table>
                    
                    <?php

                        foreach ($menu->plato as $primer_plato) {
                           
                            if ((string)$primer_plato['tipo'] === 'primer_plato') {
                           
                                echo "<tr>";
                                    echo "<td>" . $primer_plato->nombre . "........" . $primer_plato->precio . "</td>";
                                echo "</tr>";
                           
                            }
                        }


                    ?>

                </table>

            </div>

        </section>

        <section>

            <div class="tablas">

                <h1>Segundos Platos</h1>

                <table>
                    
                    <?php

                        foreach ($menu->plato as $segundo_plato) {
                            
                            if ((string)$segundo_plato['tipo'] === 'segundo_plato') {
                            
                                echo "<tr>";
                                    echo "<td>" . $segundo_plato->nombre . "........" . $segundo_plato->precio . "</td>";
                                echo "</tr>";
                            
                            }
                        }

                    ?>

                </table>

            </div>

            <div class="tablas">

                <h1>Postres</h1>

                <table>
                    
                    <?php

                        foreach ($menu->plato as $postre) {
                            
                            if ((string)$postre['tipo'] === 'postre') {
                            
                                echo "<tr>";
                                    echo "<td>" . $postre->nombre . "........" . $postre->precio . "</td>";
                                echo "</tr>";
                            
                            }
                        }

                    ?>

                </table>

            </div>

        </section>
        
    </main>

    <footer>

        <h3 id="copyright">Derechos Reservados 2025 &copy; Sabor&Arte</h3>

    </footer>
</body>
</html>