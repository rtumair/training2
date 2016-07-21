<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/19/16
 * Time: 12:33 PM
 */
// echo '<h1 align="center"> ADD A USER </h1>';

?>

<html>
	<body>
		<h1> ADD A USER!
		</h1>
		<form action="add_a_user" method="post">
			<p>Username
			<input type="text" name="u_name" size="30" value="" />
			</p>

            <p>Password
                <input type="text" name="u_pass" size="30" value="" />
            </p>

            <p>Email
			<input type="text" name="email" size="30" value="" />
			</p>					

			<p>
			<input type="submit" name="submit" value="Send" />
			</p>

		</form>
	</body>
<html>