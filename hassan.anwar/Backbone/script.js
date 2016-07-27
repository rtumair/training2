
//--------------------------Code Scripts--------------------------

//----Get Students----
// var Student = Backbone.Model.extend({});
//
// var student = new Student();
//
// student.url = 'http://localhost/apigility/public/student';
//
// var data = student.fetch({
//     success: function(a,b,c){
//         var allStudents=b['_embedded']['student'];
//         for(i = 0; i < allStudents.length; i++) {
//             $('#display').append(
//                 allStudents[i]['student_name']
//             );
//         }
//     }
// });

//----Update Student----
// var Student = Backbone.Model.extend({});
//
// var student = new Student();
//
// student.url = 'http://localhost/apigility/public/student/50';
//
// var data = student.fetch({
//     success: function(a,b,c){
//         student.set({student_name: 'Muhammad Umer Anwar'});
//         student.save();
//     }
// });


//-----Insert Student-----
// var Student = Backbone.Model.extend({
//     url : 'http://localhost/apigility/public/student'
//
// });
//
// var student = new Student(
//     { "student_name" : "Umer Naveed",
//         "dob" : "1993-12-08",
//         "father_name" : "Ijaz",
//         "class" : "BBA",
//         "address" : "Rehman Villas",
//         "phone_no" : "03244563233",
//         "status" : "1"}
// );
//
// student.save({
//     success: function(){
//         console.log('Record inserted SUccessfully');
//     }
// });



