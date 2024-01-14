<?php
include_once("connection.php");
$_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
##header('Location: Books.php');
print_r($_POST);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO tblbooks (BookID, Bookname, Authorname, Minyear, Pubyear, Genre)VALUES (null,:bookname,:authorname, :minyear, :pubyear, :genre)");
    $stmt->bindParam(':bookname', $_POST["bookname"]);
    $stmt->bindParam(':authorname', $_POST["authorname"]);
    $stmt->bindParam(':minyear', $_POST["minyear"]);
    $stmt->bindParam(':pubyear', $_POST["pubyear"]);
    $stmt->bindParam(':genre', $_POST["genre"]);
    $stmt->execute();
    $conn=null;



?>