<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BackboneTutorials.com Beginner Video</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/css/bootstrap.min.css">

    <style>
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
    </style>

</head>
<body>


<div class="container">
    <h1>Student Management System</h1>
    <hr />
    <div class="page"></div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.2/underscore-min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>

<!--home page display-->
<script type="text/template" id="home_page">
    <a href="#/new" class="btn btn-success">Add Student</a>
    <hr />

    <table class="">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <% _.each(students, function(student) { %>
        <tr>
            <td><%= student['id'] %></td>
            <td><%= student['student_name'] %></td>
            <td><%= student['dob'] %></td>
            <td><%= student['father_name'] %></td>
            <td><%= student['class'] %></td>
            <td><%= student['address'] %></td>
            <td><%= student['ph_no'] %></td>
            <td>
                <a class="btn" href="#/edit/<%= student['id']%>">Edit</a>
                <a class="btn" href="#/delete/<%= student['id']%>">Delete</a>
            </td>

        </tr>
        <% }); %>
        </tbody>
    </table>
</script>

<!-- add new record-->
<script type="text/template" id="addRecord">
    <form class="new-user-form">
        <fieldset >
            <legend>Add Student Record</legend>
            <input placeholder="Name" value="" type="text" name="name" id="name" style="width:18em"/></br></br>
            <input placeholder="DOB" value="" type="date" name="dob" id="dob" style="width:18em"/></br></br>
            <input placeholder="Father Name" value="" type="text" name="father_name" id="father_name" style="width:18em"/></br></br>
            <input placeholder="Class" value="" type="text" name="class" id="class" style="width:18em"/></br></br>
            <input placeholder="Address" value="" type="text" name="address" id="address" style="width:18em"/></br></br>
            <input placeholder="Phone No" value="" type="text" name="ph_no" id="ph_no" style="width:18em"/></br></br>
            <input type="submit" id="addStudent" value="Add Record" style="width:18em;background-color:limegreen"/>
        </fieldset>
        <hr />
    </form>
</script>

<!--edit record-->
<script type="text/template" id="editRecord">
    <form class="new-user-form">
        <fieldset >
            <legend>Edit Student Record</legend>
            <input value="<%= student ? student['id'] : '' %>"  type="hidden" name="id" id="id" style="width:18em"/></br></br>
            <input value="<%= student ? student['student_name'] : '' %>"  type="text" name="name" id="name" style="width:18em"/></br></br>
            <input value="<%= student ? student['dob'] : '' %>"  type="date" name="dob" id="dob" style="width:18em"/></br></br>
            <input value="<%= student ? student['father_name'] : '' %>"  type="text" name="father_name" id="father_name" style="width:18em"/></br></br>
            <input value="<%= student ? student['class'] : '' %>"  type="text" name="class" id="class" style="width:18em"/></br></br>
            <input value="<%= student ? student['address'] : '' %>"  type="text" name="address" id="address" style="width:18em"/></br></br>
            <input value="<%= student ? student['ph_no'] : '' %>"  type="text" name="ph_no" id="ph_no" style="width:18em"/></br></br>
            <input type="submit" id="editStudent" value="Update Record" style="width:18em;background-color:limegreen"/>
        </fieldset>
        <hr />
    </form>
</script>


<script>

    var Student = Backbone.Model.extend({
        url: 'http://localhost/apigility/public/student'
    });

    // display record
    var ListView = Backbone.View.extend({
        el: '.page',
        render: function () {
            var that = this;
            var student = new Student();
            student.fetch({
                success: function (a,b,c) {
                    var template = _.template($('#home_page').html(), {students: b['_embedded']['student']});
                    that.$el.html(template);
                }
            })
        }
    });
    var studentListView = new ListView();

    // add new record
    var NewView = Backbone.View.extend({
        el: '.page',
        events:{
            'click #addStudent':'saveRecord'
        },

        saveRecord: function(){
            var that = this;
            var student = new Student({
                "student_name": document.getElementById('name').value,
                "dob": document.getElementById('dob').value,
                "father_name": document.getElementById('father_name').value,
                "class": document.getElementById('class').value,
                "address": document.getElementById('address').value,
                "ph_no": document.getElementById('ph_no').value,
                "status":"1"
            });
            student.urlRoot = 'http://localhost/apigility/public/student';
            student.save({}, {
                 success: function () {
                 }
             });
            router.navigate('', true);
        },

        render: function () {
            var that = this;
            var student = new Student();
            student.fetch({
                success: function (data) {
                    var template = _.template($('#addRecord').html());
                    that.$el.html(template);
                }
            })
        }
    });
    var studentAddView = new NewView();

    // edit record
    var EditView = Backbone.View.extend({
        el: '.page',

        events: {
            'click #editStudent':'editRecord'
        },

        editRecord: function(){
            var that = this;
            var id = document.getElementById('id').value;
            var student = new Student({id:id});
            console.log(student);
            //.urlRoot = 'http://localhost/apigility/public/student/'+id;
            student.url = 'http://localhost/apigility/public/student/'+id;
            console.log(student.url);
            console.log("outside fetch");
            student.fetch({
                success: function(model, xhr, options){
                    console.log("inside fetch");
                    student.set({
                            "student_name": document.getElementById("name").value,
                            "dob": document.getElementById('dob').value,
                            "father_name": document.getElementById('father_name').value,
                            "class": document.getElementById('class').value,
                            "address": document.getElementById('address').value,
                            "ph_no": document.getElementById('ph_no').value,
                            "status":"1"
                        });
                    student.save({}, {
                        success: function () {
                        }
                    });
                },
                error: function (model, xhr, options) {
                    console.log("Something went wrong while updating the record");
                }
            })
            router.navigate('', true);
        },

        deleteStudent: function (options) {
            var that = this;
            var student = new Student({ id:options.id});
            student.url = 'http://localhost/apigility/public/student/'+options.id;
            student.destroy({
                 success: function (model, respose, options) {
                     console.log("The model has deleted the record");
                     router.navigate('', true);
                 },
                 error: function (model, xhr, options) {
                     console.log("Something went wrong while deleting the record");
                 }
            });
        },

        render:function (options) {
            var that = this;
            var student = new Student({id: options.id});
            student.url = 'http://localhost/apigility/public/student/'+options.id;
            student.fetch({
                success: function(a,b,c){
                    //console.log(b);
                    var template = _.template($('#editRecord').html(),{student:b});
                    that.$el.html(template);
                }
            })
        }



    });
    var studentEditView = new EditView();

    var Router = Backbone.Router.extend({
        routes: {
            "": "home",
            "edit/:id": "edit",
            "new": "newRecord",
            "delete/:id": "deleteRecord",
        }
    });
    var router = new Router;
    router.on('route:home', function() {
        // render user list
        studentListView.render();
    })
    router.on('route:edit', function(id) {
        studentEditView.render({id: id});
    })
    router.on('route:newRecord', function() {
        studentAddView.render();
    })

    router.on('route:deleteRecord', function(id) {
        studentEditView.deleteStudent({id: id});
    })


    Backbone.history.start();
</script>


</body>
</html>