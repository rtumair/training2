<?php ini_set('display_errors', true); ?>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"> </script>
    <script src="http://underscorejs.org/underscore.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://backbonejs.org/backbone.js"> </script>

    <script>

        $(function(){

            alert("bil");
            /*var TodoItem = Backbone.Model.extend({});
            var todoItem = new TodoItem();
            todoItem.url = 'http://localhost/api_agility/public/student/31';
            todoItem.fetch();
            alert(todoItem.get('description'));*/

           /* var book1 = new Book({ ID: 40 });
            book1.fetch({
                success: function (bookResponse) {
                    console.log("Found the book: " + bookResponse.get("BookName"));
                }
            });*/

            //Fetching data

           /* var TodoItem = Backbone.Model.extend({urlRoot: 'http://localhost/api_agility/public/student'});
            var todoItem = new TodoItem({id: 31});
            res = todoItem.fetch({
                success: function (response) {
                    console.log("Found the student: " + response.get("name"));
                }
            });*/

           // console.log(todoItem.get("name"));


            var TodoItem = Backbone.Model.extend({urlRoot: 'http://localhost/api_agility/public/student'});
            var todoItem = new TodoItem({id: 31});
            /*var stdItem = new TodoItem( {
                "name": "sharukh", "fathername": "khan", "dob": "2010-12-03", "schoolname": "lords", "city": "lahore", "destination": "usa",
                "status": "single" });

            //Insertion
            stdItem.save({}, {
                success: function (model, respose, options) {
                    console.log("The model has been saved to the server");
                },
                error: function (model, xhr, options) {
                    console.log("Something went wrong while saving the model");
                }
            });*/


            todoItem.destroy({
                success: function (model, respose, options) {
                    console.log("The model has deleted the server");
                },
                error: function (model, xhr, options) {
                    console.log("Something went wrong while deleting the model");
                }
            });

            //updation
            /*todoItem.fetch({
                success: function (response) {
                    console.log("Found the std: " + response.get("name"));
                    // Let us update this retreived book now (doing it in the callback) [UPDATE]
                    response.set("name", response.get("fathername") + "_updated");
                    response.save({}, {
                        success: function (model, respose, options) {
                            console.log("The model has been updated to the server");
                        },
                        error: function (model, xhr, options) {
                            console.log("Something went wrong while updating the model");
                        }
                    });
                }
            });*/


        });



    </script>

</head>