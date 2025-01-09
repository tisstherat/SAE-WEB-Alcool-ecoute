USE alcoolecoute;

SET FOREIGN_KEY_CHECKS = 0; -- Désactive les contraintes de clé étrangère temporairement
TRUNCATE TABLE users;
TRUNCATE TABLE admin;
TRUNCATE TABLE enquete;
SET FOREIGN_KEY_CHECKS = 1; -- Réactive les contraintes de clé étrangère

# utilisateurs admin mdp = admin
INSERT INTO users(id, nom, prenom, email, password, created_at)
VALUES (1, 'Administra', 'Teur', 'admin@alcoolecoute.fr', '$2y$10$5f04edizS.14kAUSWvyaaumfQeGU1KucEJT7XvQCZ.FnTsTDgOQx.', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Jean', 'Jean', 'user@email.com', '$2y$10$5f04edizS.14kAUSWvyaaumfQeGU1KucEJT7XvQCZ.FnTsTDgOQx.', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Alphonse', 'Premier', 'alph_1r@email.com', '9101112', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Eric', 'Iky', 'rikiki@email.com', '13141516', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Côme', 'Itpuch', 'commit-push@email.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('A', 'A', 'a@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('B', 'B', 'b@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('C', 'C', 'c@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('D', 'D', 'd@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('E', 'E', 'e@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('F', 'F', 'f@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('G', 'G', 'g@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('H', 'H', 'h@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('I', 'I', 'i@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('J', 'J', 'j@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('K', 'K', 'k@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('L', 'L', 'l@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('M', 'M', 'm@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('N', 'N', 'n@m.com', '17181920', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('O', 'O', 'o@m.com', '17181920', CURRENT_DATE);

# administrateurs
INSERT INTO admin(id_users)
VALUES (1);

# réponses à l enquête
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (2, 20, 'Île-de-France', 'Formation professionnelle', 'Dans la Famille en permanence','Aucune',
        false, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (3, 30, 'Île-de-France', 'Formation professionnelle', 'Dans la Famille en permanence','Oui',
        true, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (4, 36, 'Île-de-France', 'Formation professionnelle', 'Dans la Famille en permanence','Aucune',
        true, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (5, 44, 'Île-de-France', 'Formation professionnelle', 'Dans la Famille en permanence','Oui',
        false, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (6, 20, 'Corse', 'Formation professionnelle', 'Dans un logement indépendant','Non',
        false, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (7, 20, 'Corse', 'Formation professionnelle', 'Dans la famille avec une solution accueil','Aucune',
        false, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (8, 20, 'Corse', 'Activité professionnelle en milieu ordinaire', 'Dans la famille avec une solution accueil','Non',
        true, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (9, 21, 'Bretagne', 'Activité professionnelle en milieu ordinaire', 'Dans la famille principalement','Non',
        false, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (10, 23, 'Bretagne', 'Activité professionnelle en milieu ordinaire', 'Dans une FAM','Oui',
        true, 'Autonome', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (11, 21, 'Bretagne', 'Activité professionnelle en milieu ordinaire', 'Dans une MAS','Non',
        true, 'Stimulations-ponctuelles', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (12, 28, 'Grand-Est', 'Activité professionnelle en milieu ordinaire', 'Dans un logement indépendant','Aucune',
        true, 'Stimulations-ponctuelles', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (13, 29, 'Grand-Est', 'Scolarité en milieu ordinaire', 'Dans un habitat inclusif','Oui',
        false, 'Stimulations-ponctuelles', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (14, 24, 'Je vis à l''étranger', 'Sans aucune activité scolaire ou professionnelle', 'Dans un habitat inclusif','Non',
        false, 'Soutien-autonomie', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (15, 38, 'Normandie', 'Sans aucune activité scolaire ou professionnelle', 'Dans un habitat inclusif','Aucune',
        true, 'Soutien-autonomie', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (16, 40, 'Normandie', 'Sans aucune activité scolaire ou professionnelle', 'Dans un foyer','Oui',
        false, 'Aide-24h', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (17, 38, 'Normandie', 'Sans aucune activité scolaire ou professionnelle', 'En IME avec internat','Oui',
        true, 'Aide-24h', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (18, 40, 'Normandie', 'Études supérieures', 'Hospitalisation en psychiatrie','Oui',
        true, 'Aide-24h', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (19, 40, 'Guyane', 'Études supérieures', 'Autre','Aucune',
        true, 'Aide-24h', 'aucun', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (20, 32, 'Pays de la Loire', 'Autre', 'Autre','Oui',
        true, 'Aide-24h', 'aucun', CURRENT_DATE);

# affichage des données
SELECT * FROM users;
SELECT * FROM admin;
SELECT * FROM enquete;