<a href="#" style="text-decoration: none">
				<h1 data-toggle="collapse" data-target="#student_class">
					TRANSFER A STUDENT
				</h1>
			</a>
		<form method="POST" id="student_class" class="collapse">
	
			<div class="form-group">
		    <label for="student">Student Name:</label>
		    <select required class="form-control" id="student" name="student_name">
		    	<option></option>

<?php
include('connection.php');
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	extract($row);
	echo "<option value='$id'>$name</option>";

}

?>
			</select>
		  </div>


		  <div class="form-group">
		    <label for="class">New Class:</label>
		    <select required class="form-control" id="class" name="class_name">
		    	<option></option>
<?php
$sql = "SELECT * FROM classes";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	extract($row);
	echo "<option value='$id'>$class_name</option>";

}

?>
			</select>
		  </div>

		  

		  <button type="submit" class="btn btn-default" name="transfer_student">Submit</button>
		</form>

<?php
	if(isset($_POST['transfer_student'])) {
		$student_id = $_POST['student_name'];
		$sql = "SELECT id, name, class_id FROM students WHERE id=$student_id";
		extract(mysqli_fetch_assoc(mysqli_query($conn,$sql)));

		$sql = "INSERT INTO students_old (student_id,student_name,class_id) VALUES ('$id','$name','$class_id')";
		mysqli_query($conn,$sql);

		$class_id = $_POST['class_name'];
		$sql = "UPDATE students SET class_id = '$class_id' WHERE id = '$student_id'";
		mysqli_query($conn,$sql);

	}
?>