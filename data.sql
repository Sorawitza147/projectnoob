CREATE DATABASE IF NOT EXISTS member;
USE member;

CREATE TABLE IF NOT EXISTS user (
    Fullname VARCHAR(255),
    Username VARCHAR(255),
    PhoneNumber INT(11),
    Email VARCHAR(255),
    Password VARCHAR(255)
);
