<html>
    <body>
         <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         Enter char:<input type="text" name="fname">
         Enter position:<input type="text"name="fpos">
        <input type="Submit">
        </form>
<?php 
echo "Result";
echo "<br>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['fname'];
    $pos=$_POST['fpos'];
    echo "Old String";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo "New String";
    echo "<br>";
    echo substr($name,0,$pos).substr($name,$pos+1,strlen($name).$pos);

}

?>
</body>
</html>
