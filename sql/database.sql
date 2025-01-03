CREATE DATABASE IF NOT EXISTS bookstore;

USE bookstore;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fistName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    address TEXT(300),
    phone INT(10),
    gender ENUM('male', 'female'),
    role VARCHAR(20) NOT NULL DEFAULT 'viewer',
    createdAt DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updatedAt DATETIME,
    resetToken VARCHAR(100) 
)