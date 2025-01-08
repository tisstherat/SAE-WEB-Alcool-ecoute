SELECT age, COUNT(*) AS 'nombre' FROM enquete GROUP BY age ORDER BY 1;
SELECT emploi, COUNT(*) AS 'nombre' FROM enquete GROUP BY emploi ORDER BY 2 DESC;
SELECT lieu_de_vie, COUNT(*) AS 'nombre' FROM enquete GROUP BY lieu_de_vie ORDER BY 2 DESC;