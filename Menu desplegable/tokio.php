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
                <li><a href="..">Inicio</a></li>
                <li><a href="">Personajes</a>
                    <ul>
                        <li><a href="profesor.php">Profesor</a></li>
                        <li><a href="tokio.php">Tokio</a></li>
                        <li><a href="rio.php">Rio</a></li>
                        <li><a href="">Denver</a>
                        <li><a href="">Berlín</a>
                        <li><a href="">Moscu</a>
                        <li><a href="">Nairobi</a>
                        <li><a href="">Oslo</a>
                        <li><a href="">Helsinki</a>
                        <li><a href="">Lisboa</a>
                        <li><a href="">Estocolmo</a>
                        <li><a href="">Manila</a>
                        <li><a href="">Marsella</a>
                        <li><a href="">Palermo</a>
                        <li><a href="">Bogotá</a>
                        <li><a href="">BOGDAN</a>
                        </li>
                    </ul>
                </li>
                <li><a href="">Temporadas</a>
                    <ul>
                        <li><a href="">Temporada 1</a></li>
                        <li><a href="">Temporada 2</a></li>
                        <li><a href="">Temporada 3</a></li>
                        <li><a href="">Temporada 4</a></li>
                        <li><a href="">Temporada 5</a></li>
                    </ul>
                </li>
                <li><a href="">Merchandising</a>
                    <ul>
                        <li><a href="">Ropa</a>
                            <ul>
                                <li><a href="">Camisetas</a></li>
                                <li><a href="">Sudaderas</a></li>
                            </ul>
                        </li>
                        <li><a href="">Tazas</a></li>
                        <li><a href="">Complementos</a></li>
                        <li><a href="">Figuras</a></li>
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
           <img src="img/Ursula-Corbero-La-Casa-de-Papel-1200x800.jpg" alt="" id="img2">
            <article>
                <p class="argumento">
               Silene Oliveira, conocida bajo el apodo de Tokio, es un personaje de La casa de papel. Es un miembro de la banda atracadora a la Fábrica Nacional de Moneda y Timbre. Está en búsqueda policial por diferentes asaltos.
                </p>
               
            </article>
        </main>
        <footer>
            <p>Copyright &copy; 2020 Urbil Melín and Unai Iriarte</p>
        </footer>
    </body>
</html>