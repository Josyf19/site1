  <?php

        include_once 'includes/dbh.inc.php';

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Chayce', 'Anderson', 'chaycejosyf@gmail.com', 'Admin', 'chayce1234');";
    mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
    
if (isset($_post['signup-submit']))  {

}

require 'dbh.inc.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];


if (empty($username)) || $empty($username) || $empty($email) || $empty($password) || $empty($passwordRepeat) {
header("location; ../signup.php?error=emptyfields&uid=".$username. "&mail=".$email);
exit();
}

else if () {
  header("location: ../signup.php?error=invalidmail&uid=".$username. "&mail=".$email);
  exit();
}



?>