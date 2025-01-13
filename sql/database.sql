CREATE DATABASE IF NOT EXISTS bookstore;

USE bookstore;



CREATE TABLE IF NOT EXISTS product_categories (
    category_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(30) NOT NULL,
    slug VARCHAR(150),
    created_by VARCHAR(50) NOT NULL,
    created_at DATETIME,
    updated_by VARCHAR(50),
    updated_at DATETIME
);

CREATE TABLE products (
    product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_image VARCHAR(150) NOT NULL,
    price INT(20) NOT NULL,
    discount_price INT(20) DEFAULT 0,
    product_des TEXT NOT NULL,
    product_detail TEXT NOT NULL,
    product_language ENUM('English', 'Vietnamese', 'Chinese', 'Korean', 'Japanese'),
    publisher VARCHAR(40) NOT NULL,
    sold INT(10) DEFAULT 0,
    total_warehouse INT(10) NOT NULL DEFAULT 100,
    product_thumbnail VARCHAR(200),
    category_id INT UNSIGNED,
    FOREIGN KEY (category_id) REFERENCES product_categories(category_id)
) ENGINE=InnoDB;

CREATE TABLE comments (
    comment_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    comment_content TEXT NOT NULL,
    product_rating INT(8) NOT NULL,
    product_id INT UNSIGNED,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
) ENGINE=InnoDB;










