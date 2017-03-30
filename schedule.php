<a href="#" style="text-decoration: none">
				<h1 data-toggle="collapse" data-target="#schedule">
					ENTER A SCHEDULE
				</h1>
			</a>
		<form method="POST" id="schedule" class="collapse">
	
		  <div class="form-group">
		    <label for="class">Class:</label>
		    <select required class="form-control" id="class" name="class_name" >
		    	<option></option>
<?php
include('connection.php');
$sql = "SELECT * FROM classes";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	extract($row);
	echo "<option value='$id'>$class_name</option>";

}

?>
			</select>
		  </div>

		  <div class="form-group">
		    <label for="schedule">Enter a Class Schedule:</label>
		    <input type="date" class="form-control" id="sked" name="schedule" required>
		  </div>

		  <div class="form-group">
		    <label for="lesson">Enter the Corresponding Lesson:</label>
		    <input type="text" class="form-control" id="lesson" name="lesson" required>
		  </div>

		  <div class="form-group" style="display: inline-block;">
		    <label for="lesson">With Speaking Test?</label>

		    <ul>
  <li style="list-style-type: none; ">
    <input type="radio"  value="yes" name="speaking" required="required">
    <label for="yes">Yes</label>
    
    <div class="check"></div>
  </li>
  
  <li style="list-style-type: none;">
    <input type="radio"  value="no" name="speaking" required="required">
    <label for="no">No</label>
    
    <div class="check"><div class="inside"></div>

    </div>
  </li>

		  </div>



		  <button type="submit" class="btn btn-default" name="add_schedule">Submit</button>
		</form>

		<?php
	if(isset($_POST['add_schedule'])) 

{
	$schedule = $_POST['schedule'];
		$class = $_POST['class_name'];
		$lesson = $_POST['lesson'];
		$speaking = $_POST['speaking'];




	
		$query = "SELECT * FROM schedules WHERE class_id='$class' AND schedule = '$schedule'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)){
			echo "Schedule in conflict.";
		} else {
	
		
			$sql = "INSERT INTO schedules (schedule, class_id, lesson, speaking) VALUES ('$schedule','$class', '$lesson', '$speaking')";
			
		    $result = mysqli_query($conn,$sql);
		    if($result)
		    {
		       echo "Schedule successfully added.";
		    }
		}
	
}
?>