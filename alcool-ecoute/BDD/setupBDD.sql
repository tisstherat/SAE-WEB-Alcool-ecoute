CREATE DATABASE IF NOT EXISTS alcoolecoute;
USE alcoolecoute;

DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS enquete;
DROP TABLE IF EXISTS users;


CREATE TABLE users
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    nom        VARCHAR(255)                        NOT NULL,
    prenom     VARCHAR(255)                        NOT NULL,
    email      VARCHAR(255)                        NOT NULL UNIQUE,
    password   VARCHAR(255)                        NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE admin
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    id_users INT NOT NULL UNIQUE,
    FOREIGN KEY (id_users) REFERENCES users (id) ON DELETE CASCADE
);

CREATE TABLE enquete
(
    id                INT AUTO_INCREMENT PRIMARY KEY,
    id_users          INT                                 NOT NULL UNIQUE,
    age               INT                                 NOT NULL CHECK (age > 18),
    region            VARCHAR(255)                        NOT NULL,
    emploi            VARCHAR(255)                        NOT NULL,
    lieu_de_vie       VARCHAR(255)                        NOT NULL,
    lieu_de_vie_CDAPH VARCHAR(255)                        NOT NULL,
    lieu_de_vie_choix BOOLEAN                             NOT NULL,
    besoin            VARCHAR(255)                        NOT NULL,
    besoinDetail      TEXT                                NOT NULL,
    submit_at         TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users (id) ON DELETE CASCADE
);
