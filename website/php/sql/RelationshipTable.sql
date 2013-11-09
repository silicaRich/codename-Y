CREATE TABLE Relationship (
  id_one INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_two INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  location varchar(255) DEFAULT "default"
);