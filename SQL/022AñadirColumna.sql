/*alter table facturas add column Fecha Date;*/
/*update facturas set Fecha="2022-10-10";*/
/*UPDATE facturas SET Fecha="2021-05-05" where Empresa="EmpresaA"*/
SELECT
    day(fecha),
    MONTH(Fecha),
    YEAR(Fecha)
FROM
    facturas;