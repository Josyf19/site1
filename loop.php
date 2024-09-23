<?php

include 'includes/header.php';
?>
   
<?php
    //Loop

    //While Loop
    //DO while Loop
    //For Loop
    //Foreach Loop
  $x = 1;
  do {
    echo "hi there<br>";
    $x++;
  }
  while ($x <= 5);
  
  ?>

<?php 

$x = 1;
while ($x <= 5) {
        echo "<br>hi there";
        $x++;
}
  
?>

<?php 

for ($x = 1; $x <= 10; $x++ )   {
    echo "hi<br>";

}

?>

<?php 


$array = array("Daniel", "Jane", "Jacob" , "luke", "ethan", );


foreach ($array as $loopdata) {
     echo "My name is ".$loopdata. "<br>";

}