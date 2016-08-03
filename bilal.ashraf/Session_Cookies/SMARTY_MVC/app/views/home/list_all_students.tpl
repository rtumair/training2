
<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
</style>

<a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/AddStudent'>Add Student</a>
<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>FatherName</th>
        <th>DOB</th>
        <th>SchoolName</th>
        <th>City</th>
        <th>Destination</th>
        <th>Status</th>
        <th></th>
        <th></th>
    </tr>

    {foreach $result as $row}
    {strip}
    <tr>
        <td> {$row['id'] }</td>
        <td> {$row['name'] }</td>
        <td> {$row['fathername']} </td>
        <td> {$row['dob']} </td>
        <td>  {$row['schoolname']} </td>
        <td>  {$row['city'] } </td>
        <td>  {$row['destination'] } </td>
        <td>  {$row['status']} </td>
        <td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/UpdateStd/{$row['id']}'>Edit</a></td>
        <td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/DeleteStd/{$row['id']}'>Delete</a></td>
    </tr>
    {/strip}
    {/foreach}
</table>

