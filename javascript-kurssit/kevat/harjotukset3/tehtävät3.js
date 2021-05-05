function buttonFunction() {
  var x = document.getElementById("hello").value;
  document.getElementById("teksti").innerHTML = "hei, " + x + " oletko valmis aloittamaan?";
}
function ika() {
	var age = document.getElementById("ika1").value;
	if (age < 16)
	{
		document.getElementById("ika2").innerHTML = "Olet liian nuori tätä peliä varten";
	}
	
	else   
	{
		document.getElementById("ika2").innerHTML = "Olet Tarpeeksi vanha, jatketaan.";
	}
}
var randomnumero = 0;

function luku(max, min) {

	randomnumero = Math.ceil(Math.random() * (max - min) + min);
	console.log(min); 
	console.log(max);
	console.log(randomnumero);
	
	randomnumero = Math.ceil(randomnumero);
	
}
function arvaa() {
	var max = document.getElementById("numero1").value;
	var min = document.getElementById("numero2").value;
	if (randomnumero == 0) {
		luku(max, min);
	}

	var arvattunumero = document.getElementById("numero3").value;
	console.log(arvattunumero);


	
	if (arvattunumero == randomnumero) {
		document.getElementById("teksti2").innerHTML = "Arvasit oikein";
	}
	else if (arvattunumero > randomnumero) {
		document.getElementById("teksti2").innerHTML = "Ei oikein, numerosi oli liian suuri";
	}
	else if (arvattunumero < randomnumero) {
		document.getElementById("teksti2").innerHTML = "Ei oikein, numerosi oli liian pieni";
	}
	else if (arvattunumero > max) {
		document.getElementById("teksti2").innerHTML = "Arvasit yli maksimi rajan, yritä uudelleen pienemmällä numerolla";
	}
	else if (arvattunumero < min) {
		document.getElementById("teksti2").innerHTML = "Sinun arvaus oli liian pieni, yritä uudelleen isomalla numerolla";
	}
	else {
		document.getElementById("teksti2").innerHTML = "nyt ei jokin mennyt oikein";
	}
	
}

   