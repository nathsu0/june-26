<?php
    include 'code.php';
    $rad=  $_POST['input'];
    $num = $_SESSION['por']; 
    
    $result = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$num'");
    $row = mysqli_fetch_assoc($result);
    $ans = $row['Answer'];

    if($rad == $ans){
       $_SESSION['N4'] = 1;
       echo "Your answer is correct!";

    }
    else{
      $_SESSION['N4'] = 0;
      echo "Correct Answer: ";
      echo $ans;
    }
?>