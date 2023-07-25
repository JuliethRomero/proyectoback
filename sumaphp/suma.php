<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar numeros en php</title>
</head>
<body>
<?php
$resultado =" ";
if(!empty($_POST['num1'])&& !empty($_POST['num2'])){
    $resultado = $_POST['num1'] + $_POST['num2'];
}
?>

    <form action="" method="post">
        <h4>Digite el primer numero</h4>
        <input type="number" name="num1">

        <h4>Digite el segundo numero</h4>
        <input type="number" name="num2">
        <br><br>
        <button>Sumar</button>
    </form>
<br><br>
<?php
if($resultado!=''){
    echo $resultado;

}
?>
</body>
</html>