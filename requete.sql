create database literie3000; 

use literie3000;

create table matelas (
    id INT PRIMARY KEY AUTO_INCREMENT,     
    nom VARCHAR (300),
    marque VARCHAR (300) ,
    picture text ,
    dimension VARCHAR(500) ,
    prix DECIMAL (6,2) ,
    reduction INT 
);


INSERT INTO matelas (nom, marque, picture, dimension, prix, reduction)
VALUES 
("Matelas Tamoul", "EPEDA", "https://cdn.laredoute.com/products/362by362/2/6/1/261a43665c647423eaa0c04e89234ae0.jpg", "90 x 190", 759, 20),
("Matelas Waldorf", "DREAMWAY", "https://cdn.laredoute.com/products/362by362/b/d/0/bd0b29a9aa8a4350c67327d7e22809e7.jpg", "90 x 190", 709, 10);

