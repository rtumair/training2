{include file="/var/www/html/mvc/app/views/home/header.tpl" title="add student record"}

<html>
<body>
<div align="center" style="margin-top:7%;margin-bottom: :7%">
    <div align="center" style="width: 300px;">
        {foreach $student as $user}
        {strip}
        <form action="/mvc/public/student/update_student_record" method="post">
            <fieldset >
                <legend>Update Student Record</legend>
                <input value={$user.id} type="hidden" name="id"/></br></br>
                <input value={$user.student_name} type="text" name="name"/></br></br>
                <input value={$user.dob} type="date" name="dob"/></br></br>
                <input value={$user.father_name} name="f_name" /></br></br>
                <input value={$user.class} name="class" /></br></br>
                <input value={$user.address} name="address" /></br></br>
                <input value={$user.ph_no} type="text" name="ph_no" /></br></br>
                <input type="submit" value="update" />
            </fieldset>
        </form>
        {/strip}
        {/foreach}

    </div>
</div>
</body>

</html>
{include file="/var/www/html/mvc/app/views/home/footer.tpl" title=""}
