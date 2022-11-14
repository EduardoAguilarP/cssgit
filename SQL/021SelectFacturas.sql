SELECT
    max(importe) as importeMaximo,
    Empresa, concepto
FROM
    facturas
GROUP BY
    Empresa, concepto
having
    importeMaximo > 1000
    and importeMaximo < 3000