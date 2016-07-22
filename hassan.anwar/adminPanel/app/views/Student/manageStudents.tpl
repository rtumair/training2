{include file="/var/www/html/mvc/app/views/Student/header_main.tpl" title="Student Managemnent Portal"}

<h2 style="padding-left: 40%; padding-right: 40%">Manage Students</h2>

<div>

    <a >Add Student</a><br/><br/>
    <a href="importStudents">Import</a><br/><br/>
    <a href="export" target="_blank">Export</a><br/><br/>

    <table>
        <tbody>

        <tr>
            <th>Sr#</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>


        {foreach $data as $row}
            <tr>
                <td>{$count++}</td>
                <td>{$row.student_name}</td>
                <td>{$row.dob}</td>
                <td>{$row.father_name}</td>
                <td>{$row.class}</td>
                <td>{$row.address}</td>
                <td>{$row.phone_no}</td>
                <td><a href="updateStudent/{$row.id}" >Update</a> | <a href="javascript:void(0)" onclick="confirmation({$row.id})" >Delete</a> </td>

            </tr>


        {/foreach}

        </tbody>
    </table>

</div>





{include file="/var/www/html/mvc/app/views/Student/footer.tpl"}