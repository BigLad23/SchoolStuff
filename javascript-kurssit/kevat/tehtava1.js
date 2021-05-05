console.log("bruh");

function summa(x, y) {
    if(isNaN(x) || isNaN(y)) {
    return "anna lukuja";
} else { 
        return x+y;
}
}
console.log(summa(1, 2));
console.log(summa(-13304));

console.log ("---------------------------Tehtävä 1----------------------------------");

function yhdistys(nimi) {
    let a = "Moro " +  nimi + ", mitä kuuluu?";
    return a;

}
console.log(yhdistys("Lauri"));
console.log(yhdistys("Lad"));
console.log ("---------------------------Tehtävä 2----------------------------------");

function potenssi(numero) {
    let b = numero * 2
    return b;
}

console.log(potenssi(5));
console.log ("---------------------------Tehtävä 3----------------------------------");

function ika(ika) {
    if(ika >= 18) {
        return ("nice oot täys-ikäinen");
    } 
    else if(ika < 18) {
        return ("oot ala-ikäinen");
    }
}
console.log(ika(33))
console.log ("---------------------------Tehtävä 4----------------------------------");

function luku(x,y) {
    if(x > y) {
        return (x + " on isompi")
    } 
    else if(x < y) {
        return (y + " on isompi")
    }
    else if(x == y) {
        return ("luvut on saman kokoiset")
    }
}
console.log(luku(333,22))
console.log ("---------------------------Tehtävä 4----------------------------------");
