/* Luo tyhjä taulukko opiskelijat
Lisää siihen 4 opiskelihaa
Lue taulukon arvo ja tulosta ruudulle
muuta yhtä arvoa
tulosta arvot uudeleen
tarkista taulukon pituus*/

var opiskelijat = new Array();

opiskelijat[0] = "Anssi";
opiskelijat[1] = "Lila";
opiskelijat[2] = "Pellervo";
opiskelijat[3] = "Pulmu";

console.log(opiskelijat);
// luetaan taulukon arvot silmukalla

opiskelijat[1] = "Eemeli";

for(let i = 0; i < opiskelijat.length; i++) {
    console.log(opiskelijat[i]);
}


console.log(opiskelijat.length);
// lisää loppuun yksi opiskelija
opiskelijat.push("Aaretti");

for(let i = 0; i < opiskelijat.length; i++) {
    console.log(opiskelijat[i]);
}

//Tee uusi taulukko, jossa on 20 solua, jokaisessa arvona numero (1-20)

let numerot = new Array();

//arvot taulukkoon

for(let i = 1; i <= 20; i++) {
    numerot[i - 1] = i;
}
// ja luetaan ruudulle
for(let i = 0; i < numerot.length; i++) {
    console.log(numerot[i]);
}

/*Luo taulukko tyylit, jossa on elementit “Jazz” ja “Blues”.

Lisää “Rock-n-Roll” loppuun.

Korvaa keskimmäinen arvo “Classics”. Keskimmäinen arvo pitäisi löytyä helposti, jos elementtejän on pariton määrä.

Poista ensimmäinen arvo taulukosta ja näytä se.

Lisää taulukon alkuun Rap and Reggae.

Taulukon tulisi näyttää eri vaiheissa seuraavalta:

Jazz, Blues
Jazz, Blues, Rock-n-Roll
Jazz, Classics, Rock-n-Roll
Classics, Rock-n-Roll
Rap, Reggae, Classics, Rock-n-Roll */


var tyylit = new Array();
tyylit.push("Jazz");
tyylit.push("Blues");
tyylit.push("Rock-n-roll");

console.log(tyylit);

tyylit[Math.floor((tyylit.length-1) / 2)] ="Classics";

console.log(tyylit);

console.log(tyylit.shift());


tyylit.unshift("Rap","Reggae");


console.log(tyylit);


/*Laadi silmukalla kertotaulukko 1 - 5 (1 * 1, 1 * 2, 1 * 3 ......
    2 * 1, 2 * 2 * ... 5 * 5 saakka )
    jatka tehtävää muuntamalla ohjelma funktioksi kertotaulu(n), jossa n on se
    luku, johon lopetetaan */
    function kertotaulukko(n)
    {
for(let j = 1; j <= n; j++) {
    for(let i = 1; i <= n; i++) {
        let vastaus = 1 * i;
        console.log("luvulla "+ j +" kerrottuna" + i + "=" + vastaus);
    }
  }
}
let luku = prompt('Mihin asti tulostetaan kertotaulukkoa','')
kertotaulukko(luku);