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


    $.ajaxPrefilter( function( options, originalOptions, jqXHR ) {
        // base url
        options.url = 'http://localhost/apigility/public' + options.url;
    });

    var Students = Backbone.Collection.extend({
        url: '/mystudent'
    });


    var Student = Backbone.Model.extend({
        urlRoot: '/mystudent'
    });

    var Router = Backbone.Router.extend({
        routes:
        {
            '':  'home',
            'new' : 'newStudent',
            'update/:id' : 'updateStudent',
            'delete/:id' : 'deleteStudent'
        }
    });

    var StudentList = Backbone.View. extend({
        el: '.page',
        render: function () {
            var that = this;
            var students = new Students();
            students.fetch({
                success: function(students) {
                 //  console.log(students.models[0].attributes._embedded.mystudent);
                    var template = _.template( $('#student-list-template').html(), {students: students.models[0].attributes._embedded.mystudent} );
                    that.$el.html(template);
                }
            });
        }
    });

    var NewStudent = Backbone.View.extend({
        // posts and puts
        el: '.page',
        render: function(params){
            // console.log(params.id);
            var that = this;
            if (params) {
                // put 
                var student = new Student({id: params});
                student.fetch({
                    success: function (student)
                    {
                        // console.log(student.attributes);
                        var template = _.template( $('#student-new-template').html(), {student: student.attributes});
                        that.$el.html(template);
                    }
                });
            } else {
                // post;
                var template = _.template( $('#student-new-template').html(), {student: null});
                this.$el.html(template);
            }
        },
        events: {
            'submit .new-student-form': 'saveStudent'
        },
        saveStudent: function(ev)
        {
           var studentDetails =  $(ev.currentTarget).serializeObject();
            var student = new Student();
            student.save(studentDetails, {
                success: function (student) {
                    // console.log(student);
                    router.navigate('',{trigger: true});
                }
            });
            return false;
        }
    });

    var DeleteStudent = Backbone.View.extend({
        el: '.page',
        render: function(params)
        {
            var student = new Student({id: params});
        },
        events: {
            'click .delete': 'deleteStudent'
        },
        deleteStudent: function(ev)
        {
           // console.log(ev.currentTarget.attributes[2].nodeValue);
            params = ev.currentTarget.attributes[2].nodeValue;
            var student = new Student({id: params});

            student.destroy({
              success: function() {
                  Backbone.history.loadUrl(Backbone.history.fragment);
                 //  router.navigate('',{trigger: true});
              }
            });
            return false;
        }
    });

    var studentList = new StudentList();
    var newStudent = new NewStudent();
    var deleteStudent = new DeleteStudent();

    //----- ROUTES ----//
    var router = new Router();

    router.on('route:home', function () {
        studentList.render();
        // console.log('homepage');
    });
    router.on('route:newStudent', function () {
        newStudent.render();
        // console.log('homepage');
    });
    router.on('route:updateStudent', function (id) {
        // console.log('id ' + id);
        newStudent.render(id);
    });
    router.on('route:deleteStudent', function (id) {
       // console.log('id ' + id);
        deleteStudent.render(id);
    });
    Backbone.history.start();