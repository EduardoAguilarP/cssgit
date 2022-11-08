var lista=[2,4,5,8,5];
var lista2=[3,4,5,9,1];
var mayor=0

for (var i=0;i<lista.length;i++){
    if(mayor<lista[i]){
        mayor=lista[i];
    }   
}
for (var i=0;i<lista2.length;i++){
    if(mayor<lista2[i]){
        mayor=lista2[i];
    }  
}
console.log(mayor);