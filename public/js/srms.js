$(function(){
    $(".btn0").click(function(){
        $(".i0").toggleClass("fas fa-angle-double-up right");
        $(".table0").slideToggle(500);
    });
});

$(function(){
    $(".btn1").click(function(){
        $(".i1").toggleClass("fas fa-angle-double-up right");
        $(".table1").slideToggle(500);
    });
});

$(function(){
    $(".btn2").click(function(){
        $(".i2").toggleClass("fas fa-angle-double-up right");
        $(".table2").slideToggle(500);
    });
});

$(function(){
    $(".btn3").click(function(){
        $(".i3").toggleClass("fas fa-angle-double-up right");
        $(".table3").slideToggle(500);
    });
});

$(function(){
    $(".btn4").click(function(){
        $(".i4").toggleClass("fas fa-angle-double-up right");
        $(".table4").slideToggle(500);
    });
});

$(function(){
    $(".btn5").click(function(){
        $(".i5").toggleClass("fas fa-angle-double-up right");
        $(".table5").slideToggle(500);
    });
});

$(function(){
    $(".btn6").click(function(){
        $(".i6").toggleClass("fas fa-angle-double-up right");
        $(".table6").slideToggle(500);
    });
});

$(function(){
    $(".btn7").click(function(){
        $(".i7").toggleClass("fas fa-angle-double-up right");
        $(".table7").slideToggle(500);
    });
});

$(function(){
    $(".btn8").click(function(){
        $(".i8").toggleClass("fas fa-angle-double-up right");
        $(".table8").slideToggle(500);
    });
});

$(function(){
    $(".btn9").click(function(){
        $(".i9").toggleClass("fas fa-angle-double-up right");
        $(".table9").slideToggle(500);
    });
});


$(function(){
    $(".btn10").click(function(){
        $(".i10").toggleClass("fas fa-angle-double-up right");
        $(".table10").slideToggle(500);
    });
});

$(function(){
    $(".btn11").click(function(){
        $(".i11").toggleClass("fas fa-angle-double-up right");
        $(".table11").slideToggle(500);
    });
});

function openWave(evt, tabName){
    var i, content, tablink;
    
    content = document.getElementsByClassName("content1");
    
    for (i = 0; i < content.length; i++){
            content[i].style.display = "none";
            }
            
    tablink = document.getElementsByClassName("tablink");
    
    for (i = 0; i < tablink.length; i++){
            tablink[i].className = tablink[i].className.replace(" current", "");
            }
            
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " current";
}