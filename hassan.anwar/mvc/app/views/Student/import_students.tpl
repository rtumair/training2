{include file="/var/www/html/mvc/app/views/Student/header.tpl" title="Import | SMP"}

<form action="import" method="post" enctype="multipart/form-data">
    Select CSV file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" value="import" name="action"/>
    <input type="submit" value="Upload">
</form>

{include file="/var/www/html/mvc/app/views/Student/footer.tpl"}
