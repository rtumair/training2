<?php ini_set('display_errors', true); ?>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"> </script>
    <script src="http://underscorejs.org/underscore.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://backbonejs.org/backbone.js"> </script>

    <script>

        $(function(){
            var TodoItem = Backbone.Model.extend({});           //creating a model

            var todoItem = new TodoItem(
                { description: 'Pick up milk', status: 'incomplete', id: 1 }
            );
            todoItem.get('description');
            //console.log(todoItem.get('description'));
            //todoItem.save();

            var TodoView = Backbone.View.extend({
                el:'#mydiv',
                render: function(){
                    alert( this.model.get('status'));
                    var myhtml = '<h1>' + this.model.get('status') + '</h1>';
                    alert(myhtml);
                   // $('#mydiv').html(myhtml);
                    $(this.el).html(myhtml);
                }
            });

            var todoView = new TodoView({ model: todoItem });
            todoView.render();
            console.log(todoView.el);
        });



    </script>

</head>

<body>
<div id="mydiv">

</div>
</body>
</html>

