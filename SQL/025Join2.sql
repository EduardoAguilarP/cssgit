/*select * from personita*/
/*SELECT * from regalo*/
/*join*/
/*select * from personita, regalo*/
/*SELECT * from personita INNER JOIN regalo on personita.nombre=regalo.Personita_Nombre*/
SELECT
    nombre as NombreNiño,
    descripción as NombreRegalo
from
    personita
    INNER JOIN regalo on personita.nombre = regalo.Personita_Nombre