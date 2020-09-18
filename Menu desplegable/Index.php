<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">  
        <link rel="stylesheet" type="text/css" href="IndexCSS.css">
        
    </head>
    <body>
       <img src="img/encabezado.jpg" alt="" id="encabezado">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style> .argumento{font-family: 'Roboto', sans-serif;}</style>
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
            <article>
                <p class="argumento">
                    La Casa de Papel narra lo que se espera que sea el atraco perfecto al Museo de la Fábrica Nacional de Moneda y Timbre. La mente que idea este plan es El Profesor, un hombre que recluta a siete personas para llevar a cabo el gran golpe. Tokio es una joven atracadora muy buscada por la policía, Berlín asume el papel de "el cabecilla", Moscú es el experto en perforaciones, Río es "el informático", Nairobi es la falsificadora, Denver es el hijo de Moscú y, como siempre, falta la fuerza bruta: Helsinki y Oslo.
                </p>
                <p class="argumento">
                    La banda planea cada paso durante cinco meses, valoran todos los inconvenientes, todas las posibilidades y cuando llega el día, se encierran durante once días en la Fábrica Nacional de Moneda y Timbre con 67 rehenes. Su objetivo es salir de allí con su propio dinero de curso legal recién impreso y sin registrar, algo que será difícil ya que la policía ha sitiado el lugar. Tendrán que hacer todo el atraco con una condición: nada de relaciones entre los atracadores, algo que no llevan a rajatabla.
                </p>
            </article>
        </main>
    </body>
</html>