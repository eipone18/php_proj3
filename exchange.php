<html>
<title>Exchange Character</title>
<body>
< <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         Enter char:<input type="text" name="name">
         <input type="submit" value="Submit">
         </form>
         <?php
         echo"<h3>Your Result</h3>";
         if($_SERVER["REQUEST_METHOD"] == "POST"){
         $name=$_POST['name'];
         echo "Old String";
         echo"<br>";
         echo"$name";
         echo "New String";
         echo "<br>";
         echo strlen($name) > 1 ? substr($name,strlen($name) - 1).substr($name, 1, strlen($name) - 2).substr($name,0,1): $name;
         }
?>
</body>
</html>

