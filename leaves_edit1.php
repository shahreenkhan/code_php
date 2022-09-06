<?php
include('../includes/connection.php');
			$id = $_POST['id'];
			
			$name = $_POST['name'];
			$department = $_POST['department'];
			$leave_type = $_POST['leave_type'];
		    $date = $_POST['date'];
			$day = $_POST['day'];
			$sanctioned = $_POST['sanctioned'];
			$blog = $_POST['blog'];
	   	
		
	 			$query = 'UPDATE leaves set name ="'.$name.'",department ="'.$department.'",leave_type ="'.$leave_type.'",
					date ="'.$date.'", day="'.$day.'", sanctioned="'.$sanctioned.'" ,blog ="'.$blog.'" WHERE
					id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("You've Update Leave Successfully.");
			window.location = "leaves.php";
		</script>