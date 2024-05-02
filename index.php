<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo con Clippy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h1>Hola Mundo</h1>

<div id="clippy-container">
    <img id="clippy-image" src="" alt="Clippy">
    <p id="clippy-text">¡Hola! Soy Clippy.</p>
</div>

<script>
    $(document).ready(function(){
        // Ruta de la imagen de Clippy
        var clippyImageSrc = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Clippy-o-logo.svg/1200px-Clippy-o-logo.svg.png";
        
        // Establecer la ruta de la imagen de Clippy
        $("#clippy-image").attr("src", clippyImageSrc);
    });
</script>

</body>
</html>
