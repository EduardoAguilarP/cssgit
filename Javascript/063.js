var factura1={
    cantidades:2,
    concepto:"tablet",
    precioUnitario:150
}

var factura2={
    cantidades:3,
    concepto:"portatil",
    precioUnitario:650
}

var factura3={
    cantidades:1,
    concepto:"raton",
    precioUnitario:50
}

var misfacturas=[factura1,factura2,factura3];

var sumahorrible=0;
for(var i=0;i<misfacturas.length;i++){
    sumahorrible=sumahorrible+misfacturas[i].precioUnitario*misfacturas[i].cantidades;
}
console.log(sumahorrible);