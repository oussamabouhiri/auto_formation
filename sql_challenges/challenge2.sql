-- CREATE DATABASE if NOT EXISTS auto_formation; 

-- USE auto_formation;

-- CREATE TABLE library_books(
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     title VARCHAR(150),
--     author VARCHAR(100),
--     published_year YEAR,
--     satus ENUM('Available','Borrowed','Lost') NOT NULL DEFAULT 'Available',
--     price DECIMAL(4,2)
-- );

-- DESCRIBE library_books;

-- if you want to remove the table use this prompt DROP TABLE library_books; 
-- And if you want to remove the database use this one DROP DATABASE IF EXISTS auto_formation;

--! Challenge 2 HERE

INSERT INTO library_books (title, author, published_year, status, price)
VALUES
('1984', 'George Orwell', 1950, 'Available', 12.99),
('Animal Farm', 'George Orwell', 1945, 'Borrowed', 8.50),
('Clean Code', 'Robert Martin', 2008, 'Available', 29.99),
('The Pragmatic Programmer', 'Andrew Hunt', 1999, 'Borrowed', 39.95),
('Design Patterns', 'Erich Gamma', 1994, 'Lost', 49.90),
('Refactoring', 'Martin Fowler', 2018, 'Available', 45.00),
('Donated Book 1', 'Unknown Author', 2005, 'Available', NULL),
('Introduction to Algorithms', 'Thomas H. Cormen', 2009, 'Available', 89.95);