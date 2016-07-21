<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> UPDATE A USER! </h1>
    <form action="update_a_user/{$rowID}" method = "POST">

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
</html>