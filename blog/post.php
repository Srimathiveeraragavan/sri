<!DOCTYPE html>
<html>

<head>
<title>add</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="sri.css">
</head>

<body>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
	<div class="a" >
	<div class="container">
	<h1>Add a post</h1>
	</div>
	</div>
	
<div class="container" <!--style="background: linear-gradient(to bottom, #006699 0%, #003366 100%);--></div> ">
<div class="row">
	
	<div class="col-sm-12">
		<form action="insert.php" method="post">
			<br><br>
			blog TITLE     : <input type="text" name="title"><br><br>
			select category:<select name="cetegory">
							<option value="Technology" name="Technology">Technology</option>
							<option value="Travel" name="Travel">Travel</option>
							<option value="Event" name="Event">Event</option>
							</select><br><br>
			select tags    :<select name="tags">
							<option value="airline" name="airline">airline</option>
							<option value="hotel" name="hotel">hotel</option>
							<option value="car" name="car">car</option>
							<option value="packages" name="packages">packages</option>
							<option value="deals" name="deals">deals</option>
							</select><br><br>
			content about blog : <textarea type="text" name="content"  cols="60" rows="2"></textarea><br><br>
			author name     : <input type="text" name="author"><br><br>
			<input type="SUBMIT" VALUE="insert"><br>
		</form>
	</div>
	
</div>
</div>

</body>

</html>

