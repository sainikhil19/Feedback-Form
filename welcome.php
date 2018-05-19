<html>
<body>
  <center>
    <?php
    echo "<b>welcome to feedback page</b>"
    ?>
    <form action="next.php" method="post" onsubmit="return checkName();">
      <br>
      <br>
      Name: <input type = "text" name="name" id="name" placeholder="Please Enter Your Name"><br><br>
      Mode of Access:<br>
      <input type="radio" name="type" value="student">student</input><br>
      <input type="radio" name="type" value="faculty">faculty</input><br><br>
      <input type="submit" name="next" value="submit" >
    </form>
  <center>
    <script type="text/javascript">
      function checkName(){
      var name = document.getElementById("name").value;
      var checkReg = new RegExp(/^[a-zA-Z0-9]{5,}$/)
      if(!checkReg.test(name))
      {
        window.prompt("invalid username!!!Username should contain atleast 5 characters...");
        return false;
      }
      else{
        window.prompt("Please wait!!!!")
      }
    }
    </script>
</body>
</html>
