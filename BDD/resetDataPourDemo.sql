USE alcoolecoute;

SET FOREIGN_KEY_CHECKS = 0; -- Désactive les contraintes de clé étrangère temporairement
TRUNCATE TABLE users;
TRUNCATE TABLE admin;
TRUNCATE TABLE enquete;
SET FOREIGN_KEY_CHECKS = 1; -- Réactive les contraintes de clé étrangère

INSERT INTO users(id, nom, prenom, email, password, created_at)
VALUES (1, 'Administra', 'Teur', 'admin@alcoolecoute.fr', '$2y$10$5f04edizS.14kAUSWvyaaumfQeGU1KucEJT7XvQCZ.FnTsTDgOQx.', CURRENT_DATE);

# administrateurs
INSERT INTO admin(id_users)
VALUES (1);
