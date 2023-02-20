console.log("----------------------------------------Tehtävä 1----------------------------------------");
    let lista = ["osta maitoa", "kuntoile", "lue kokeeseen", "vie roskat", "istuta tulppaaneja"];
    console.log(lista);
    console.log("For loopilla")
    for(let i = 0; i < lista.length; i++) {
        console.log(i, "-", lista[i]);
    }

    console.log("lista forEach");
    lista.forEach(element => {
        console.log("-", element)
    })

    console.log("lista toString metodilla");
    console.log(lista.toString());

console.log("----------------------------------------Tehtävä 2----------------------------------------");

var uusilista =  new Array();
lista.push("pelaa");
lista.push("kävele");

console.log(lista);

console.log("Maidon poisto")
lista.shift("osta maitoa");
console.log(lista);
console.log("----------------------------------------Tehtävä 3----------------------------------------");

let tiedot1 = {nimi: "aku ankka", ika: "33", puhelinnumero: "0441234567", email: "aku.ankka@ankkalinna.com"};
let tiedot2 = {nimi: "sauli niinistö", ika: "73" , puhelinnumero: "0441234567", email:"sauli@gaming.fi"};
let tiedot3 = {nimi: "elon musk", ika: "50", puhelinnumero: "0441234567", email: "elonmusk@teslagaming.ru"};
function henkiloTiedot(tieto) {
    return (`nimi: ${tieto.nimi}, \nika: ${tieto.ika}, \npuhelinnumero: ${tieto.puhelinnumero}, \nemail: ${tieto.email}\n`);
}

console.log(henkiloTiedot(tiedot1));
console.log("----------------------------------------Tehtävä 4----------------------------------------");

let tiedot = [tiedot1, tiedot2, tiedot3];

tiedot.forEach(element => {
    console.log(henkiloTiedot(element));
});
