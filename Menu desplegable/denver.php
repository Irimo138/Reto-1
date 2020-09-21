
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" type="text/css" href="styles.css">
        
    </head>
    <body>
       <img src="img/encabezado.jpg" alt="" id="encabezado">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style> .argumento{font-family: 'Roboto', sans-serif;}</style>
        <nav id="header">
            <ul class="nav">
                <li><a href="Index.php">Inicio</a></li>
                <li><a href="">Personajes</a>
                    <ul>
                        <li><a href="profesor.php">Profesor</a></li>
                        <li><a href="tokio.php">Tokio</a></li>
                        <li><a href="rio.php">Rio</a></li>
                        <li><a href="denber.php">Denver</a>
                        <li><a href="berlin.php">Berlín</a>
                        <li><a href="moscu.php">Moscu</a>
                        <li><a href="nairobi.php">Nairobi</a>
                        <li><a href="oslo.php">Oslo</a>
                        <li><a href="helsinki.php">Helsinki</a>
                        <li><a href="lisboa.php">Lisboa</a>
                        <li><a href="estocolmo.php">Estocolmo</a>
                        <li><a href="manila.php">Manila</a>
                        <li><a href="marsella.php">Marsella</a>
                        <li><a href="parlemo.php">Palermo</a>
                        <li><a href="bogota.php">Bogotá</a>
                        </li>
                    </ul>
                </li>
                <li><a href="temporadas.php">Temporadas</a>
                    <ul>
                        <li><a href="temporada1.php">Temporada 1</a></li>
                        <li><a href="temporada2.php">Temporada 2</a></li>
                        <li><a href="temporada3.php">Temporada 3</a></li>
                        <li><a href="temporada4.php">Temporada 4</a></li>
                        <li><a href="temporada5.php">Temporada 5</a></li>
                    </ul>
                </li>
                <li><a href="merchandising.php">Merchandising</a>
                    <ul>
                        <li><a href="ropa.php">Ropa</a>
                            <ul>
                                <li><a href="camisetas.php">Camisetas</a></li>
                                <li><a href="sudaderas.php">Sudaderas</a></li>
                            </ul>
                        </li>
                        <li><a href="tazas.php">Tazas</a></li>
                        <li><a href="complementos.php">Complementos</a></li>
                        <li><a href="figuras.php">Figuras</a></li>
                    </ul>
                </li>
                <li id="hora">
                    <?php
                    $hoy = getdate();
                    $hora=$hoy["hours"];
                    $minutos = $hoy["minutes"];
                    $dia = $hoy["mday"];
                    $mes = $hoy["mon"];
                    $año = $hoy["year"];
                    print_r($hora);
                    print_r(":");
                    print_r($minutos);
                    print_r(" ");
                    print_r($dia);
                    print_r("-");
                    print_r($mes);
                    print_r("-");
                    print_r($año); 
                    header("refresh:60;");
                    ?>
                </li>
                
              
            </ul>
        </nav>
        <main>
           <img src="img/denver2.jpg" alt="" id="img2">
            <article>
                <p class="argumento">
                   Hijo de Moscú. Macarra de extrarradio, un poco corto de miras e impulsivo. Alternó su juventud entre los botellones del parking del Caprabo y las barracas de la feria. Coqueteó con todas las drogas posibles y quizás por tal abuso, hay una conexión en su cerebro que salta a “modo irascible” sin motivo alguno. Genera tensión por donde pasa, y es mejor no tratar en exceso con él. Su padre es su único anclaje con la humanidad y los sentimientos. Haría cualquier cosa por él.
                </p>
               
            </article>
        </main>
        <footer>
            <p>Copyright &copy; 2020 Urbil Melín and Unai Iriarte</p>
        </footer>
    </body>
</html>