<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hablanos...</title>
</head>

<body>
    <h1>Espacio para ti</h1>
    <p>Este pequeño apartado está dedicado por si tú deseas dejarnos<br> algun
        mensaje para mejorar como estudiantes o si quieres un<br> espacio donde
        desahogarte, será de tu elección el dejar un correo<br> para contactarte
        o simplemente dejar un comentario anónimo.
    </p>
    <form action="index.php" method="post">
        Nombre: <br>
        <input name="Nombre" placeholder="Nombre"/>
        <br>
        Correo: <br>
        <input name="Correo" placeholder="******@gmail.com"/>
        <br><br>
        <label for="Comentario">Dejanos lo que nos quieras decir: </label>
        <br>
        <textarea rows="10" cols="50" id="Comentario" placeholder="Ingresa un comentario" name="Comentario"></textarea>
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>