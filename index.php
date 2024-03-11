<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>
</head>

<style>
    body {
        background-color: yellowgreen;
        color: red;
    }

    img {
        box-shadow: 4px 4px 64px 32px rgba(0, 0, 0, 0.55);
    }
</style>

<?php
$NAME = "SLOPY SLOTH";
?>

<body style="position: relative;">
    <?php
    for ($I = 0; $I < 5; $I++) {
        echo '<h1>Hola mundo soy ' . $NAME . '</h1>';
    }
    ?>
    <img src="F0.png" style="position: absolute; right: 20px; top: 50px;">
</body>
<script>
    const imagen = document.getElementsByTagName("img")[0];
    let start = document.timeline.currentTime;

    function MoverImagen(timeStamp) {
        const elapsed = timeStamp - start;
        const t = elapsed * 0.0046;
        imagen.style.top = 25 * Math.sin(t) + "px";
        requestAnimationFrame(MoverImagen)
    }

    requestAnimationFrame(MoverImagen)
</script>

</html>