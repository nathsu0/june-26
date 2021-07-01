<?php
    session_start();
        $_SESSION['user'] =$_POST['input'];
        echo   $_SESSION['user'];
        
?>