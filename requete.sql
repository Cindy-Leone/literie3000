create database literie3000; 

use literie3000;

create table matelas (
    id INT PRIMARY KEY AUTO_INCREMENT,     
    nom VARCHAR (300) NOT NULL,
    marque VARCHAR (300) NOT NULL,
    picture text DEFAULT NULL,
    dimension VARCHAR(500) NOT null,
    prix DECIMAL (6,2) NOT NULL,
    reduction INT 
);


INSERT INTO matelas (nom, marque, picture, dimension, prix, reduction)
VALUES 
("Matelas Tamoul", "EPEDA", "https://cdn.laredoute.com/products/362by362/2/6/1/261a43665c647423eaa0c04e89234ae0.jpg", "90 x 190", 759,00, 20);

