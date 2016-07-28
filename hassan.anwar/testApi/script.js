
function getStudents()
{
    $.ajax({
        url:"http://localhost/apigility/public/student",
        type:"GET",
        dataType: "json",
        cache:false,
        success: function(result){
            var allStudents=result['_embedded']['student'];

            for(i = 0; i < allStudents.length; i++) {
                $('#display').append(
                    allStudents[i]['student_name']
                );
            }

        }
    });

}


function postStudent()
{
    $.ajax({
        url:"http://localhost/apigility/public/student",
        type:"POST",
        data: JSON.stringify({
            "student_name" : "Umer Naveed",
            "dob" : "1993-12-08",
            "father_name" : "Ijaz",
            "class" : "BBA",
            "address" : "Rehman Villas",
            "phone_no" : "03244563233",
            "status" : "1"
        }),
        dataType: "json",
        contentType: "application/json",
        cache:false,
        success: function(result){
            console.log('Inserted Sucessfully!!!');
        }
    });

}


function putStudent()
{
    $.ajax({
        url:"http://localhost/apigility/public/student/48",
        type:"PUT",
        data: JSON.stringify({
            "student_name" : "Umer Naveed",
            "dob" : "1993-12-08",
            "father_name" : "Naveed Ahmed Sabri",
            "class" : "BBA",
            "address" : "Rehman Villas",
            "phone_no" : "03004563233",
            "status" : "1"
        }),
        dataType: "json",
        contentType: "application/json",
        cache:false,
        success: function(result){
            console.log('Updated Sucessfully!!!');
        }
    });

}