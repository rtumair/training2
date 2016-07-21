<?php
	echo '<h1 align="center"> STUDENT INFORMATION</h1>';	
	require '/var/www/html/index/mysqli_connect.php';
	$query = "SELECT student_id, student_name,father_name, school_name, email, address, postal_code, phone, birth_date FROM student_info";
	$response = @mysqli_query($dbc, $query);
	if ($response) {
		 // echo 'RESPONSE RECEIVED! <br />';
		 echo '<table align="left"
			cellspacing="5" cellpadding="8">

			<tr>
				<td align="left"><b>#</b></td>				
				<td align="left"><b>Student Name</b></td>
				<td align="left"><b>Father Name</b></td>
				<td align="left"><b>School</b></td>
				<td align="left"><b>Email</b></td>
				<td align="left"><b>Address</b></td>
				<td align="left"><b>Postal Code</b></td>
				<td align="left"><b>Phone #</b></td>
				<td align="left"><b>Date of Birth</b></td>
				<td align="left"><b>Update</b></td>
				<td align="left"><b>Delete</b></td>
			</tr>';

			while($row = mysqli_fetch_array($response)){
				// echo "ROWWWWW: ". $row['student_id']; 
				$stu_id = $row['student_id']; 
				echo '<tr>
					<td align="left">' . $row['student_id'] . '</td>
					<td align="left">' . $row['student_name'] . '</td>
					<td align="left">' . $row['father_name'] . '</td>
					<td align="left">' . $row['school_name'] . '</td>
					<td align="left">' . $row['email'] . '</td>
					<td align="left">' . $row['address'] . '</td>
					<td align="left">' . $row['postal_code'] . '</td>
					<td align="left">' . $row['phone'] . '</td>
					<td align="left">' . $row['birth_date'] . '</td>
					<td align="left"><form action="updateastudent.php" method = "GET">
						<input type="hidden" name = "rowID" value="'.$stu_id.'"?>
						<input type="submit" value="Update"/></form></td>
					<td align="left"> <form action="deleteastudent.php">
						<input type="hidden" name = "rowID" value="'.$stu_id.'"?>
						<input type="submit" value="Delete"/></form></td>';
				echo '</tr>';
			}

			echo '</table>';

	} else {
		echo "Couldn't issue database query<br />";
		echo mysqli_error($dbc);
	}
	// make create button here
	echo '<form action="addstudent.html">
		<input type="submit" value="Add Student" /> </form>';
	mysqli_close($dbc); 		
?>


