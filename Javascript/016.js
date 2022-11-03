// si el importe es entre 0 y 10 muy barato
// si es entre 10 y 20 barato
// si es entre 30 y 40 normal
// si es entre 40 y 50 me duele
// y si es mas de 50 me da un infarto

var importe= 100;
if(importe>0 && importe<=10){
    console.log("muy barato");
}else if (importe>=10 && importe<20){
    console.log("barato");
}else if (importe>=30 && importe<40){
    console.log("normal");
}else if (importe>=40 && importe<50){
    console.log("me duele");
}else if (importe>=50 && importe<60){
    console.log("me duele más")
}else if (importe>=60 && importe<70){
    console.log("me va a dar un infarto")
}else if(importe>=70){
    console.log("me voy a morir")
}


