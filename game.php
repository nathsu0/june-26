
<?php
      include 'code.php';
      include 'db.php';
      $score =0;
      
      $rand = array("1","2","3","4","5");
      
      shuffle($rand);
      $result1 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$rand[0]'");
      $row1 = mysqli_fetch_assoc($result1);
      $result2 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$rand[1]'");
      $row2 = mysqli_fetch_assoc($result2);
      $result3 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$rand[2]'");
      $row3 = mysqli_fetch_assoc($result3);
      $result4 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$rand[3]'");
      $row4 = mysqli_fetch_assoc($result4);
      $result5 = mysqli_query($conn,"SELECT * FROM quiz WHERE id='$rand[4]'");
      $row5 = mysqli_fetch_assoc($result5);

      $_SESSION['wan'] = $rand[0];
      $_SESSION['tu'] = $rand[1];
      $_SESSION['tri'] = $rand[2];
      $_SESSION['por'] = $rand[3];
      $_SESSION['payb'] = $rand[4];

?>
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Popper</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <script scr= "http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>

<!--Start Modal -->
<div id="startModal" class="modal" style="display: block;">
  <!-- Modal content -->
  <div class="modal-content">
    <p class = "p">Bubble Popper</p>
    <div><br><br><br>
        <textarea id = "name" placeholder="Enter Name" name = "name"></textarea><br><br><br>
        <button id="playButton" >Start Game</button>
        <button id="mechanicsButton" >Game Story</button>
      </div>
  </div>
  <!--Mechanics Modal -->
<div id="mechanicsModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content1">
      <span class="close">&times;</span>
      <!-- Trigger/Open The Modal -->
      <h1>Game Mechanics</h1>
      <div>
          <textarea id = "name"></textarea>
        </div>
    </div>
  </div>
</div>
<div id = "questionModal1" class="modal">
    <div class="modal-content" >
        <p>Questions</p>
        <div>
            <textarea id = "question1" disabled>1. <?php echo $row1['Question']?></textarea><br><br>
        </div>
        <div>
          <input type="radio" id="answer1" name="choices1" value="A" > A. <?php echo $row1['A']?></input>

          <input type="radio" id="answer2" name="choices1" value="B"> B. <?php echo $row1['B']?></input>
          <br></br>
          <input type="radio" id="answer3" name="choices1" value="C" > C. <?php echo $row1['C']?></input>

          <input type="radio" id="answer4" name="choices1" value="D">D. <?php echo $row1['D']?></input>
          <br></br>
          <button type ="submit" name ="ans1"id="submitButton1" top="50%">Submit Answer</button>
        </div>
      </div>
</div>

<div id = "questionModal2" class="modal">
  <div class="modal-content" >
      <p>Questions</p>
      <div>
          <textarea id = "question2" disabled>2. <?php echo $row2['Question']?></textarea><br><br>
      </div>
      <div>
        <input type="radio" id="answer1" name="choices2" value="A" >A. <?php echo $row2['A']?></input>

        <input type="radio" id="answer2" name="choices2" value="B">B. <?php echo $row2['B']?></input>
        <br></br>
        <input type="radio" id="answer3" name="choices2" value="C" > C. <?php echo $row2['C']?></input>

        <input type="radio" id="answer4" name="choices2" value="D">D. <?php echo $row2['D']?> </input>
        <br></br>
        <button type ="submit" name ="ans2" id="submitButton2" top="50%">Submit Answer</button>
      </div>
    </div>
</div>

<div id = "questionModal3" class="modal">
  <div class="modal-content" >
      <p>Questions</p>
      <div>
          <textarea id = "question3" disabled>3. <?php echo $row3['Question']?></textarea><br><br>
      </div>
      <div>
        <input type="radio" id="answer1" name="choices3" value="A" >A. <?php echo $row3['A']?></input>

        <input type="radio" id="answer2" name="choices3" value="B">B. <?php echo $row3['B']?></input>
        <br></br>
        <input type="radio" id="answer3" name="choices3" value="C" >C. <?php echo $row3['C']?></input>

        <input type="radio" id="answer4" name="choices3" value="D">D. <?php echo $row3['D']?></input>
  <br></br>
        <button type ="submit" name ="ans3" id="submitButton3" top="50%">Submit Answer</button>
      </div>
    </div>
</div>

<div id = "questionModal4" class="modal">
  <div class="modal-content" >
      <p>Questions</p>
      <div>
          <textarea id = "question4" disabled>4. <?php echo $row4['Question']?></textarea><br><br>
      </div>
      <div> 
        <input type="radio" id="answer1" name="choices4" value="A" > A. <?php echo $row4['A']?></input>

        <input type="radio" id="answer2" name="choices4" value="B"> B. <?php echo $row4['B']?> </input>
        <br></br>
        <input type="radio" id="answer3" name="choices4" value="C" > C. <?php echo $row4['C']?> </input>

        <input type="radio" id="answer4" name="choices4" value="D"> D. <?php echo $row4['D']?> </input>
       <br></br>

        <button type ="submit" name ="ans4" id="submitButton4" top="50%">Submit Answer</button>
      </div>
    </div>
</div>

<div id = "questionModal5" class="modal">
  <div class="modal-content" >
      <p>Questions</p>
      <div>
          <textarea id = "question5" disabled>5. <?php echo $row5['Question']?> </textarea><br><br>
      </div>
      <div>
        <input type="radio" id="answer1" name="choices5" value="A" > A. <?php echo $row5['A']?></input>

        <input type="radio" id="answer2" name="choices5" value="B"> B. <?php echo $row5['B']?></input>
        <br></br>
        <input type="radio" id="answer3" name="choices5" value="C">C. <?php echo $row5['C']?></input>

        <input type="radio" id="answer4" name="choices5" value="D"> D. <?php echo $row5['D']?></input>
        <br></br>
        <button type ="submit" name ="ans5" id="submitButton5" top="50%">Submit Answer</button>
      </div>
    </div>
</div>

    <canvas id="canvas1"></canvas>
    <script src="newscript.js"></script>
    <script>
    $(document).ready(function(){
      $("#playButton").click(function(){
        var input = $("#name").val();
        $.ajax({
          url:'user.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
</script><script>
    $(document).ready(function(){
      $("#submitButton1").click(function(){
        var input = $("input[name='choices1']:checked").val();
          $.ajax({
          url:'rad1.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
    </script><script>
    $(document).ready(function(){
      $("#submitButton2").click(function(){
        var input = $("input[name='choices2']:checked").val();
          $.ajax({
          url:'rad2.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
    </script><script>
    $(document).ready(function(){
      $("#submitButton3").click(function(){
        var input = $("input[name='choices3']:checked").val();
          $.ajax({
          url:'rad3.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
    </script><script>
    $(document).ready(function(){
      $("#submitButton4").click(function(){
        var input = $("input[name='choices4']:checked").val();
          $.ajax({
          url:'rad4.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
    </script><script>
    $(document).ready(function(){
      $("#submitButton5").click(function(){
        var input = $("input[name='choices5']:checked").val();
          $.ajax({
          url:'rad5.php',
          type: 'POST',
          data:{input:input},
          success:function(result){
            console.log(result);
          }
        });
      });
    });
    </script>
   </form>
</body>
</html>