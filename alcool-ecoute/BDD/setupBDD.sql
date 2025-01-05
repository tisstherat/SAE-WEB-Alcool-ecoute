CREATE DATABASE alcoolecoute;
USE alcoolecoute;


CREATE TABLE users
(
    id        INT AUTO_INCREMENT PRIMARY KEY,
    nom            VARCHAR(255)                        ,
    prenom         VARCHAR(255)                        ,
    email          VARCHAR(255)                        NOT NULL UNIQUE,
    password            VARCHAR(255)                        NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);