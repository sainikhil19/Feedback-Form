<html>
<head>
  <style>
    .details {
    background-color: lightblue;
    /* float: left; */
    width: 20%;
    padding: 10px 150px;
    margin-top: 65px;
    }
  </style>
  <script type="text/javascript">
    function checkFeedback(){
    var getFeedback = document.getElementById("feedback").value;
    var getFacultyName = document.getElementById("faculty").value;
    window.prompt(getFeedback);
    var len = getFeedback.length;
    window.prompt(len);
    if(getFacultyName=="")
    {
      window.prompt("invalid Faculty name");
      return false;
    }
    if(len>=20)
    {
      window.prompt("Please wait!!!!")
      return true;
    }
    else{
      window.prompt("invalid feedback!!!Feedback should contain atleast 20 characters...");
      return false;
    }
  }
  </script>
</head>
<body>
  <?php
  $type=$_POST["type"];
  /*$email=$_POST["email"];*/
  $name=$_POST["name"];
  if($type=="student")
  {
    session_start();
    $_SESSION['name_student'] = $name;
    ?>
    <center>
    <details class="details">
      <summary>Feedback form</summary>
      <form  id ="form1" action="store_database.php" method="post" onsubmit="return checkFeedback();">
        <!-- feeback:<input type="text" name="feedback" id="feedback" placeholder="enter your feedback here"><br><br> -->
        <center>
          <br>
          <br>
          <input type="text" name="faculty" id="faculty" placeholder="enter the faculty name"><br><br>
          ratings:<br>
          <input type="radio" name="rating" value="1">1<br>
          <input type="radio" name="rating" value="2">2<br>
          <input type="radio" name="rating" value="3">3<br>
          <input type="radio" name="rating" value="4">4<br>
          <input type="radio" name="rating" value="5">5<br><br>
          <textarea rows="4" cols="50" id="feedback" name="feedback" placeholder="you can enter your Feedback here"></textarea><br><br>
          <input type="submit" name="confirm feed" value="confirm feedback">
      </center>
      </form>
    </details>
  </center>
    <?php
  }
  else if($type=="faculty")
  {
    session_start();
    $_SESSION['name_faculty'] = $name;
    ?>
    <center><form action="get_database.php" method="post">
    <input type="submit" name="get feed" value="get feed">
  </form><center>
    <?php
  }


  ?>
</body>
</html>
