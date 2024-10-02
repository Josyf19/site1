  <?php

        include_once 'includes/dbh.inc.php';

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Chayce', 'Anderson', 'chaycejosyf@gmail.com', 'Admin', 'chayce1234');";
    mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
    
?>