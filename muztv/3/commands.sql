CREATE DATABASE IF NOT EXIST `library`;

CREATE TABLE IF NOT EXISTS library.books (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`title` VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS library.authors (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS library.books_authors (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`book_id` INT UNSIGNED NOT NULL,
	`author_id` INT UNSIGNED NOT NULL,
);

SELECT library.books.*, COUNT(*) AS c
	FROM books_authors, books, authors
	WHERE book_id = books.id AND author_id = authors.id
	GROUP BY books.id 
	HAVING c = 3

