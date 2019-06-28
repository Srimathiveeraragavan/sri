<?php
//displat the content i db-blog table-posts
//connection detail
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$dbse = 'blog1';
$conn = new mysqli($host, $user, $pass, $dbse);
if($conn->connect_errno){
echo "connection failed" . $conn->connect_error;
exti();
}
//user id pswd
$title_i = $_POST['email'];
$password_i = $_POST['password'];
echo "mail_id - "."$title_i<br>";
echo "password - "."$password_i<br>";
//get db value
$query = "SELECT * FROM users where email='$title_i'";
$result = $conn->query($query);
if($result ->num_rows > 0)
	{
		//echo "we hwve data<br>";
		while($row = $result-> fetch_assoc()){
		//echo "<hr>"; 
		//echo $row['email'];
		//echo $row['password'];
			if($row['email'] == $title_i){
			//echo "email ok<br>";
				if($row['password'] == $password_i){
				//echo "pswd ok<br>";
				header("refresh:2; url=index.php");
				}
			}
			
		}	
	}
else
	{
		echo "Plese Enter valid mail id and password";//echo "";
		header("refresh:2; url=register.php");
	}
?>
