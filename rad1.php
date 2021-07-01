<?php
    include 'code.php';
    $rad1=  $_POST['input'];
    $num1 = $_SESSION['wan']; 
    
    $result = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$num1'");
    $row = mysqli_fetch_assoc($result);
    $ans1 = $row['Answer'];

    if($rad1 == $ans1){
       $_SESSION['N1'] = 1;
       echo "Your answer is correct!";

    }
    else{
      $_SESSION['N1'] = 0;
      echo "Correct Answer: ";
      echo $ans1;
    }
?>