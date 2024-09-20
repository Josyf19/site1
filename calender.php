<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
        p{
            text-align: center;
            font-size: 100px;
            font-family: Times ;
            Margin-top: 38vh;
        }
    </style>
</head>

<body>


<?php
    $dayofweek = date('w');
    
    switch ($dayofweek) {
          case 1: 
            echo "It is Monday!"; 
            break;
            case 2: 
                echo "It is Tuesday!";
                break;
                case 3: 
                    echo "<p>It is Wednesday!</p>";
                    break;
                    case 4: 
                        echo "<p>It is Thursday!</p>"; 
                        break;
                        case 5: 
                            echo "It is Friday!"; 
                            break;
                            case 6: 
                                echo "It is Saturday!" ;
                                break;
                                case 7: 
                                    echo "It is Sunday!" ;
                                    break;
              
           
    }
?>

</body>


</html>