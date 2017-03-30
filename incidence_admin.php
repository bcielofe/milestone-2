
		
			<a href="#" style="text-decoration: none">
				<h1 data-toggle="collapse" data-target="#teacher_list">
					RESET PASSWORD
				</h1>
			</a>
			<div id="teacher_list" class="collapse">
				<?php
					include('connection.php');
		   			$teacher_list = "SELECT * FROM teachers ORDER BY teacher_name";
		    		$result = mysqli_query($conn,$teacher_list);
					while ($row = $result->fetch_assoc()) 
					{
						extract($row);
						echo "<div>";
						echo "<h4 style='width:125px; display:inline-block'>";
						echo $teacher_name;
						echo "</h4>";
						if ($reset==1) 
						{
							echo "<a href='allowreset.php?id=$id'><button class='btn btn-default' name='resetpw'> Allow </button></a>"."<br>";
							echo "</div>";
						}
						else 
						{
							echo "<a href='allowreset.php?id=$id'><button class='btn btn-default' name='resetpw'> AllowED </button></a>"."<br>";
							echo "</div>";
						}

					}
				?>
			</div>