/*insert into personita values ("Gema", 10);*/
/*select * FROM personita*/
select
    *
from
    personita
    LEFT JOIN regalo on personita.nombre = regalo.Personita_Nombre