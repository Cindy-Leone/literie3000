create database literie3000; 

use literie3000;

create table matelas (
    id INT PRIMARY KEY AUTO_INCREMENT,     
    nom VARCHAR (300) NOT NULL,
    marque VARCHAR (300) NOT NULL,
    picture text DEFAULT NULL,
    dimension VARCHAR(500) NOT null,
    prix DECIMAL (6,2) NOT NULL,
    reduction Text 
);

