$(document).ready(function() {
    myDate = new Date();
    xmas = Date.parse("Dec 24, " + myDate.getFullYear());
    today = Date.parse(myDate);

    daysTC = Math.round((xmas - today)/(1000*60*60*24));


    if(daysTC == 0) 
     $('#days').text("Tää on aika moinen bruh momentti");
console.log(daysTC)
     if(daysTC < 0) 
     $('£days').text("bruh joulu oli jo" + -1*(daysTC) + " Päivää sitten");

     if(daysTC > 0)
     $('#days').text(daysTC + " Päivää jouluun")

     snowDrop(150,randomInt(1035,1280));
     snow(150,150);
})

function snow(num, speed)
{
    if(num > 0) {
    setTimeout(function() {
        $('#drop_' + randomInt(1 ,250)).addClass('animate');
        num--;
        snow(num,speed);
    }, speed );
}
}


function snowDrop(num, position)
{
    if(num > 0) {
        var drop ='<div class="drop snow" id= "drop"_' + num + '"></div>"';
        $('body').append(drop);
        $('#drop' + num).css('left',position);
        num--;
        snowDrop(num, randomInt(60,1280));
        }
}






function randomInt(min, max)
{
    return Math.floor(Math.random() * (max - min + 1) + min);
}