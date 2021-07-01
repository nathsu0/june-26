<?php
    session_start();
    $code = $_SESSION['decode'];
    $conn = mysqli_connect('localhost','root','',$code);
    $rad =  $_POST['input'];
    $num = $_SESSION['tri']; 
    
    $result = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$num'");
    $row = mysqli_fetch_assoc($result);
    $ans = $row['Answer'];

    if($rad == $ans){
       $_SESSION['N3'] = 1;
       echo $_SESSION['N3'];

    }
    else{
      $_SESSION['N3'] = 0;
      echo "Correct Answer: ";
      echo $ans;
    }
?>