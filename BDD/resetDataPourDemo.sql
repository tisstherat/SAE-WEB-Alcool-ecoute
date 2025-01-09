USE alcoolecoute;

SET FOREIGN_KEY_CHECKS = 0; -- Désactive les contraintes de clé étrangère temporairement
TRUNCATE TABLE users;
TRUNCATE TABLE admin;
TRUNCATE TABLE enquete;
SET FOREIGN_KEY_CHECKS = 1; -- Réactive les contraintes de clé étrangère