<?php
      session_start();
      include "db.php";

      if(isset($_POST['done'])){
      $mamama = $_POST['dcode'];
      
      if($db->select_db($mamama)=== false){
      echo '<script type="text/javascript">'.'alert("Please enter a valid code.");</script>';
      }else{
        $_SESSION['decode'] = $mamama;
        
       echo '<script type="text/javascript">' .'window.location = "game.php"' . '</script>';
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>EnterGame</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <!---CREATE CSS-->
    <link rel="stylesheet" href="EditCode.css?v=<?php echo time(); ?>">
  </head>
  <body>
    <div class="Main container">
        <!-----CONTENT IN CONTAINER-->
        <div class="Box containermt-5 p-0">
            <!---NAVIGATION BAR START-->
    
 <!----NAVIGATION BAR END-->
            <form method='POST' >
            <!----CONTENT START------->
            <div class="blocks container">
            <h1>Enter the code: </h1>
            <div class="code_edit container">
                <input type="text"class="code" name="dcode"></input>
            </div> 
            <div class="container">
                <button type="submit" name='done' class= "button">
                  Proceed
                  <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </button>
            </div> 
        </div>
    </div>
  </div>
    </from>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/EditCode.js"></script>
  </body>
</html>