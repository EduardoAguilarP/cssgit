var lista=[2,4,6,10,8,9];
var mayor=0;

for(var i=0;i<lista.length;i++){
    //console.log(lista[i]);
    if(mayor<lista[i]){
        mayor=lista[i];
    }    
}
console.log(mayor);