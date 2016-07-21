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
			
			$row_num = $_GET['rowID'];

			$query = "UPDATE student_info SET  student_name = '$s_name' ,father_name = '$f_name', school_name = '$school', email = '$email', address = '$address', postal_code = $zip, phone = $phone, birth_date = '$b_date'  WHERE student_id = $row_num";
			if (mysqli_query($dbc, $query)) {
			    echo '<h2> Student Updated! </h2>';
		   		echo '<form action="index.php">
					<input type="submit" value="Go back to hompage" /> 
				</form>';
		    
		    mysqli_close($dbc);
			} else {
			    echo "Error updating record: " . mysqli_error($dbc);
			}
	    } else {
			
			echo 'You need to enter the following data<br />';
			
			foreach($data_missing as $missing){
			    
			    echo "$missing<br />";
		    
			}
		
	    }
	    
	}

?>

<html>
	<body>
		<h1> Update a student!
		</h1>
		<form action= "<?php $_PHP_SELF ?>" method = "post">		
			<p>Name
			<input type="text" name="student_name" size="30" value="" />
			</p>

			<p>Father's Name
			<input type="text" name="father_name" size="30" value="" />
			</p>
			
			<p>School
			<input type="text" name="school_name" size="30" value="" />
			</p>
			
				
			<p>Email
			<input type="text" name="email" size="30" value="" />
			</p>
				

			<p>Address
			<input type="text" name="address" size="30" value="" />
			</p>
			
			
			<p>Postal Code
			<input type="text" name="postal_code" size="30" value="" />
			</p>

			<p>Phone Number
			<input type="text" name="phone" size="30" value="" />
			</p>

			<p>Date of Birth (YYYY-MM-DD)
			<input type="text" name="birth_date" size="30" value="" />
			</p>

			<p>
			<input type="submit" name="submit" value="Send" />
			</p>

		</form>
	</body>
<html>
