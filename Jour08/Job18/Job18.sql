SELECT etage.nom, MAX(salles.capacite), salles.nom AS "Biggest Room" FROM salles INNER JOIN etage WHERE salles.id_etage = etage.id
