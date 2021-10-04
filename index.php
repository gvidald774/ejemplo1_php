<html>
    <head>
        <title>Hola buenas tardes</title>
    </head>
    <body>
        <?php
            $numero = rand(1,10);
            switch($numero)
            {
                case 1:
                    echo "<h1>Hola buenos días</h1>";
                    break;
                case 2:
                    echo "<h2>Hola buenas tardes</h1>";
                    break;
                case 3:
                    echo "<h3>Hola buenas noches</h3>";
                    break;
                case 4:
                    echo "<h4>Hola que tal como estamos</h4>";
                    break;
                case 5:
                    echo "<h5>Adiós</h5>";
                    break;
                default:
                    echo "<h6>Aquí no hay nada que ver</h6>";
                    break;
            }

            echo "<p>Se ha usado la opción $numero</p>.";
        ?>
    </body>
</html>