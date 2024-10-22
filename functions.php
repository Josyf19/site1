<?php

include 'includes/header.php';

?>
<?php

$x = 100;

function newCalc($x) {
    $newnr = $x / 0.37;
    echo "Here is 37% divded byy what you wrote:".$newnr;
}
$x=100;
newCalc($x);

echo "<br>";

$a = 10;
newCalc($a);

?> 