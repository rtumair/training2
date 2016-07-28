
function getData()
{
    $.ajax({
        url: 'http://localhost/apigility/public/student',
        type: "GET",
        dataType: 'json',
        success: function(data)
        {
            var mydata = data._embedded.student;
            console.log(data);
            for(var item in mydata){
                $('#output').append("<br><br><br><b>id: </b>"+mydata[item].id+"&emsp;<b> name: </b>"+mydata[item].student_name
                    +"&emsp;<b> dob: </b>"+mydata[item].dob+"&emsp;<b> father name: </b>"+mydata[item].father_name
                    +"&emsp;<b> class: </b>"+mydata[item].class+"&emsp;<b> address: </b>"+mydata[item].address);
            }
        }
    });

};


function deleteStudent()
{
    $.ajax({
        url: 'http://localhost/apigility/public/student/40',
        type: "DELETE",
        dataType: 'json',
        success: function(data)
        {
            alert("record deleted");
        }
    });
}

function addStudent()
{
    $.ajax({
        url: 'http://localhost/apigility/public/student',
        type: "POST",
        data: JSON.stringify({
            student_name: "sadia manzoor",
            dob: "1995-05-09",
            father_name: "manzoor ahmed",
            class: "bscs",
            address: "qainchi lahore",
            ph_no: "03049529980",
            status:"1"
        }),
        dataType: 'JSON',
        contentType: "application/json",
        success: function(data)
        {
            console.log(data);
        }
    });
}


function updateStudent()
{
    $.ajax({
        url: 'http://localhost/apigility/public/student/41',
        type: "PUT",
        data: JSON.stringify({
            "student_name": "noman ali",
            "dob": "1997-15-09",
            "father_name": "ali ahmed",
            "class": "bscs",
            "address": "lahore",
            "ph_no": "03129529980",
            "status":"1"
        }),
        dataType: 'json',
        contentType: "application/json",
        success: function(data)
        {
            alert("record updated");
        }
    });
}
