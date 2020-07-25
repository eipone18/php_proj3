<html>
<head>
<title>Lower to Upper case </title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         Enter char:<input type="text" name="fname">
        <input type="Submit">
        </form>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $str = $_POST['fname'];
    echo "Old String";
    echo "<br>";
    echo "$str";
    echo "<br>";
    echo "New String";
    echo"<br>";
    echo strtoUpper($str);
}
?>
</body>
</html>