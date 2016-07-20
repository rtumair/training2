<?php

$id = $_GET['id'];
//echo $id;
$result = get_student_by_id($id);

?>

<html>
<body>
<div align="center" style="margin-top: 17%">
    <div align="center" style="width: 300px;">
        <form action="index.php" method="post">
            <fieldset >
                <legend>Register Student</legend>
                <input value="<?php echo $result["student_name"] ?>" type="text" name="name"/></br></br>
                <input value=<?php echo $result["dob"]?> type="date" name="dob"/></br></br>
                <input value=<?php echo $result["father_name"]?> type="text" name="f_name" /></br></br>
                <input value=<?php echo $result["class"]?> name="class" /></br></br>
                <input value=<?php echo $result["address"]?> type="text" name="address" /></br></br>
                <input value=<?php echo $result["ph_no"]?> type="text" name="ph_no" /></br></br>
                <input type="hidden" name="action" value="edit_students"/>
                <input type="hidden" name="id" value="<?php echo $result["id"] ?>"/>
                <input type="submit" value="update" />
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>
