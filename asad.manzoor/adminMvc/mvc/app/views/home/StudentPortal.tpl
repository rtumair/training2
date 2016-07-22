{include file="/var/www/html/mvc/app/views/home/header.tpl" title="add student record"}

<h3>Welcome Home</h3>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2 style="padding-left: 40%"> Register Student</h2>
<form action="/mvc/public/student/add_student" method="post">
    <input value="Add Student" type="submit" />
    <a href="/mvc/public/student/export_record">export csv file</a>
</form>

<form action="/mvc/public/student/import_record" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="filename" id="filename">
    <input type="submit"/>
</form>

<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>



        {foreach $students as $user}
            {strip}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.student_name}</td>
                <td>{$user.dob}</td>
                <td>{$user.father_name}</td>
                <td>{$user.class}</td>
                <td>{$user.address}</td>
                <td>{$user.ph_no}</td>
                <td>
                    <a href="/mvc/public/student/edit_student/{$user.id}" >Edit </a> |
                    <a href="/mvc/public/student/delete_student_record/{$user.id}">Delete</a>
                </td>
            </tr>
            {/strip}
        {/foreach}

    </table>
</div>
</body>
</html>
{include file="/var/www/html/mvc/app/views/home/footer.tpl" title=""}
