<?php

?>

<html>
<body>
<div align="center" style="margin-top: 17%">
    <div align="center" style="width: 300px;">
        <?php foreach($data['std'] as $row) {
        ?>
        <form action="../update_student_record" method="post">
            <fieldset >
                <legend>Update Student Record</legend>
                <input value="<?php echo $row["id"] ?>" type="hidden" name="id"/></br></br>
                <input value="<?php echo $row["student_name"] ?>" type="text" name="name"/></br></br>
                <input value=<?php echo $row["dob"]?> type="date" name="dob"/></br></br>
                <input value=<?php echo $row["father_name"]?> type="text" name="f_name" /></br></br>
                <input value=<?php echo $row["class"]?> name="class" /></br></br>
                <input value=<?php echo $row["address"]?> type="text" name="address" /></br></br>
                <input value=<?php echo $row["ph_no"]?> type="text" name="ph_no" /></br></br>
                <input type="submit" value="update" />
            </fieldset>
        </form>
        <?php }?>
    </div>
</div>
</body>

</html>