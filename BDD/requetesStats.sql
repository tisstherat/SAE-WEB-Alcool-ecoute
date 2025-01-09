#Fichier inutile pour le fonctionnement du site

#TOTAL USERS
SELECT COUNT(*) AS total FROM enquete;

#QUI A REPONDU
SELECT MIN(age) AS plusJeune, MAX(age) AS plusAge, ROUND(AVG(age)) AS moyenne FROM enquete;
#QUI A REPONDU SUITE
SELECT region, COUNT(*) AS nombre FROM enquete GROUP BY region ORDER BY 1;

#LIEU DE VIE
SELECT lieu_de_vie, COUNT(*) AS nombre FROM enquete GROUP BY lieu_de_vie ORDER BY 1;

#LDV CDAPH
SELECT lieu_de_vie_CDAPH, COUNT(*) AS nombre FROM enquete GROUP BY lieu_de_vie_CDAPH ORDER BY 1;
SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = 'Aucune';
SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = 'Oui';
SELECT COUNT(*) AS nombre FROM enquete where lieu_de_vie_CDAPH = 'Non';

#LDV CHOIX
SELECT lieu_de_vie_choix, COUNT(*) AS nombre FROM enquete GROUP BY lieu_de_vie_choix ORDER BY 1;
SELECT COUNT(*) as total from enquete;
SELECT COUNT(*) AS nombreVivantCDAPH FROM enquete GROUP BY lieu_de_vie_choix ORDER BY 1;

#ACTIVITE PRO SOCIALE
SELECT emploi, COUNT(*) AS nombre FROM enquete GROUP BY emploi ORDER BY 1;

#BESOIN SOUTIEN
SELECT besoin, COUNT(*) AS nombre FROM enquete GROUP BY besoin ORDER BY 1;
SELECT COUNT(*) AS nombre FROM enquete where besoin = 'Aide-24h';