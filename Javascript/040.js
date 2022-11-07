var lista=[3,7,9];

var edadMayor=0;

for (var i=0;i<lista.length;i++){
    //edad guardada es menor que la de la lista
    if(edadMayor<lista[i]){
        //si es asi guardame el nuevo valor en la variable edadMayor
        edadMayor=lista[i];
    }
}
console.log(edadMayor);