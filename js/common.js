$(function(){
    var lastScroll = 0;
    $(window).scroll(function(){
        var st = $(this).scrollTop();
        if(st > 100)
            headerLighten();

        if(st < lastScroll){
            //console.log('UP' + st);
            headerFocus();
        }
        lastScroll = st;
    });
});


function headerFocus(){
	document.getElementById('nameTag').style.top='10px';
}

function headerLighten(){
	document.getElementById('nameTag').style.top='-100px';
}

function navFunc(){
    document.getElementById('navi').style.top='5%';
    document.getElementById('navi').style.width='300px';
    document.getElementById('navi').style.height='575px';
    document.getElementById('navi').style.borderRadius='0px';
    document.getElementById('navi').style.backgroundImage='none';
    document.getElementById('menuNav').style.display='block';
}

function navFuncOut(){
    document.getElementById('navi').style.top='45%';
    document.getElementById('navi').style.width='50px';
    document.getElementById('navi').style.height='50px';
    document.getElementById('navi').style.borderRadius='50%';
    document.getElementById('navi').style.backgroundImage='url("images/logo3 copy 2.png")';
    document.getElementById('menuNav').style.display='none';
}



function navFunc2(){    
    document.getElementById('navi2').style.width='95%';
    document.getElementById('navi2').style.height='auto';
    document.getElementById('navi2').style.borderRadius='0px';
    document.getElementById('navi2').style.backgroundImage='none';
    document.getElementById('menuNav2').style.display='block';
}

function navFuncOut2(){
    document.getElementById('navi2').style.top='5%';
    document.getElementById('navi2').style.width='40px';
    document.getElementById('navi2').style.height='40px';
    document.getElementById('navi2').style.borderRadius='50%';
    document.getElementById('navi2').style.backgroundImage='url("Images/logo3 copy 2.png")';
    document.getElementById('menuNav2').style.display='none';
}



document.getElementById("navi").onmouseover = navFunc;
document.getElementById("navi").onmouseout = navFuncOut;

document.getElementById("navi2").onmouseover = navFunc2;
document.getElementById("navi2").onmouseout = navFuncOut2;


window.onload = headerFocus;
//window.onscroll = scrollFunc;
