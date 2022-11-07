var compra=["chocolate","galletas","galletas","donuts","galletas"];
var contadorgalletas=0;
for(var i=0;i<compra.length;i++){
    if(compra[i]=="galletas"){
        contadorgalletas=contadorgalletas+1;
    }
}
console.log(contadorgalletas);