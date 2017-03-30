<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"> Ami Online Academy </a>	
	</div>
	<div class="collapse navbar-collapse navbar-right" id="myNavbar">
		<ul class="nav navbar-nav">
			<li> 
				<a href="index.php"> Announcements </a> 
			</li>

			<li class="dropdown"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Classes 
					<span class="caret"> 
					</span>  
				</a> 
				<ul class="dropdown-menu">
				    <li> 
				    	<a href="classes_admin.php"> Add Class </a> 
				    </li> 
				    <li> 
				    	<a href="classes_admin.php"> Schedule & Lesson Plan </a> 
				    </li> 
				    <li> 
				    	<a href="classes_admin.php"> Class List </a> 
				    </li> 
				</ul> 	
			</li>

			<li class="dropdown"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Students 
					<span class="caret"> 
					</span>  
				</a> 
				<ul class="dropdown-menu">
				    <li> 
				    	<a href="students_admin.php"> Enroll Students </a> 
				    </li> 
				    <li> 
				    	<a href="students_admin.php"> Speaking Tests </a> 
				    </li> 
				    <li> 
				    	<a href="students_admin.php"> Student Evaluations </a> 
				    </li> 
				</ul> 	
			</li>

			<li class="dropdown"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Teachers 
					<span class="caret"> 
					</span>  
				</a> 
				<ul class="dropdown-menu">
				    <li> 
				    	<a href="teachers_admin.php"> Teacher Load </a> 
				    </li> 
				    <li> 
				    	<a href="teachers_admin.php"> Salary Report </a> 
				    </li> 
				    <li> 
				    	<a href="teachers_admin.php"> Incidence Reports </a> 
				    </li> 
				</ul> 	
			</li>
			<li> 
				<a href="logout.php">Logout</a>
			</li>


			<!-- <?php if(isset($_SESSION['username'])) { ?>
			
				
			<?php } ?> -->
		</ul>
		
	</div>
</div>
