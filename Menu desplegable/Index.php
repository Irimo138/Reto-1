<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" type="text/css" href="IndexCSS.css">
    </head>
    <body>
       <img src="img/encabezado.jpg" alt="" id="encabezado">
        <nav id="header">
            <ul class="nav">
                <li><a href="">Inicio</a></li>
                <li><a href="">Personajes</a>
                    <ul>
                        <li><a href="">Profesor</a></li>
                        <li><a href="">Tokio</a></li>
                        <li><a href="">Rio</a></li>
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
                    print_r($hora);
                    print_r(":");
                    print_r($minutos);
                    header("refresh:60;");
                    ?>
                </li>
              
            </ul>
        </nav>
    </body>
</html>