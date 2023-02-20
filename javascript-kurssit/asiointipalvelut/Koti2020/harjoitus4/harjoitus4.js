let ruuat = [
    { 
    paiva: "Maanantai", 
    ruoka: "Kanakeitto",
    kuva: "https://www.kotikokki.net/media/cache/large/recipeimage/large/52d6e258d074a9ec0e0d056f/original.jpg"
    },
    {
    paiva: "Tiistai",
    ruoka: "Lihapullat",
    kuva: "https://img.ilcdn.fi/Di90CKqgW6CFhSh5i-gJz97bGfA=/full-fit-in/612x0/img-s3.ilcdn.fi/f049ce204885deae36413ab83d3c5e6555fc6d08ab5c28e3d1ad4ac0120d96d2.jpg"
    },
    {
    paiva: "Keskiviikko",
    ruoka: "Pihvi",
    kuva: "https://snellman.fi/app/uploads/sites/2/naudan-sisafileepihvi-uunikasvikset-ja-sienikastike-2.jpg"
    },
    {
    paiva: "Torstai",
    ruoka: "Mustamakkara",
    kuva: "https://kotiliesi.fi/awpo/img/s3/2020/04/24154241/mustamakkara.jpg"
    },
    {
    paiva: "Perjantai",
    ruoka: "Kanafilee",
    kuva: "https://4.bp.blogspot.com/-Rm4Zd4V0Zvk/W3PRtwIujCI/AAAAAAAAMjQ/vy2LZFBDjxERdk4xFwZBu4mqwB5paOhRgCLcBGAs/s1600/tuplamarinoitukana2.jpg"
    }
]

let ruokalista = document.getElementById("ruokalista");

function newText(text, type)
{
    let textElement = document.createElement(type);
    textElement = text;
    return textElement;
}

function newRuoka(ruoka) {


    let ruokaDiv = document.createElement("div");
    ruokaDiv.className = "ruoka";

    ruokaDiv.append(day);

    let ruokaInfo = newRuokaDiv(ruoka);
    ruokaDiv.append(ruokaInfo);

    ruokaInfo.style.display = "none";
    day.addEventListener("click", () => toggleOn(ruokaInfo));

    return ruokaDiv;
}

ruuat.forEach(ruoka => {
    let ruokaElement = newRuokaDiv(ruoka);
    ruokalista.appendChild(ruokaElement);
});

function newRuokaDiv(ruoka) {
    let ruokaDiv = document.createElement("div");
    ruokaDiv.className = "ruoka";

    let day = newText(ruoka.paiva,  "h1");
    let ruokaInfo = newText("\nPäivän ruoka: "  + ruoka.ruoka);
    let kuva = document.createElement("img");

    kuva.src = ruoka.kuva;

    ruokaDiv.append(day, ruokaInfo, kuva);
    

    return ruokaDiv;
}


function toggleOn(item) {
    if(item.style.display === "none"){
        item.style.display = "block";
    } else {
        item.style.display = "none";
    }
}