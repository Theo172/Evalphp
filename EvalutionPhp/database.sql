CREATE DATABASE wf3_php_intermediaire_theo CHARACTER SET utf8;
USE wf3_php_intermediaire_theo;

CREATE TABLE advert (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (50) NOT NULL,
    description VARCHAR (255)
    code_postal FLOAT NOT NULL,
    city VARCHAR (25) NOT  NULL,
    type VARCHAR (50) NOT NULL,
    price FLOAT NOT NULL,
    reservation_message VARCHAR (512),
  
);




