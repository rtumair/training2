<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:03 PM
 */
echo '<h1 align="center"> USER INFORMATION </h1>';

echo '<table align="left"
			cellspacing="5" cellpadding="8">

			<tr>
				<td align="left"><b>#</b></td>				
				<td align="left"><b>Username</b></td>
				<td align="left"><b>Email</b></td>
				<td align="left"><b>Update</b></td>
				<td align="left"><b>Delete</b></td>
			</tr>';
          foreach ($data as $row){;
            //  echo 'row id: '. $row['user_id'];
              echo '<tr>
					<td align="left">' . $row['user_id'] . '</td>
					<td align="left">' . $row['user_name'] . '</td>
					<td align="left">' . $row['user_email'] . '</td>
					<td align="left"><form action="usercrud/index" method = "GET">
						<input type="hidden" name = "rowID" value="'. $row['user_id'].'"?>
						<input type="submit" name = "update" value="Update"/></form></td>
					<td align="left"> <form action="usercrud/delete_a_user" method = "GET">
						<input type="hidden" name = "rowID" value="'. $row['user_id'].'"?>
						<input type="submit" name="delete" value="Delete"/></form></td>';
				echo '</tr>';
         }

echo '</table>';


echo '<form action="usercrud/index" method="post">
		<input type="submit" name= "add" value="Add User" /> </form>';