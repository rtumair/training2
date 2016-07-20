<html>
<head>
    <title>{$title|default:"no title"}</title>
    <style>
        {literal}
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
        {/literal}
    </style>

    <script>
        {literal}
        function confirmation(id){

            var r = confirm("Are you sure you want to delete?");
            if (r == true) {
                window.location="delete/"+id;
            }
        }
        {/literal}
    </script>

</head>
<body>
<h2>Student Management Portal</h2>
<hr />