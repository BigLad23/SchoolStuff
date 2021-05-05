console.log("*****Kohta 11*****")
let matka = 1200;
let nopeus = 60;
if (matka / nopeus) {
    console.log(matka / nopeus + " minuutia kestää matka")
}
//-------------------------------------------------------------
console.log("*****Kohta 12*****")
let sivuA = 20;
let sivuB = 40;
if (sivuA * sivuB) {
    console.log(sivuA * sivuB +"cm²")
}
//-------------------------------------------------------------
console.log("*****Kohta 13*****")
let tuuma = 1;
let senttimetri = 2.54;
let numero = prompt('Kuinka monta tuumaa','');
console.log(numero * 2.54 + " senttimetriä")
//-------------------------------------------------------------
console.log("*****Kohta 14*****")
let luku = prompt('Parllisuus testi','') 
{
    if (luku % 2) {
        console.log(luku + " on pariton")
     } 
       else {
           console.log(luku + " on parillinen")
       }
    }
//-------------------------------------------------------------
console.log("*****Kohta 15******")
let luku1 = prompt('Parllisuus testi 2','') 
{
    if (luku1 % 2) {
        console.log(false)
     } 
       else {
           console.log(true)
       }
    }
//-------------------------------------------------------------
console.log("*****Kohta 16*****")
let luku2 = prompt('Onko karkausvuosi','') 
{
    if (luku2 % 4) {
        console.log(luku2 + " ei ole karkausvuosi")
     } 
       else {
           console.log(luku2 + " on karkausvuosi")
       }
    }
//--------------------------------------------------------------
console.log("*****Kohta 17*****")
let numero2 = prompt('anna numero välillä 0-10','');
{
    if (numero2 < 10) {
    console.log(false)
}
if (numero2 > -1) {
    console.log(true)
}
else {
    console.log(false)
}
}
//---------------------------------------------------------------
console.log("*****Kohta 18A******")
let jaettava = 20;
{
if (jaettava % 4 <= 1) {
    console.log(false)
    }
 else {
    console.log(true)
    }
}
//---------------------------------------------------------------
console.log("*****Kohta 18B******")
let jaettava1 = 20;
{
if (jaettava1 % 3 <= 1) {
    console.log(true)
}
else {
    console.log(false)
}
}
//---------------------------------------------------------------
console.log("*****Kohta 18C******")
let jaettava2 = 20;
if (jaettava2 % 20 <= 1) {
    console.log(true)
}
else {
    console.log(false)
}
//---------------------------------------------------------------
console.log("*****Kohta 19*****")
let celsius = prompt('celssius fahrenheitiksi','')
console.log(celsius * 1.8 + 32 + "fahrenheitia")
//---------------------------------------------------------------
console.log("*****Kohta 20*****")
let fahrenheit = prompt('fahrenheit celsiukseksi','')
console.log((fahrenheit - 32) / 1.8 +  "celsius")

