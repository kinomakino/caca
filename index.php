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
    <div style="position:fixed; right:180px; bottom:10px; overflow:visible;" id="clippy">
<table valign="top" width="130" height="309" border="0" background="http://www.irongeek.com/images/clippy.png" cellpadding="10">
<tr><td valign="top"><font size="1">
&nbsp;Hello, according to <a href="http://php-ids.org/">PHPIDS</a> it looks like you are trying to pwn my site.
Would you like <a href="http://www.irongeek.com/i.php?page=videos/owasp-top-5-louisville">some help with that?</a>
</font></td></tr> </table> </div>
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
