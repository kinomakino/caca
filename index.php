<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo</title>
    <!-- Add the stylesheet to the head -->
    <link rel="stylesheet" type="text/css" href="clippy.css" media="all">
</head>
<body>
    <?php
        // Esto es un comentario en PHP
        echo "<h1>Hola Mundo</h1>";
    ?>

    <!-- jQuery 1.7+ -->
    <script src="jquery.1.7.min.js"></script>
    <!-- Clippy.js -->
    <script src="clippy.min.js"></script>
    <!-- Init script -->
    <script type="text/javascript">
        clippy.load('Merlin', function(agent){
            // do anything with the loaded agent
            agent.show();
            agent.speak('¿Seguro que quieres hackearme? Mi nombre es Clippy.');
        });
    </script>
</body>
</html>
