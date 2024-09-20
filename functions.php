<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Title of the document</title>
</head>

<body>

<?php

$x = 100;

function newCalc($x) {
    $newnr = $x / 0.37;
    echo "Here is 37% divded by of what you wrote:".$newnr;
}
$x=100;
newCalc($x);

echo "<br>";

$a = 10;
newCalc($a);

?> 