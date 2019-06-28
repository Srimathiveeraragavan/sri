<html>

<head>

<title>BLog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="sri.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
	<div class="a" >
	<div class="container">
	<h1>Blog</h1>
	</div>
	</div>
	
<div class="container" <!--style="background: linear-gradient(to bottom, #006699 0%, #003366 100%);--></div> ">
	<div class="row">
	
	<div class="col-sm-12">
	
		<?php
		//displat the content i db-blog table-posts
		//connection detail
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$dbse = 'blog';

		$conn = new mysqli($host, $user, $pass, $dbse);

		if($conn->connect_errno){
		echo "connection failed" . $conn->connect_error;
		exti();
		}

		$query = "SELECT * FROM posts";
		$result = $conn->query($query);

		if($result ->num_rows > 0){
			//echo "we hwve data";
			
			while($row = $result-> fetch_assoc()){
			
			echo "<hr>";
			echo "Blog Number - ".$row['id']."<br>";
			echo "Title        :".$row['title']." "." "." <br>";
			echo "Category     :".$row['cetegory']."<br>";
			echo "Tags         :".$row['tags']."<br>";
			echo "Detail   :<br>".$row['content']."<br>";
			echo "Author  name : ".$row['author']."<br>  ";
			echo "published date and time - ".$row['timestamp']."<br>";
			
			
			
			
			
			echo "<hr>";
			}
			
		}else{
			echo "sorry!"."<pre>yet No Blogs</pre>";
		}

		//$post .= "<div><h2><a href='Post.php ? pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin</div>";
		//$admin = "<div> <a href='del_post.php ? pid=$id'>delete</a>;<a href='edit_post.php ? pid=$id'>edit</a></div>";
		?>
<a href="logout.php">logout</a>		
<a href="login_html.html">login</a>
<br>

		
<a href="post.php">ADD</a><!--add new blog do add edit delete view-->
<!--<a href="delete.php">DELETE</a>
<a href="update.php">EDIT</a>-->
<a href="index.php">VIEW</a>
</div>
</div>
</div>
</body>

</html>

