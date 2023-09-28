<?php 
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<form action="./Controllers/PostController.php" method="POST">
		<input type="text" placeholder="Post title" name="title"> <br>
        <?php
        echo isset($_SESSION['title_error'])?$_SESSION['title_error']:"";
        echo '<br>';
        ?>       
		<input type="text" placeholder="Author Name" name="author"><br>
        <?php
        echo isset($_SESSION['author_error'])?$_SESSION['author_error']:"";
        echo '<br>';
        ?>
		<textarea name="description" placeholder="Post Desctiption"> </textarea> <br>
        <?php
        echo isset($_SESSION['description_error'])?$_SESSION['description_error']:"";
        echo '<br>';
        ?>
		<button type="submit">Add New Post</button>
	</form>

</body>
</html>
<?php 
session_unset();
?>