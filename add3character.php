<html>
<head>
<title>Add3Character</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         Enter three char:<input type="text" name="fname">
        <input type="Submit">
        </form>
<?php 
echo "Result";
echo "<br>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $str = $_POST['fname'];
    echo "Old String";
    echo "<br>";
    echo "$str";
    echo "<br>";
    echo "New String";
    echo"<br>";
    if(strlen($str) < 3 )
{
    echo $str.$str.$str;
    echo "<br>";

}
else
{
    $front= substr($str,0,3);
    echo $front.$str.$front;
    echo "<br>";
}
}

?>
</body>
</html>