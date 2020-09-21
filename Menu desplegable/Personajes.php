<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="MerchCSS.css" rel="stylesheet" type="text/css">
    <title>Plantilla Personajes</title>
</head>

<body>
    <header>
         <img src="img/encabezado.jpg" alt="" id="encabezado">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style> .argumento{font-family: 'Roboto', sans-serif;}</style>
        <nav id="header">
            <ul class="nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Personajes</a>
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
    </header> 
    <section id="mainpersonajes">
        <article>
            <h2>Profesor</h2>
               <a href="profesor.php"><img src="img/Profesor.jpg"></a>
                
           
        </article>
        <article>
            <h2>Tokio</h2>
               
            <a href="tokio.php"> <img src="img/Tokio.jfif"></a>
        </article>
         <article>
            <h2>Rio</h2>
                
           <a href="rio.php"><img src="img/Rio.jfif"></a>
        </article>
         <article>
            <h2>Berlin</h2>
                
            <a href="berlin.php"><img src="img/Berlin.jpg"></a>
        </article>
         <article>
            <h2>Lisboa</h2>
                
            <a href="lisboa.php"><img src="img/Lisboa.png"></a>
        </article>
         <article>
            <h2>Denver</h2>
                
            <a href="denver.php"><img src="img/Denver.jfif"></a>
        </article>
         <article>
            <h2>Moscú</h2>
                
            <a href="moscu.php"><img src="img/Moscu.jpg"></a>
        </article>
        <article>
            <h2>Nairobi</h2>
                
            <a href="nairobi.php"><img src="img/Nairobi.jfif"></a>
        </article>
        <article>
            <h2>Estocolmo</h2>
               
            <a href="estocolmo.php"> <img src="img/Estocolmo.png"></a>
        </article>
        <article>
            <h2>Manila</h2>
                
                <a href="manila.php"><img src="img/Manila.jpg"></a>
        </article>
        <article>
            <h2>Marsella</h2>
               
            <a href="marsella.php"> <img src="img/Marsella.png"></a>
        </article>
        <article>
            <h2>Palermo</h2>
                
            <a href="parlemo.php"><img src="img/Palermo.png"></a>
        </article>
        <article>
            <h2>Bogota</h2>
                
    <a href="bogota.php"><img src="img/Bogota.jpg"></a>
        </article>
  
    </section>
    <footer>
        <h3>Copyright &copy; 2020</h3>
    </footer>
</body>
</html>
