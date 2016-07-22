<body>
<div id="container">
    <div id="form">

        <?php


        //Upload File

        //view upload form


        print "Upload new csv by browsing to file and clicking on Upload<br />\n";

        print "<form enctype='multipart/form-data' action='/my_work/mvc/public/home/upload_csv' method='post'>";

            print "File name to import:<br />\n";

            print "<input size='50' type='file' name='filename'><br />\n";

            print "<input type='submit' name='submit' value='Upload'></form>";



        ?>

    </div>
</div>
</body>