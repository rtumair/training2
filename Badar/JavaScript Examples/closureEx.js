
function testClosure ( ) {
var x = 4;

function closeX(){return x;}
return closeX
}

function buildCoveTicketMaker( transport ) {

var passengerNum = 0;

return function ( name ) {
passengerNum++;
alert("Here is your transportation ticket via the " + transport + ".\n" +	
"Welcome to the Cold Closures Cove, " + name + "! \n You are passenger # "+passengerNum+" !");
}

}

var SubmarineTicket = buildCoveTicketMaker("Submarine");

SubmarineTicket("badar");

SubmarineTicket("Awais");



var battleShipTicket= buildCoveTicketMaker("battleship")('ali');
