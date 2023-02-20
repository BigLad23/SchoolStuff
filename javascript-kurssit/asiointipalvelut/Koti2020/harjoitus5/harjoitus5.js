$(document).ready(function(){

    let otsikot = ["<h1> Hieno otsikko </h1>", "<h1> Hieno otsikko 2 </h1>", "<h1> Hieno otsikko 3 </h1>", "<h1> Hieno otsikko 4 </h1>", "<h1> Hieno otsikko 5 </h1>"];
    $(".harjoitus5").append(otsikot);

    $("h1").click(function(){
        let color = $(this).css("color");
        console.log(color);
        if (color == "rgb(0, 0, 0)") {
            $(this).css("color", "red");
        } else if (color == "rgb(255, 0, 0)") {
            $(this).css("color", "blue");
        } else {
            $(this).hide();
        }
    })
});

$(document).ready(function(){

    let kuva1 = ["<h1> Kuva 1 </h1>"];
    let kuva2 = ["<h1> Kuva 2 </h1>"];
    let kuva3 = ["<h1> Kuva 3 </h1>"];
    $(".hienojakuvia1").append(kuva1);
    $(".hienojakuvia2").append(kuva2);
    $(".hienojakuvia3").append(kuva3);

    $(".hienojakuvia1").mouseover(function(){
        $(".hienojakuvia1").html("<img src='ronaldo-chug.gif' alt='kuva' width='300' height='300'>");
    })

    $(".hienojakuvia2").mouseover(function(){
        $(".hienojakuvia2").html("<img src='linux.gif' alt='kuva'>");
    })

    $(".hienojakuvia3").mouseover(function(){
        $(".hienojakuvia3").html("<img src='garfield.jpg' alt='kuva' width='300' height='300'>");
    })

    $(".hienojakuvia1").mouseout(function(){
        $(".hienojakuvia1").html(kuva1);
    })

    $(".hienojakuvia2").mouseout(function(){
        $(".hienojakuvia2").html(kuva2);
    })

    $(".hienojakuvia3").mouseout(function(){
        $(".hienojakuvia3").html(kuva3);
    })
    
});

$(document).ready(function(){
    $("button").click(function(){
        document.createElement("p");
        $("p").text($("input:text").val());
    });
  });


