<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL,
Role TINYINT(1),
Subject VARCHAR(50))");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblBooks;
CREATE TABLE TblBooks 
(BookID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
bookname VARCHAR(50) NOT NULL,
authorname VARCHAR(20) NOT NULL,
minyear VARCHAR(2) NOT NULL,
pubyear VARCHAR(4) NOT NULL,
genre VARCHAR(2) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblLoans;
CREATE TABLE TblLoans 
(LoanID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
BookID INT(4) NOT NULL,
UserID INT(4) NOT NULL,
Time INT(3) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
?>
