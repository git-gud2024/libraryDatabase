<?php
$date = date('y:m:d');
echo($date);
echo("<br>");

include_once("connection.php");

$_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
#header('Location: Loans.php');
$extradays  = ($_POST["Time"]);
echo($extradays);
echo("<br>");
$NewDate=Date('y:m:d', strtotime("+".$extradays." days"));
echo($NewDate); 
print_r($_POST);
    array_map("htmlspecialchars", $_POST);

    $stmt = $conn->prepare("INSERT INTO tblloans (LoanID, BookID, UserID, Time, Date, EndDate)VALUES (null,:BookID, :UserID, :Time, :date, :enddate)");
    $stmt->bindParam(':BookID', $_POST["BookID"]);
    $stmt->bindParam(':UserID', $_POST["UserID"]);
    $stmt->bindParam(':Time', $_POST["Time"]); 
    $stmt->bindParam(':date', $date );
    $stmt->bindParam(':enddate', $NewDate );
    $stmt->execute();
    $conn=null;

?>