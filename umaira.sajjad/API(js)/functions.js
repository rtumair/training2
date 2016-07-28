/**
 * Created by umaira.sajjad on 7/27/16.
 */
linebreak = document.createElement("br");

function Get() {
    // get all the students results and queue them
    var saveData = $.ajax({
        url: 'http://localhost/apigility/public/student',
        type: "GET",
        dataType: 'json',
        success: function (results)
        {
            var student_data = results._embedded.student;

            for (var i = 0; i <  student_data.length; i++) {
                document.getElementById("info").innerHTML = document.getElementById("info").innerHTML + '  ' + student_data[i].name;
                document.getElementById("info").innerHTML = document.getElementById("info").innerHTML + '  ' + student_data[i].email;

                document.getElementById("info").appendChild(linebreak);
            }
        }
    });
    saveData.error(function() { alert("Something went wrong"); });
}
function Post() {
    var saveData = $.ajax({
        url: 'http://localhost/apigility/public/student',
        type: 'POST',
        data: JSON.stringify(
                {
                    name: "Umaira",
                    email: "umai7rasajjad@gmail.com"
                }

        ),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function (results)
        {
            console.log(results);
            alert("Student created!");
        }
    });
}
function Put() {
    var id = prompt ('Enter StudentID: ', '');
    if (id!= null) {
        $.ajax({
            url: 'http://localhost/apigility/public/student/'+ id,
            type: "PUT",
            data: JSON.stringify(
                {
                    name: "Umaira7",
                    email: "umai7rasajjad@gmail.com"
                }
            ),
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            dataType: 'json',
            success: function (results) {
                console.log(results);
                alert("Student updated!");
            }
        });
    }
}
function Delete() {
    var id = prompt ('Enter StudentID: ', '');
    if (id!= null) {
        console.log('inside ajaxfunction');
        $.ajax({
            url: 'http://localhost/apigility/public/student/'+ id,
            type: "DELETE",
            success: function (results)
            {
                alert("Student deleted!");
            }
        });
    }

}