
CREATE DATABASE repair_service;
USE repair_service;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    login VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) DEFAULT 'user'
);

CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    device VARCHAR(100) NOT NULL,
    problem TEXT NOT NULL,
    status VARCHAR(50) DEFAULT 'Новая',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
