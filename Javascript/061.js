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

console.log("total: "+(factura1.precioUnitario*factura1.cantidades+factura2.precioUnitario*factura2.cantidades+factura3.precioUnitario*factura3.cantidades))