<html>
<head>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<script>
    $(document).ready(function(){


       $.ajax({
            type: "GET",
            url: "http://localhost/api_agility/public/student/8",
            //data: dataValue,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
            },
            success: function (result) {
                alert("We returned: " + result.name + "," + result.fathername);
                console.log(result);
            }
        });

        datavalue = {
            "name": "bilawal", "fathername": "kashu", "dob": "2010-12-03", "schoolname": "lords", "city": "lahore", "destination": "usa",
            "status": "single" };

        $.ajax({
            type: "POST",
            url: "http://localhost/api_agility/public/student",
            data: JSON.stringify(datavalue),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('ERROR');
               // alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
            },
            success: function (result) {
              //  alert("We returned: " + result.name + "," + result.fathername);
                console.log(result);
            }
        });

        datavalue = {
            "name": "atif", "fathername": "kashu", "dob": "2010-12-03", "schoolname": "lords", "city": "lahore", "destination": "usa",
            "status": "single" };

        $.ajax({
            type: "PUT",
            url: "http://localhost/api_agility/public/student/4",
            data: JSON.stringify(datavalue),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('ERROR');
                // alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
            },
            success: function (result) {
                //  alert("We returned: " + result.name + "," + result.fathername);
                console.log(result);
            }
        });

        $.ajax({
            type: "DELETE",
            url: "http://localhost/api_agility/public/student/4",
           // data: JSON.stringify(datavalue),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('ERROR');
                // alert("Request: " + XMLHttpRequest.toString() + "\n\nStatus: " + textStatus + "\n\nError: " + errorThrown);
            },
            success: function (result) {
                //  alert("We returned: " + result.name + "," + result.fathername);
                console.log(result);
            }
        });
    });
</script>
</html>


