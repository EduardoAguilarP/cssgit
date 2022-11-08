var lista=[2,4,6,10,8,9];
var menor=lista[0];

for(var i=0;i<lista.length;i++){
    //console.log(lista[i]);
    if(menor>lista[i]){
        menor=lista[i];
    }    
}
console.log(menor);