
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="personajes.php">Personajes</a>
                    <ul>
                        <li><a href="profesor.php">Profesor</a></li>
                        <li><a href="tokio.php">Tokio</a></li>
                        <li><a href="rio.php">Rio</a></li>
                        <li><a href="denver.php">Denver</a>
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
                        
                    </ul>
                </li>
                <li><a href="#">Merchandising</a>
                    <ul>
                     <li><a href="#">Ropa</a>
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
            <article id="articuloprincipal">
               <img src="img/1366_2000.jpeg" alt="" id="img1">
                <p class="argumento" >
                    La Casa de Papel narra lo que se espera que sea el atraco perfecto al Museo de la Fábrica Nacional de Moneda y Timbre. La mente que idea este plan es El Profesor, un hombre que recluta a siete personas para llevar a cabo el gran golpe. Tokio es una joven atracadora muy buscada por la policía, Berlín asume el papel de "el cabecilla", Moscú es el experto en perforaciones, Río es "el informático", Nairobi es la falsificadora, Denver es el hijo de Moscú y, como siempre, falta la fuerza bruta: Helsinki y Oslo.
                </p>
                <p class="argumento">
                    La banda planea cada paso durante cinco meses, valoran todos los inconvenientes, todas las posibilidades y cuando llega el día, se encierran durante once días en la Fábrica Nacional de Moneda y Timbre con 67 rehenes. Su objetivo es salir de allí con su propio dinero de curso legal recién impreso y sin registrar, algo que será difícil ya que la policía ha sitiado el lugar. Tendrán que hacer todo el atraco con una condición: nada de relaciones entre los atracadores, algo que no llevan a rajatabla.
                </p>
            </article>
        </main>
        <footer>
            <p>Copyright &copy; 2020 Urbil Melín and Unai Iriarte</p>
        </footer>
    </body>
</html>