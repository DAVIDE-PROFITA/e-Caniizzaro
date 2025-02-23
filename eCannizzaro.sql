DROP DATABASE IF EXISTS eCannizzaro;
CREATE DATABASE eCannizzaro;
USE eCannizzaro;

CREATE TABLE utenti (
    id INT PRIMARY KEY auto_increment,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE prodotti (
    id INT PRIMARY KEY auto_increment, 
    marca VARCHAR(30) NOT NULL,
    modello VARCHAR(30) NOT NULL,
    prezzo double NOT NULL
);

CREATE TABLE acquisti (
    id INT PRIMARY KEY auto_increment,
    idUtente int NOT NULL,
    idProdotto int NOT NULL,
    data date NOT NULL,
    FOREIGN KEY (idUtente) REFERENCES utenti(id),
    FOREIGN KEY (idProdotto) REFERENCES prodotti(id)
);


INSERT INTO utenti (nome, cognome, email, password) VALUES
('Mario', 'Rossi', 'mario.rossi@example.com', 'password123'),
('Luigi', 'Verdi', 'luigi.verdi@example.com', 'password456'),
('Anna', 'Bianchi', 'anna.bianchi@example.com', 'password789'),
('Giulia', 'Neri', 'giulia.neri@example.com', 'password321'),
('Marco', 'Gialli', 'marco.gialli@example.com', 'password654');

INSERT INTO prodotti (marca,modello,prezzo) VALUES
('Apple', 'iPhone 12', 1000),
('Samsung', 'Galaxy S21', 900),
('Huawei', 'P40', 800),
('Xiaomi', 'Mi 11', 700),
('OnePlus', '8T', 600);


INSERT INTO acquisti (idUtente, idProdotto, data) VALUES
(1, 1, '2021-01-01'),
(2, 2, '2021-01-02'),
(3, 3, '2021-01-03'),
(4, 4, '2021-01-04'),
(5, 5, '2021-01-05');
