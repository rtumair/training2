
<h1>Edit Record</h1>

<form action="/my_work/mvc/public/home/update" method="post">
{foreach $user as $row}


   <input type="hidden" name="id" value='{$row.id}'/>
    <label>Name </label><input type='text'  name="name" id="name" required="true" value='{$row.name}'/><br><br>
   <label>Password </label><input type='text'  name="pswd" id="pswd" required="true" value='{$row.pswd}'/><br><br>
    <input type="submit" value="Edit">
{/foreach}

</form>
