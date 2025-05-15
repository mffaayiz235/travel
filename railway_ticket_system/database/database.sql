CREATE DATABASE railway;
USE railway;
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    train_no VARCHAR(10) NOT NULL,
    passenger_name VARCHAR(100) NOT NULL
);