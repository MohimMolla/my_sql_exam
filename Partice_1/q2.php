<?php
require "connect.php";
if (isset($_POST['submit'])) {
	$id = $_POST['mainid'];
	$q = "delete from manufacturer where id='$id'";
	$connect->query($q);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Triger delet</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<form action="" method="post">
			<label for="">Select :</label>
			<select name="mainid" id="">
				<?php
				$name = "select * from manufacturer ";
				$result = $connect->query($name);
				while ($row = $result->fetch_assoc()) {
					echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
				}

				?>
			</select>
			<input type="submit" name="submit" value="Delet">
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>