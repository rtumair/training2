<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
      <h1 align="center"> USER INFORMATION </h1>
      <table align="left"
             cellspacing="5" cellpadding="8">

          <tr>
              <td align="left"><b>#</b></td>
              <td align="left"><b>Username</b></td>
              <td align="left"><b>Email</b></td>
              <td align="left"><b>Update</b></td>
              <td align="left"><b>Delete</b></td>
          </tr>
          {foreach from=$tabledata item=row}
              <tr>
                  <td align="left"> {$row['user_id']} </td>
                  <td align="left"> {$row['user_name']} </td>
                  <td align="left"> {$row['user_email']} </td>
                  <td align="left"><form action="usercrud/index" method = "GET">
                          <input type="hidden" name = "rowID" value = "{$row['user_id']}">
                          <input type="submit" name = "update" value ="Update"/></form></td>
                  <td align="left"> <form action="usercrud/delete_a_user" method = "GET">
                          <input type="hidden" name = "rowID" value = "{$row['user_id']}">
                          <input type="submit" name="delete" value ="Delete"/></form></td>
              </tr>
          {/foreach}
      </table>

      <form action="usercrud/index" method="post">
          <input type="submit" name= "add" value="Add User" /> </form>
</body>
</html>