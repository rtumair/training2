<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 10:51 AM
 */
?>

<html>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">
    Select CSV file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" value="import" name="action"/>
    <input type="submit" value="Upload">
</form>

</body>
</html>