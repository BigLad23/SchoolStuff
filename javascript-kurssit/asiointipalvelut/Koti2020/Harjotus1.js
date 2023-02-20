console.log("----------------------------------------tehtävä 1----------------------------------------");

var nimi1 = "Lauri";
var nimi2 = "Tiina";

console.log("Hei " + nimi1 + ", Mitä kuuluu?");
console.log("Hei " + nimi2 + ", Mitä kuuluu?");
console.log("----------------------------------------tehtävä 2----------------------------------------");


function potenssi(n1, n2)
{
    var tulos = Math.pow(n1, n2);
    console.log(n1 + " potenssi " + n2 + " on " + tulos);
}
console.log(potenssi(2, 2))
console.log(potenssi(20, 2))
console.log("----------------------------------------tehtävä 3----------------------------------------");

function ika(ika1)
{
    if(18 < ika1)
    {
        console.log("oot täysi ikäinen");
    }
    else 
    {
        console.log("oot ala ikäinen");
    }
}
console.log(ika(30));
console.log("----------------------------------------tehtävä 4----------------------------------------");

function luku(x, y) 
{
    if(x < y) 
    {
        console.log(y + " on isompi kuin " + x);
    }
    else if(x > y)
    {
        console.log(x + " on isompi kuin " + y);
    }
    else {
        console.log(x +" ja " + y + " on saman kokoisia");
    }
}
console.log(luku(22, 20));
console.log("----------------------------------------tehtävä 5----------------------------------------");

function kolmionPintaAla(kanta, korkeus) {
    var pintaAla = kanta * korkeus / 2;
    return pintaAla.toFixed(1);
}
console.log(kolmionPintaAla(25, 50));
console.log("----------------------------------------tehtävä 6----------------------------------------");

function osamaara(jaettava, jakaja) {
    if (jakaja === 0) {
        return "Ei voi jakaa nollalla";
    }
    else {
        return jaettava / jakaja;
    }
}
console.log(osamaara(10, 2));
console.log("----------------------------------------tehtävä 7----------------------------------------");

function robotti(aaltopituus) {
    let vari = "";
    if (aaltopituus >= 380 && aaltopituus <= 450) {
        return "Violetti";
    } else if (aaltopituus >= 450 && aaltopituus <= 490) {
        return "Sininen";
    } else if (aaltopituus >= 490 && aaltopituus <= 560) {
        return "Vihreä";
    } else if (aaltopituus >= 560 && aaltopituus <= 590) {
        return "Keltainen";
    } else if (aaltopituus >= 590 && aaltopituus <= 630) {
        return "Oranssi";
    } else if (aaltopituus >= 630 && aaltopituus <= 760) {
        return "Punainen";
    } else {
        return "en kyl tiiä";
    }
    return vari;
}
console.log(robotti(0));
console.log(robotti(380));
console.log(robotti(760));
console.log("----------------------------------------tehtävä 8----------------------------------------");

function taksiMatka(henkilot, matkanPituus) {

    // calculate the cost of the trip depending on its length and the amount of people
    let aloitusMaksu = 5.40;
    let kilometrihinta = 0;
    if (henkilot >= 1 && henkilot < 2) {
        kilometrihinta = 1.6;
    } else if (henkilot >= 3 && henkilot <= 4) {
        kilometrihinta = 1.9;
    } else if (henkilot >= 5 && henkilot <= 6) {
        kilometrihinta = 2.0;
    } else if (henkilot > 6) {
        kilometrihinta = 2.2;
    } else {
        return "Tarkista tiedot";
    }
    return aloitusMaksu + (matkanPituus * kilometrihinta);
    }
console.log(taksiMatka(5, 100));
console.log("----------------------------------------tehtävä 9----------------------------------------");

function pyoristus(luku) {
  if (luku > 0) {
    return Math.floor(luku + 0.5);
  } else {
    return Math.ceil(luku - 0.5);
  }
}
console.log(pyoristus(5.65));
console.log(pyoristus(5.35));
console.log(pyoristus(-5.65));
console.log("----------------------------------------tehtävä 10----------------------------------------");
 
function tuotteenHinta(hinta, alv) {
    let prosentti = 1;
    if (100 <= hinta && hinta <= 200) {
        prosentti = 0.95;
    } else if (200 <= hinta && hinta <= 500) {
        prosentti = 0.90;
    } else if (500 <= hinta && hinta <= 1000) {
        prosentti = 0.85;
    }
    return hinta * prosentti * (alv + 1);
}
console.log(tuotteenHinta(100, 0.24));
console.log(tuotteenHinta(400, 0.24));
console.log(tuotteenHinta(1000, 0.24));