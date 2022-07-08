CREATE DATABASE IF NOT EXISTS lectorio_assessment;
USE lectorio_assessment;
CREATE TABLE IF NOT EXISTS users (
    UserID int NOT NULL AUTO_INCREMENT,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255),
    PRIMARY KEY (UserID)
);
