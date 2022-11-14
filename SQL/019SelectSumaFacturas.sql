SELECT sum (importe) as total,
    Empresa
FROM facturas
GROUP BY Empresa
having total > 2000