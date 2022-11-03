//si tengo un niño con menos de 12 años no tiene paga
//si el niño tiene 12 o más años tiene paga de 20 euros
//si la nota del examen fue aprobado tiene paga de 5 euros mas
//si saco más de un 8, 10 euros más
// y si saco un 10, 20 euros más

var edad=12;
var nota=7;

if (edad<12){
    console.log("no tiene paga");
}else{
    console.log("tiene paga de 20€");
}
if (nota>=5 && nota<8){
    console.log("tiene paga de 5€ más");
} else if (nota>=8 && nota<10){
    console.log("tiene paga de 10€ más");
} else if (nota=10){
    console.log("tiene paga de 20€ más");
    
}