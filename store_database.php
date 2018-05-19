<html>
<body>
  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "feedback";
  $conn = new mysqli($server,$username,$password,$database);
  // if($conn)
  // {
  //   echo " connection established "."<br>";
  // }
  session_start();
  $name = $_SESSION['name_student'];
  $text=$_POST["feedback"];
  $facultyname=$_POST["faculty"];
  $rating=$_POST["rating"];
  $sql="INSERT INTO FEEDBACKINFO VALUES ('$facultyname','$name','$text','$rating');";
  if($conn->query($sql)==TRUE)
  {
    // echo "database updated"."<br>";
    ?>
    <center><h1 style="color:lightblue">Thank you very much for your valuable Feedback</h1></center>
    <?php
  }
  else{
    // echo "database not updated"."<br>";
    ?>
    <center><h1 style="color:red">Somethings wrong!!! please give your feed back once again</h1></center>
    <?php


  }


  ?>
</body>
</html>
