<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbse = 'blog';

$conn = new mysqli($host, $user, $pass, $dbse);

if($conn->connect_errno){
echo "connection failed" . $conn->connect_error;
exti();
}

if(mysqli_select_db($conn,'blog'))
{//echo 'connected';
}
else{
	echo 'not connected db';
}
//error of undefibne variable  _post
$title = $_POST['title'];
$content = $_POST['content'];
$cetegory = $_POST['cetegory'];
$tags = $_POST['tags'];
$author = $_POST['author'];


//for sql command minsert into tablename(colname) values(col values)
//echo "$title<br>";
//echo "$content<br>";
//echo "$cetegory<br>";
$sql = "INSERT INTO posts (title,cetegory,tags,content,author) VALUES ('$title','$cetegory','$tags','$content','$author')";
//$run=$dbse->insert($sql);

if(mysqli_query($conn,$sql))
{echo 'inserted';
}
else{
	echo 'not inserted';
}
//go to index.php in 2 sec
header("refresh:2; url=index.php");
?>
