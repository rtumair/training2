function assignTorpedo ( name, passengerArray ){

	for (var i = 0; i<passengerArray.length; i++) {
		if (passengerArray[i] == name) {
			return function ( ) {
				alert("Ahoy, " + name + "!\n" +	
				"Man your post at Torpedo #" + (i+1) + "!"); };
				}
			}
	}

var subPassengers = ["Luke", "Leia", "Han", "Chewie", "Yoda", "R2-D2", "C-3PO"];

var giveAssignment = assignTorpedo("Han", subPassengers);

giveAssignment();
