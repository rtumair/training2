var shoe = { size: undefined, gender: undefined, construction: undefined };


function Shoe (shoeSize, shoeColor, forGender, constructStyle) {
this.size = shoeSize;
this.color = shoeColor;
this.gender = forGender;
this.construction = constructStyle;
}

Shoe.prototype={

putOn: function () { alert ("Your " + this.construction + "’s" + "on, dood!"); },
takeOff: function () { alert ("Phew! Somebody’s size " + this.size + "’s" + " are fragrant! "); }

};


var beachShoe = new Shoe( 10, "blue", "women", "flipflop" );


beachShoe.putOn();

alert(beachShoe.gender);


beachShoe.takeOff();

alert(beachShoe.hasOwnProperty("gender"));
	
