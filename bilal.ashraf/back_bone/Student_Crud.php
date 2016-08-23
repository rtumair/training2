<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BackboneTutorials.com Beginner Video</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Student Manager Crud</h1>
    <hr />
    <div class="page"></div>
</div>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"> </script>
<script src="http://underscorejs.org/underscore.js" type="text/javascript"></script>
<script type="text/javascript" src="http://backbonejs.org/backbone.js"> </script>
<script type="text/template" id="user-list-template">
    <a href="#/new" class="btn btn-primary">New</a>
    <hr />
    <table class="table striped" id="del">
        <thead>
        <tr>
            <th>Name</th>
            <th>FName</th>
            <th>DOB</th>
            <th>SName</th>
            <th>City</th>
            <th>Destination</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <% _.each(students, function(std) { %>
        <tr>
            <td><%= std.name %></td>
            <td><%= std.fathername %></td>
            <td><%= std.dob %></td>
            <td><%= std.schoolname %></td>
            <td><%= std.city %></td>
            <td><%= std.destination %></td>
            <td><%= std.status %></td>
            <td><a class="btn" href="#/edit/<%= std.id %>">Edit</a></td>
            <!--<td><button data-user-id="<%= std.id %>"  class="btn btn-danger delete">Delete</button></td>-->
            <td><a class="btn" href="#/delete/<%= std.id %>">Delete</a></td>

        </tr>
        <% }); %>
        </tbody>
    </table>
</script>

<script type="text/template" id="edit-user-template">
    <form class="edit-user-form">

        <legend><%= std ? 'Edit' : 'New' %> User</legend>
        <label>Name</label>
        <input id = "name" name="name" type="text" value="<%= std ? std.name : '' %>">
        <label>FatherName</label>
        <input id = "fathername" name="fathername" type="text" value="<%= std ? std.fathername : '' %>">
        <label>DOB</label>
        <input id = "dob"name="dob" type="text" value="<%= std ? std.dob : '' %>">

        <label>School_Name</label>
        <input id = "schoolname" name="schoolname" type="text" value="<%= std ? std.schoolname : '' %>">
        <label>City</label>
        <input id = "city" name="city" type="text" value="<%= std ? std.city : '' %>">
        <label>Destination</label>
        <input id = "destinatiom" name="destination" type="text" value="<%= std ? std.destination : '' %>">
        <label>Status</label>
        <input id = "status" name="status" type="text" value="<%= std ? std.status : '' %>">

        <hr />
        <button type="submit" class="btn"><%= std ? 'Update' : 'Create' %></button>
        <% if(std) { %>
        <input type="hidden" name="id" value="<%= std.id %>" />

        <% }; %>
    </form>
</script>

<script>

    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    var Users = Backbone.Model.extend({
        urlRoot: 'http://localhost/api_agility/public/student'

    });

    var User = Backbone.Model.extend({
        urlRoot: 'http://localhost/api_agility/public/student'
    });


    var UserDeleteView = Backbone.View.extend({
        el: '.page',
        events: {
            'click #del': 'render'
        },
        render: function (options) {
            var that = this;
            if(options.id) {
                //alert('delete');
                that.user = new User({id: options.id});
                that.user.destroy({
                    success: function (model, respose, options) {
                        console.log("The model has deleted the server");
                        router.navigate('', {trigger: true});
                    },
                    error: function (model, xhr, options) {
                        console.log("Something went wrong while deleting the model");
                    }
                });
                /*that.user.fetch({
                    success: function (students) {
                        // var template = _.template($('#edit-user-template').html(), {user: user});
                        //that.$el.html(template);
                        var res_std = students.attributes;
                        console.log(res_std.name);
                       // var template = _.template($('#edit-user-template').html());
                        //var html = template({std: res_std});
                        //that.$el.html(html);
                        alert('bil');
                        //std = students;
                    }
                });*/

            }
        }
    });


    var UserListView = Backbone.View.extend({
        el: '.page',
        render: function () {
            console.log("bilal");
            var that = this;
            var students = new Users();
            students.fetch({

                success: function (students) {
                    console.log("success");
                    var res_std = students.attributes._embedded;
                   var template = _.template($('#user-list-template').html());
                    var html= template({students:res_std.student});
                    that.$el.html(html);
                }
            });
        }
    });



    var UserEditView = Backbone.View.extend({
        el: '.page',
        events: {
            'submit .edit-user-form': 'saveUser',
          //  'click .delete': 'deleteUser'
        },
        saveUser: function (ev) {
            alert("khan");
            //console.log($("#name").valueOf());
            var userDetails = $(ev.currentTarget).serializeObject();
          //  var userDetails = { )}
            var user = new User();
            alert("1");
            console.log(userDetails);
            user.save(userDetails, {
                success: function (user) {
                    console.log(user);
                    router.navigate('', {trigger:true});
                }
            });
            return false;
        },

        render: function (options) {
            var that = this;
            if(options.id) {
                alert('bil');
                that.user = new User({id: options.id});
                that.user.fetch({
                    success: function (students) {
                       // var template = _.template($('#edit-user-template').html(), {user: user});
                        //that.$el.html(template);
                        var res_std = students.attributes;
                        console.log(res_std.name);
                        var template = _.template($('#edit-user-template').html());
                        var html= template({std : res_std});
                        that.$el.html(html);
                        alert('bil');
                    }
                })
            }
            else {
                var template = _.template($('#edit-user-template').html());
                var html= template({std : null});
                that.$el.html(html);
            }
        }

    });

    var userListView = new UserListView();
    var userEditView = new UserEditView();
    var userDeleteView = new UserDeleteView();


    var Router = Backbone.Router.extend({
        routes: {
            "": "home",
            "edit/:id": "edit",
            "new": "edit",
            "delete/:id": "delete",
        }
    });

    var router = new Router;
    router.on('route:home', function() {

        console.log("your view has been rendered!!");
        userListView.render();
    })
    router.on('route:edit', function(id) {
        userEditView.render({id: id});
    })
    router.on('route:delete', function(id) {

        userDeleteView.render({id: id});
    })

    Backbone.history.start();


</script>








</body>
</html>