<a href="#" style="text-decoration: none">
	<h1 data-toggle="collapse" data-target="#delete_student">
		REMOVE A STUDENT
	</h1>
</a>
<form method="POST" id="delete_student" class="collapse">
	<div class="form-group">
		<label for="student">Student Name:</label>
		<select required class="form-control" id="student" name="student_name">
			<option></option>
			<?php
				include('connection.php');
				$sql = "SELECT * FROM students";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					extract($row);
					echo "<option value='$name'>$name</option>";
				}
			?>
		</select>
	</div>
	<button type="submit" class="btn btn-default" name="student_delete">
		Delete
	</button>
</form>

<?php
if(isset($_POST['student_delete'])) 
{
	$student_id = $_POST['student_name'];
	echo "<form method='POST' id='confirm_delete'>";
	echo "Are you sure you want to remove $student_id from the student list?";
	echo "<input type='hidden' name='student_name' value='$student_id'>";
	echo "<button type='submit' class='btn btn-default' name='confirm_delete'>Confirm Delete</button>";
	echo "</form>";
}
	if (isset($_POST['confirm_delete'])) 
	{
		$student_id = $_POST['student_name'];
		$sql = "DELETE FROM students WHERE name='$student_id'";
		if(mysqli_query($conn,$sql))
		{
			echo "$student_id is removed from the student list.";
		}
	}
?>