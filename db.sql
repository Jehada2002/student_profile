CREATE DATABASE student_management;

USE student_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE students (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    IDNumber VARCHAR(255) NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    MiddleName VARCHAR(255),
    LastName VARCHAR(255) NOT NULL,
    Program VARCHAR(255),
    Year VARCHAR(255),
    FullAddress VARCHAR(255),
    PhoneNumber VARCHAR(255),
    Email VARCHAR(255),
    Age INT,
    BirthDate DATE,
    Gender VARCHAR(255),
    CivilStatus VARCHAR(255),
    RegisterDate DATE,
    UpdateDate DATE
);


