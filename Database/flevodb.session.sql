CREATE TABLE gebruikers (
                       id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                       gebruikersnaam VARCHAR(50) NOT NULL UNIQUE,
                       wachtwoord VARCHAR(255) NOT NULL,
                       created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                       updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);