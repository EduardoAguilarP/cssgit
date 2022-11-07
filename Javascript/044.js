var lista=[3,7,9];
var aprobados=0;
var desaprobados=0;
for(var i=0;i<lista.length;i=i+1){
    //console.log("posicion"+i)
    if(lista[i]>=5){
        aprobados=aprobados+1;       
    } else {
        desaprobados=desaprobados+1;
    }
}
console.log(aprobados);
console.log(desaprobados);