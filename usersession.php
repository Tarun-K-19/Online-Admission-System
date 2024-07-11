<?php

extract($_POST);

if (!isset($_SESSION['user_id'])) {
        echo "<br>You are not Logged In Please Login to Access this Page<br>";
        echo "<a href=index.php>Click Here to Login</a>";
        exit();
}

?>