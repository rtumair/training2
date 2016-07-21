<?php
	
	// if(isset($_p'submit'])){   	    	    
	   
		require '/var/www/html/index/mysqli_connect.php';	
		echo "coming here";	
		
		$row_num = $_GET['rowID'];

		$query = "DELETE FROM student_info WHERE student_id = $row_num";

		if (mysqli_query($dbc, $query)) {
		    echo '<h2> Student Deleted! </h2>';
	   		echo '<form action="index.php">
				<input type="submit" value="Go back to hompage" /> 
			</form>';
	    
	    	mysqli_close($dbc);
		} else {
		    echo "Error deleting record: " . mysqli_error($dbc);
		}
	    
	// }

?>