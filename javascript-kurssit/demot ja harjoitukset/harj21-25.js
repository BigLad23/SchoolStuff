console.log("*****Kohta 21*****")
var ostoslista = new Array();

ostoslista[0] = "leipä";
ostoslista[1] = "voi";
ostoslista[2] = "maito";
ostoslista[3] = "kahvi";
ostoslista[4] = "juusto"

console.log(ostoslista);
//----------------------------------------
ostoslista[2] = "Kerma";

for(let i = 0; i < ostoslista.length; i++) {
    console.log(ostoslista[i]);
}
console.log(ostoslista.length);
//-----------------------------------------
console.log("*****Kohta 22 (b ja c)*****")

let numerot = new Array();



for(let i = 1; i <= 25; i++) {
    numerot[i - 1] = i;
}
for(let i = 0; i < numerot.length; i++) {
    console.log(numerot[i]);
}

//-----------------------------------------
console.log("*****Kohta 24*****")
var eka =  function(array, n) {
    if (array == null) 
    return void 0;
  if (n == null) 
    return array[0];
  if (n < 0)
    return [];
  return array.slice(0, n);
};

console.log(eka([7, 9, 0, -2]));
console.log(eka([],3));
console.log(eka([7, 9, 0, -2],3));
console.log(eka([7, 9, 0, -2],6));
console.log(eka([7, 9, 0, -2],-3));
//---------------------------------------
console.log("*****Kohta 25*****")
var vika = function vika(array, n) {
  if (array == null) return void 0;
  if (n == null) return array[array.length - 1];
  return array.slice(Math.max(array.length - n, 0));
};

console.log(vika([7, 9, 0, -2]));
console.log(vika([7, 9, 0, -2], 3));
console.log(vika([7, 9, 0, -2], 6));
//---------------------------------------







