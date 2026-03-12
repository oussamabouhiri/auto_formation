CREATE DATABASE if NOT EXISTS auto_formation; 

USE auto_formation;

CREATE TABLE library_books(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150),
    author VARCHAR(100),
    published_year YEAR,
    satus ENUM('Available','Borrowed','Lost') NOT NULL DEFAULT 'Available',
    price DECIMAL(4,2)
);

DESCRIBE library_books;

-- if you want to remove the table use this prompt DROP TABLE library_books; 
-- And if you want to remove the database use this one DROP DATABASE IF EXISTS auto_formation;