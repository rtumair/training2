var Tornado = function (category, affectedAreas, windGust) { 	
this.category = category;	
this.affectedAreas = affectedAreas;	
this.windGust = windGust;	
};

var cities = [ ["Kansas City", 464310], ["Topeka", 127939], ["Lenexa", 49398] ];

var twister = new Tornado( "F5", cities, 220 );

Tornado.prototype.valueOf = function( ) {
	var sum = 0;
	for (var i = 0; i < this.affectedAreas.length; i++) {
		sum += this.affectedAreas[i][1];
		}
return sum;
};


Tornado.prototype.toString = function( ) {

	var list = "";
	for (var i = 0; i < this.affectedAreas.length; i++) {

	if (i < this.affectedAreas.length - 1) {

		list = list + this.affectedAreas[i][0] + ", ";

		} else {
			list = list + "and " + this.affectedAreas[i][0]; 
			}
			

	}
	return "This tornado has been classified as an " + this.category +
	", with wind gusts up to " + this.windGust + "mph. Affected areas are: " +
	list + ", potentially affecting a population of " + this.valueOf() + "." ;
};


Object.prototype.findOwnerOfProperty = function ( propName ) {
	var currentObject = this;
	while (currentObject !== null){
		
		if (currentObject.hasOwnProperty(propName)) {	
			return currentObject;	
		}
		else {	
			currentObject = currentObject.__proto__;	
			}
	}
return "No property found!";
};


cities.push( ["Olathe", 130045] );


alert(twister.valueOf());


alert(twister.toString());

alert(twister.findOwnerOfProperty("valueOf"));

