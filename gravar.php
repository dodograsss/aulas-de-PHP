<?php
session_start();
?>
<html>
    <head>

    </head>
    <body>
        <div>Olá <?php echo $_SESSION["nome"]; ?></div>
    </body>

</html>