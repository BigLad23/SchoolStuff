let myNimi = document.getElementById("nimi");
let myTervehdys = document.getElementById("tervehdys");
let myButton = document.getElementById("gobutton");



function tervehdys() {
    let nimi = myNimi.value;
    myTervehdys.innerText = "Hei " + nimi + " oletko valmis aloittamaan?";
}
myButton.addEventListener("click", tervehdys); 

// tehtävä 2
let myIka = document.getElementById("IanTarkastus");
let ika = document.getElementById("ika");
let myButton2 = document.getElementById("gobutton2");
function ikaTarkastus() {
    if (ika.value < 16) {
        myIka.innerText = "oot liian nuori";
    } else if (ika.value > 15 && ika.value < 100) {
        myIka.innerText = "oot tarpeeks vanha";
    } else {
        myIka.innerText = "anna oikea ikäsi";
    }
}
myButton2.addEventListener("click", ikaTarkastus);

// tehtävä 3


var numero = Math.floor(Math.random() * 10 + 1);
console.log(numero);
document.getElementById("gobutton3").addEventListener("click", function () {
    var arvaus = document.getElementById("arvattava").value;
    if (arvaus == numero) {
        document.getElementById("arvaus").innerText = "Oikein!";
    } else if (arvaus > numero) {
        document.getElementById("arvaus").innerText = "Väärin, kokeile pienempää numeroa";
    } else {
        document.getElementById("arvaus").innerText = "Väärin, kokeile suurempaa numeroa";
    }
});
