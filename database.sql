--Vytvoření databáze
CREATE DATABASE poznamkovy_blok;

--Použití databáze
USE poznamkovy_blok;

--Vytvoření tabulky USERS
CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--Vytvoření tabulky POZNAMKY
CREATE TABLE notes(
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id int NOT NULL,
        title VARCHAR(100),
        content TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

