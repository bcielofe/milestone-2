<a href="#" style="text-decoration: none">
	<h1 data-toggle="collapse" data-target="#student_name">
		ENROLL A STUDENT
	</h1>
</a>
<form method="POST" id="student_name" class="collapse">

	<div class="form-group">
		<label for="student_name">Student Name:</label>
		<input type="text" class="form-control" id="sked" name="student_name" required>
	</div>
	<div class="form-group">
		<label for="class">Class:</label>
		<select required class="form-control" id="class" name="class_name">
			<option></option>
			<?php
				include('connection.php');
				$sql = "SELECT * FROM classes";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					extract($row);
					echo "<option value='$id'>$class_name</option>";
				}
			?>
		</select>
	</div>
	<button type="submit" class="btn btn-default" name="enroll_student">
		Submit
	</button>
</form>
<?php
	if(isset($_POST['enroll_student'])) 
	{
		$student_name = $_POST['student_name'];
		$class = $_POST['class_name'];
		$exist_user = "SELECT name FROM students WHERE name='$student_name'";
		$result = mysqli_query($conn,$exist_user);
		if (mysqli_num_rows($result)>0) 
		{
			echo "Student name must be unique.";
		}
		else 
		{
			$sql = "INSERT INTO students (name, class_id) VALUES ('$student_name','$class')";
			$result = mysqli_query($conn,$sql);
			if($result)
			{
				echo "Student successfully enrolled.";
			}
		}
	}
?>