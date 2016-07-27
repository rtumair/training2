
newCustomer=1;
    if( newCustomer ){
        greeting = function () {
            alert("Thanks for visiting the Badlands!\n" +
                "We hope your stay is...better than most.");
        };
    } else {
        greeting = function () {
            alert("Welcome back to the Badlands!\n" +
            "Guess they aren't so bad huh?");
        };
    }



function buildCoveTicketMaker( transport ) {
    var passengerno=0;
    return function ( name ) {
        passengerno++;
        alert("Here is your transportation ticket via the " + transport + ".\n" +
            "Welcome to the Cold Closures Cove, " + name + "! Passenger no: "+passengerno);

    }
}

function capacityStatus (numPassengers, capacity) {

    var noSeats = function(){
        alert('No seats Left');
        return false;
    }

    var seatsAvail = function () {
        alert('Seats Available');
        return true;
    }


    if (numPassengers == capacity) {
        noSeats();
    }
    else
    {
        seatsAvail();
    }


}


var aquarium = {
    Nemo: { type: "fish", species: "clownfish", length: 3.7 },
    Dory: { type: "fish", species: "blue tang", length: 6.2 },
    Peach: { type: "echinoderm", species: "starfish", length: 5.3 },
    "Coral Castle": { type: "environment", material: "coquina", moves: false },
    "Dragon Statue": { type: "environment", material: "plastic", moves: false } ,
    addCritter: function ( name, type, species, length ){
    this[name] = {type: type, species: species, length: length}; },
    Bubbles: { type: "fish", species: "yellow tang", length: 5.6 }

};


function obj(name){
    aquarium.takeOut = function(name) {
        this[name].name = name;
        var temp = this[name];
        delete this[name];
        return temp;
    };

    var fishOutOfWater = aquarium.takeOut(name);
    console.log( fishOutOfWater );


}



function myFun2()
{
    var getSubmarineTicket = buildCoveTicketMaker("Submarine");
    getSubmarineTicket ("Toad") ;
    var getSubmarineTicket = buildCoveTicketMaker("Submarine");
    getSubmarineTicket ("Hassan") ;


}

function myFun()
{
    var parkRides = [ ["Birch Bumpers", 40] , ["Pines Plunge", 55]
        ["Cedar Coaster", 20] , ["Ferris Wheel of Firs", 90]
    ];
    var fastPassQueue = [ "Cedar Coaster", "Pines Plunge", "Birch Bumpers", "hassan" ];


    var firstFastPass = fastPassQueue.shift();
    var secondFastPass = fastPassQueue.shift();


    console.log(firstFastPass );
    console.log(secondFastPass);
    console.log(fastPassQueue);
}





function closeTerminal( message )
{
    console.log(message);
    message();
}