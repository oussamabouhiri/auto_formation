-- CREATE DATABASE if NOT EXISTS auto_formation; 

-- USE auto_formation;

-- CREATE TABLE library_books(
--     id INT AUTO_INCREMENT PRIMARY KEY ,
--     title VARCHAR(150),
--     author VARCHAR(100),
--     published_year YEAR,
--     satus ENUM('Available','Borrowed','Lost') NOT NULL DEFAULT 'Available',
--     price DECIMAL(4,2)
-- );

-- DESCRIBE library_books;

-- if you want to remove the table use this prompt DROP TABLE library_books; 
-- And if you want to remove the database use this one DROP DATABASE IF EXISTS auto_formation;


-- INSERT INTO library_books (title, author, published_year, status, price)
-- VALUES
-- ('1984', 'George Orwell', 1950, 'Available', 12.99),
-- ('Animal Farm', 'George Orwell', 1945, 'Borrowed', 8.50),
-- ('Clean Code', 'Robert Martin', 2008, 'Available', 229.99),
-- ('The Pragmatic Programmer', 'Andrew Hunt', 1999, 'Borrowed', 329.95),
-- ('Design Patterns', 'Erich Gamma', 1994, 'Lost', 149.90),
-- ('Refactoring', 'Martin Fowler', 2023, 'Available', 45.00),
-- ('Donated Book 1', 'Unknown Author', 2005, 'Available', NULL),
-- ('Introduction to Algorithms', 'Thomas H. Cormen', 2009, 'Available', 199.95);



-- SELECT tilte, author, price FROM library_books ;

-- --For filter the price we can use this queries
-- SELECT * FROM library_books WHERE price >= 100 AND price <= 300;
-- SELECT * FROM library_books WHERE price BETWEEN 100 AND 300;

-- --To find  all books published after the year 2020
-- SELECT * 
-- FROM library_books 
-- WHERE published_year > 2020;

-- -- To find all books that have the word "PHP" anywhere in their title.
-- SELECT title 
-- FROM library_books 
-- WHERE title LIKE '%PHP%';

-- --? %PHP Try to find the title that have php from the first of the title 
-- --? PHP% Try to find the title that have php from the last of the title
-- --? %PHP% Try to find the title that have php from anywhere of the title 
-- --? BTW in this database 

-- -- To list all books that are NOT currently 'Lost' and sorted by the most recent published_year use this query.
-- SELECT *
-- FROM library_books
-- WHERE status != 'Lost'
-- ORDER BY published_year DESC;
-- --? DESC it's a short case of DESCENDING it sort thing from big to small;
-- --? ASC it's a short case of ASCENDING it sort thing from small to big;

-- -- To list all unique (DISTINCT) authors in the library use this query.
-- SELECT DISTINCT author
-- FROM library_books;

-- --? This one is not mentioned in the challenge, but I was wondering how we can see all books per author, the key is to GROUP BY author.
-- SELECT *
-- FROM library_books
-- GROUP BY author;

-- -- To show the book titles in UPPERCASE and the price rounded to the nearest whole number use this query.
-- SELECT UPPER(title), ROUND(price)
-- FROM library_books;




-- --To create table use this query.
-- Create table categories(
-- 	id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(100) NOT NULL
-- );

-- -- TO ADD AND ASSIGN THE category_id with categories(id) use this query;
-- ALTER TABLE library_books 
-- ADD COLUMN category_id INT AFTER id,
-- FOREIGN KEY (category_id) REFERENCES categories(id);

-- -- TO JOIND the library_book with categoies side by side use this query.
-- SELECT 
--     library_books.title AS Book_Title, 
--     categories.name AS Category_Name
-- FROM library_books
-- INNER JOIN categories 
-- ON library_books.category_id = categories.id;



--! Challenge 5 HERE

--The sum of all book prices.
SELECT SUM(price) As totale_price 
from library_books;

--The total number of books currently marked as 'Available'.
SELECT SUM(price) As available_totale_price 
from library_books
where status = 'Available'

--The most expensive and the cheapest book in one query.
SELECT title AS book_name, price
FROM library_books
WHERE price = (SELECT MAX(price) FROM library_books)
   OR price = (SELECT MIN(price) FROM library_books)
ORDER BY price DESC;

 --? this one work even if there's null values on the table it combine between the highest and the lowest even if they null; 

(SELECT title AS book_name, price
 FROM library_books
 ORDER BY price DESC
 LIMIT 1)
UNION ALL
(SELECT title AS book_name, price
 FROM library_books
 ORDER BY price ASC
 LIMIT 1);

--The average price of all books in your library.
select AVG(price) as average_all 
from library_books;