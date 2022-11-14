SELECT avg (importe) as media,
    Empresa
FROM facturas
GROUP BY Empresa
having media > 1000