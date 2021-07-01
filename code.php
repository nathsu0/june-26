<?php

    session_start();
    $code = $_SESSION['decode'];
    $conn = mysqli_connect('localhost','root','', $code);
?>