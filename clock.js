// godzina
function pobranieczasu (){
    var czas = new Date();
    var godzina = czas.getHours();
    if(godzina<10){
        godzina = "0" + godzina;
    }
    var minuty = czas.getMinutes();
    if(minuty<10){
        minuty = "0" + minuty;
    }
    var sekundy = czas.getSeconds();
    if(sekundy<10){
        sekundy = "0" + sekundy;
    }
    document.getElementById("godzina").innerHTML = godzina + ":" + minuty + ":" + sekundy;
    intervalGodzina;
}
pobranieczasu();
var intervalGodzina = setInterval(pobranieczasu, 1000);

// data
function pobraniedaty (){
    var dataCzas = new Date();
    var dzien = dataCzas.getDate();
    if(dzien<10){
        dzien = "0" + dzien;
    }
    var miesiac = (dataCzas.getMonth()+ 1);
    if(miesiac<10){
        miesiac = "0" + miesiac;
    }
    var rok = dataCzas.getFullYear();
    document.getElementById("data").innerHTML = dzien + "." + miesiac + "." + rok;
    intervalData;
}
pobraniedaty();
var intervalData = setInterval(pobraniedaty, 10000);