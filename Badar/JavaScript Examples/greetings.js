
var newCustomer=true;

var greeting;

if( newCustomer ){	
greeting = function () { 	

alert("Thanks for visiting the Badlands!\n" + 	
"We hope your stay is...better than most.");

};	

} 	else {	
greeting = function () { 	

alert("Welcome back to the Badlands!\n" +	
"Guess they aren't so bad huh?");

};	

}
closeTerminal( greeting );
function closeTerminal( message ){	

message();	

}
