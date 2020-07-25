<html>
    <head>
        <title>Student Reg Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Name</label>
    <input type="text"name="name"></br/>
    <label>Email</label>
    <input type="email" name="email"><br/>
    <label>Phone number</label>
    <input type="phone number" name="phoneno"><br/>
    <select name="town">
        <option value="Monywa">Monywa</option>
        <option value="Pyay">Pyay</option>
        <option value="Mandalay">Mandalay</option>
        <option value="Mgway">Mgway</option>
        <option value="Yangon">Yangon</option>
</select><br>
<label>Grade</label><br/>
<input type="radio" value="Third year" name="grade"/>Third year
<input type="radio" value="Fourth year" name="grade"/>Fourth year
<input type="radio" value="Fifth year" name="grade"/>Fifth year<br/>
<label>Subject</label><br/>
<input type="checkbox" value=501 name="subject[]"/>501
<input type="checkbox" value=503 name="subject[]"/>503
<input type="checkbox" value=504 name="subject[]"/>504
<input type="checkbox" value=505 name="subject[]"/>505
<input type="checkbox" value=506 name="subject[]"/>506<br/>
<input type="button" value="Submit"></button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=($_POST['name']);
    $email=($_POST['email']);
    $phoneno=($_POST['phoneno']);
    $town=($_POST['town']);
    $grade=($_POST['grade']);
    $subject=($_POST['subject']);
    echo "Name is </t>".$name."<br/>";
    echo "Email is </t>".$email."<br/>";
    echo "Phone number is </t>".$phoneno."<br/>";
    echo "Town is </t>".$town."<br/>";
    echo "Grade is </t>".$grade."<br/>";
    echo "Subject is </t>".$subject."<br/>";

}
?>



        