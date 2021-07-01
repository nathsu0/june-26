<?php
    session_start();
    $code = $_SESSION['decode'];
    $conn = mysqli_connect('localhost','root','',$code);
    $rad1=  $_POST['input'];
    $num1 = $_SESSION['wan']; 
    
    $result = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$num1'");
    $row = mysqli_fetch_assoc($result);
    $ans1 = $row['Answer'];

    if($rad1 == $ans1){
       $_SESSION['N1'] = 1;
       echo $_SESSION['N1'];

    }
    else{
      $_SESSION['N1'] = 0;
      echo "Correct Answer: ";
      echo $ans1;
    }
?>