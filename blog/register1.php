<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbse = 'blog1';

$conn = new mysqli($host, $user, $pass, $dbse);

if($conn->connect_errno){
echo "connection failed" . $conn->connect_error;
exti();
}

if(mysqli_select_db($conn,'blog1'))
{//echo 'connected';
}
else{
	echo 'not connected db';
}
//error of undefibne variable  _post
$email = $_POST['email'];
$password = $_POST['password'];
$access = $_POST['access'];


//for sql command minsert into tablename(colname) values(col values)
echo "$email<br>";
echo "$password<br>";
echo "$access<br>";
$sql = "INSERT INTO users (email,password,access) VALUES ('$email','$password','$access')";
//$run=$dbse->insert($sql);

if(mysqli_query($conn,$sql))
{   
	echo 'inserted';
	header("refresh:2; url=login_html.html");
}
else{
	echo 'Plese enter a valid mail id';
	echo 'Entered mail_id already exists';
}
//go to index.php in 2 sec
//header("refresh:2; url=login.php");
?>
