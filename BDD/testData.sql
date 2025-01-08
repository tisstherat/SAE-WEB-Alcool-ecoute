USE grp204_4;

DELETE FROM admin WHERE 1;
DELETE FROM enquete WHERE 1;
DELETE FROM users WHERE 1;

ALTER TABLE admin AUTO_INCREMENT = 1;
ALTER TABLE enquete AUTO_INCREMENT = 1;
ALTER TABLE users AUTO_INCREMENT = 1;

# utilisateurs
INSERT INTO users(id, nom, prenom, email, password, created_at)
VALUES (1, 'Administra', 'Teur', 'admin@alcoolecoute.fr', '1234', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Jean', 'Jean', 'jeanjean@email.com', '5678', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Alphonse', 'Premier', 'alph_1r@email.com', '9101112', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Eric', 'Iky', 'rikiki@email.com', '13141516', CURRENT_DATE);
INSERT INTO users(nom, prenom, email, password, created_at)
VALUES ('Côme', 'Itpuch', 'commit-push@email.com', '17181920', CURRENT_DATE);

# administrateurs
INSERT INTO admin(id_users)
VALUES (1);

# réponses à l enquête
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (2, 20, 'Ile De France', 'Chomage', 'Appartement','X',
        false, 'placeholder', 'placeholder', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (3, 80, 'Region du caca', 'Chomage', 'Appartement','X',
        false, 'placeholder', 'placeholder', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (4, 36, 'Region du pipi', 'Chomage', 'Appartement','X',
        false, 'placeholder', 'placeholder', CURRENT_DATE);
INSERT INTO enquete (id_users, age, region, emploi, lieu_de_vie, lieu_de_vie_CDAPH, lieu_de_vie_choix, besoin, besoinDetail, submit_at)
VALUES (5, 51, 'Ile De France', 'Chomage', 'Appartement','X',
        false, 'placeholder', 'placeholder', CURRENT_DATE);

# affichage des données
SELECT * FROM users;
SELECT * FROM admin;
SELECT * FROM enquete;