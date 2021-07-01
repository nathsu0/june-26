<?php
    session_start();
    $code = $_SESSION['decode'];
    $conn = mysqli_connect('localhost','root','',$code);
    $rad =  $_POST['input'];
    $num = $_SESSION['payb']; 
    $user = $_SESSION['user'];
    $N1 =$_SESSION['N1'];
    $N2 =$_SESSION['N2'];
    $N3 =$_SESSION['N3'];
    $N4 =$_SESSION['N4'];


    $res = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$num'");
    $row = mysqli_fetch_assoc($res);
    $ans = $row['Answer'];

    if($rad == $ans){
       $N5 = 1;
       echo $N5;

    }
    else{
      $N5 = 0;
      echo "Correct Answer: ";
      echo $ans;
    }

    $score = $N1+$N2+$N3+$N4+$N5;

    $result = mysqli_query($conn,"INSERT into scores (NAMES, N1, N2, N3, N4, N5, SCORE) 
    values('$user','$N1','$N2','$N3','$N4','$N5','$score')");
    if($result === TRUE){
      
      echo "Score: ";
      echo $score;
    }
    else{
      echo "FAILED";
        }

?>