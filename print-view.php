<?php
include 'pdf.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }
        .tittle {
            padding-top: 50px;
            padding-bottom: 100px
        }
        .tittle h1 {
            text-align: center;
            font-size: 25px;
        }

        .body {
            margin: auto;
            width: 550px;
            border: 3px solid black;
        }

        .body ul {
            list-style: none;
        }

        .body ul li {
            padding-top: 50px;
        }

        .body ul li span {
            display: inline;
            vertical-align: top;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            margin-left: 50px;
        }

        .body ul li span#predef{
            font-weight: bold;
            margin-left: 0px;
        }

        .barcode {
            padding-top: 80px;
            text-align: center;
        }

        .barcode p {
            padding-top: 5px;
        }

    </style>
</head>
<body>
    <div class="tittle">
        <h1><u>FORMULARIO DE DETALLE PREUNIVERSITARIO</u></h1>
    </div>
    <div class="body">
        <ul>
            <li>
                <span id= "predef">Sede:</span>
                <span><?=$_POST['sede']?></span>
            </li>
            <li>
                <span id= "predef">Tipo:</span>
                <span><?=$_POST['tipo']?></span>
            </li>
            <li>
                <span id= "predef">Número:</span>
                <span><?=$_POST['numero']?></span>
            </li>
            <li>
                <span id= "predef">Nivel:</span>
                <span><?=$_POST['nivel']?></span>
            </li>
            <li>
                <span id= "predef">Asignatura:</span>
                <span><?=$_POST['asignatura']?></span>
            </li>
            <li>
                <span id= "predef">Cantidad de pruebas:</span>
                <span><?=$_POST['cantidad'];?></span>
            </li>
        </ul>
    </div>
    <div class="barcode">
        <barcode dimension="1D" type="C128" value="<?=$_POST['sede']?>-<?=$_POST['tipo']?>-<?=$_POST['numero']?>-<?=$_POST['asignatura']?>-<?=$_POST['nivel']?>" label="label" style="width:500px; height: 100px; color: #000000; font-size: 8px"></barcode>
    </div>
</body>
</html>