<a href="#" data-toggle="tooltip" style="text-decoration: none">
				<h1 data-toggle="collapse" data-target="#class_list" title="Click here to view classes for other dates.">
					CLASS LIST
				</h1> 	
			</a>

			<div id="class_list" class="collapse col-sm-2">

				<form method="POST" id="c_list">

					<div class="form-group" style="display: inline-block;">
					    <label for="schedule">Choose a Date:</label>
					    <input type="date" class="form-control" id="sked" name="schedule" required value="$schedule">

					     <button type="submit" class="btn btn-default" name="pick_date">Submit</button>

					</div>
				</form>
	
			</div>

	<?php
		include('connection.php');
		if (isset($_POST['pick_date'])) 
		{
			$date = $_POST['schedule'];
		} else 
		{
			$date = date("Y-m-d");
		}
			$sql = "SELECT * FROM schedules s JOIN classes c ON s.class_id = c.id WHERE schedule = '$date' GROUP BY class_id";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
				extract($row);
				echo "<div class='col-sm-2'>";
				echo "<h3 style='width:125px;'>";
				echo $class_name."<br>";
				echo "</h3>";
				echo "<h4>";
				echo "($lesson)<br>";
				echo "</h4>";
				$query = "SELECT speaking FROM schedules WHERE class_id = '$class_id' AND schedule = '$date'";
				extract(mysqli_fetch_assoc(mysqli_query($conn,$query)));
				if($speaking=='yes')
					echo "<br>has Speaking Test<br>";

				$query = "SELECT * FROM students WHERE class_id = $class_id";
				$result2 = mysqli_query($conn,$query);
				while($r = mysqli_fetch_assoc($result2))
				{
					extract($r);
					echo "<a href='#' data-toggle='modal' data-target='#TakeModal$id'>$name</a>";
					require('take_class.php');
					echo "<br>";
				}
				echo "</div>";

			}

		   
	?> 

		