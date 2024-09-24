<?php

include 'includes/header.php';

?>

<?php

    $x = 6;

if ($x == 1) {
    echo "Chayce is very handsome!";
} 
else if ($x == 2) {
 echo "The sky is falling";
}
else if ($x == 6) {
    echo "My love don't mean that much to you";
   }
   else if ($x == 2) {
    echo "Take the jet";
   }
else {
    echo "Chayce is very cool!";
}

    ?>


<?php



   $x = 8;

   switch ($x) {
        case 1:
            echo "The answer is 1";
            break;
            case 2:
                echo "The answer is number";
                break;
                case 3:
                    echo "The answer is number";
                    break;
                    case 4:
                        echo "The answer is 4";
                        break;
                        default:
                        echo "It smells like ear back in here";
   }

   ?>