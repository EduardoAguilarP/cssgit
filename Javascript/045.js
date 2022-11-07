var compra=["chocolate","galletas","leche","donuts"];
//que nos localice la leche y nos diga su posicion en el array
for (var i=0;i<compra.length;i++){
    if(compra[i]=="leche"){
        console.log("encontrado");
        console.log(i);
    }
}