<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Auswertung</title>
</head>
<body>

<?php
if(isset($_POST['vorname'])){      //if nicht nötig bei POST ist  alter immer != null
    $vorname = $_POST['vorname'];
}
echo 'Dein Vorname ist: ' . $vorname . '<br><br>';

?>

<a href="formular.html">zurück</a>

</body>
</html>
