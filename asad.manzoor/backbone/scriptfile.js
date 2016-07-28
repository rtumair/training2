
//add new record

var Student = Backbone.Model.extend({

    urlRoot: 'http://localhost/apigility/public/student',
    url: 'http://localhost/apigility/public/student'
});


var student = new Student({
            student_name: "Javaid arshad",
            dob: "1993-05-09",
            father_name: "Arshad ahmed",
            class: "GDP",
            address: "China",
            ph_no: "03449529980",
            created_on: "2016-07-25 18:13:12",
            updated_on: "2016-07-26 09:06:12",
            status: "1"
});
student.save({}, {
    success: function (model, respose, options) {
        console.log("The model has been saved to the record");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while saving the record");
    }
});


//update record

var Student = Backbone.Model.extend({

    urlRoot: 'http://localhost/apigility/public/student',
    url: 'http://localhost/apigility/public/student/45'
});


 var student = new Student({ id: 45});

student.fetch({
    success: function (studentResponse) {
        console.log("Found the student: " + studentResponse.get("student_name"));

        studentResponse.set({student_name:"Ali Javaid Arshad"});
        studentResponse.save({}, {
            success: function (model, respose, options) {
                console.log("The model has been updated to the record");
            },
            error: function (model, xhr, options) {
                console.log("Something went wrong while updating the record");
            }
        });
    }
});







//delete record

var Student = Backbone.Model.extend({

    urlRoot: 'http://localhost/apigility/public/student',
    url: 'http://localhost/apigility/public/student/47'
});

var student = new Student({ id: 47
            });

student.destroy({
    success: function (model, respose, options) {
        console.log("The model has deleted the record");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while deleting the record");
    }
 });



//read record

var Student = Backbone.Model.extend({

    urlRoot: 'http://localhost/apigility/public/student',
    url: 'http://localhost/apigility/public/student/44'
});


var student = new Student({ ID: 44 });
student.fetch({
    success: function (studentResponse) {
        console.log("Found the book: " + studentResponse.get("student_name"));
    }
});
