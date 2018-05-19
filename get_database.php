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
  $name = $_SESSION['name_faculty'];
  $sql="SELECT * FROM FEEDBACKINFO WHERE FACULTYNAME='$name';";
  $list=$conn->query($sql);
  while($row=$list->fetch_assoc())
  {
    if($row["ratings"]<3){
    echo "<h3 style='color:red'>the name of student :".$row["studentname"]."<br>"."the rating is : ".$row["ratings"]."<br>"."the feed back of the student is : ".$row["feed"]."<br><br></h3>";
  }
  else{
    echo "<h3 style='color:green'>the name of student :".$row["studentname"]."<br>"."the rating is : ".$row["ratings"]."<br>"."the feed back of the student is : ".$row["feed"]."<br><br></h3>";
  }
  }
  ?>
</body>
</html>
