/*
// getting data
$.ajax({
    url: 'http://localhost/apigility/public/users',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        var arr = data._embedded.users;
        for( var i=0; i<arr.length;i++){
            console.log(arr[i].name);
        }

    },
    error: function (request, message, error) {
        // alert(request+"\n"+message+"\n"+error);
        console.log("failed");
    }
});
*/

/*
// adding data
$.ajax({
    url: 'http://localhost/apigility/public/users',
    type: 'POST',
    dataType: 'json',
    data:JSON.stringify({"name":"bbbbbb","pswd":"zzzzzzz"}),

    contentType: "application/json",
    success: function (data) {
        console.log(data);

    },
    error: function (request, message, error) {
        // alert(request+"\n"+message+"\n"+error);
        console.log("failed");
    }
});
*/

/*
//updating data

$.ajax({
    url: 'http://localhost/apigility/public/users/50',
    type: 'PUT',
    dataType: 'json',
    data:JSON.stringify({"name":"qqqqq1","pswd":"zzzzzzz1"}),

    contentType: "application/json",
    success: function (data) {
        console.log(data);

    },
    error: function (request, message, error) {
        // alert(request+"\n"+message+"\n"+error);
        console.log("failed");
    }
});
*/

/*
//deleting data
$.ajax({
    url: 'http://localhost/apigility/public/users/49',
    type: 'DELETE',
    dataType: 'json',

    success: function (data) {
        console.log(data);

    },
    error: function (request, message, error) {
        // alert(request+"\n"+message+"\n"+error);
        console.log("failed");
    }
});

*/