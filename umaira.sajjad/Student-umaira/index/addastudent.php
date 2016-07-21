<?php
	if(isset($_POST['submit'])){
	    
	    $data_missing = array();
	    
	    if(empty($_POST['student_name'])){
			$data_missing[] = 'Student Name';
	    } else {
			$s_name = trim($_POST['student_name']);
	    }

	    if(empty($_POST['father_name'])){
			$data_missing[] = 'Father Name';
	    } else{
			$f_name = trim($_POST['father_name']);
	    }
	    if(empty($_POST['school_name'])){
			$data_missing[] = 'School Name';
	    } else {
			$school = trim($_POST['school_name']);
	    }
	    if(empty($_POST['email'])){
			$data_missing[] = 'Email';
	    } else {
			$email = trim($_POST['email']);
	    }
	    

	    if(empty($_POST['address'])){
			$data_missing[] = 'Address';
	    } else {
			$address = trim($_POST['address']);
	    }

	    if(empty($_POST['phone'])){
			$data_missing[] = 'Phone';
	    } else {
			$phone = trim($_POST['phone']);
	    }

	    if(empty($_POST['postal_code'])){
			$data_missing[] = 'Postal Code';
	    } else {
			$zip = trim($_POST['postal_code']);
	    }

	    if(empty($_POST['birth_date'])){
			$data_missing[] = 'Birth Date';
	    } else {
			$b_date = trim($_POST['birth_date']);
	    }

	    	    
	    if(empty($data_missing)){
		
			require '/var/www/html/index/mysqli_connect.php';
			
			$query = "INSERT INTO student_info (student_id, student_name,father_name, school_name, email, address, postal_code, phone, birth_date) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
			
			$stmt = mysqli_prepare($dbc, $query);
			if ( !$stmt ) {
			  echo('mysqli error: '.mysqli_error($dbc));
			}

			mysqli_stmt_bind_param($stmt, "sssssiii", $s_name,
			                       $f_name, $school, $email, $address, $zip, $phone, $b_date);
			
			mysqli_stmt_execute($stmt);
			
			$affected_rows = mysqli_stmt_affected_rows($stmt);
			
			if($affected_rows == 1){
			    
			    echo '<h2> Student Entered! </h1>';
			    echo '<form action="index.php">
			      <input type="submit" value="Go back to hompage" /> </form>';
			    
			    mysqli_stmt_close($stmt);
			    
			    mysqli_close($dbc);
		    
			} else {
			    
			    echo 'Error Occurred<br />';
			    echo mysqli_error();
			    
			    mysqli_stmt_close($stmt);
			    
			    mysqli_close($dbc);
			    
			}
		
	    } else {
		
			echo 'You need to enter the following data<br />';
			
			foreach($data_missing as $missing){
			    
			    echo "$missing<br />";
		    
			}
		
	    }
	    
	}

?>

