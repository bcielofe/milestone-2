<a href="#" style="text-decoration: none">
	<h1 data-toggle="collapse" data-target="#add_class">
		ADD CLASS
	</h1>
</a>
<form method="POST" id="add_class" class="collapse">
	<div class="form-group">
		<label for="name">Class Name:</label>
		<input type="text" class="form-control" id="name" name="class_name" required>
	</div>

	<button type="submit" class="btn btn-default" name="add_class">
		Add
	</button>
</form>
<?php
	include('connection.php');
	if(isset($_POST['add_class'])) 
	{
		$class_name = $_POST['class_name'];
		$exist_user = "SELECT class_name FROM classes WHERE class_name='$class_name'";
		$result = mysqli_query($conn,$exist_user);
		if (mysqli_num_rows($result)>0) 
		{
			echo "Class already exists. Please enter a unique class name.";
		}
		else 
		{
			$sql = "INSERT INTO classes (class_name) VALUES ('$class_name')";
			$result = mysqli_query($conn,$sql);
			if($result)
			{
			echo "Class successfully added.";
			}
		}
	}
?>