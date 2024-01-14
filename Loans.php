<!DOCTYPE html>
<html>
<head>
    
    <title>Loans Page</title>
    
</head>
<body>
<?php
#session_start(); 
#if (!isset($_SESSION['name']))
#{   
#    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
#    header("Location:login.php");
#}
?>

<form action="addloans.php" method = "POST">
  Book ID:<input type="text" name="BookID"><br>
  User ID:<input type="text" name="UserID"><br>
  Time to borrow in days:<input type="text" name="Time"><br>
 
  <br>
  <input type="submit" value="Loan Out!">
</form>
<?php
$date = date('y:m:d');
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Tblloans");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
}
?>
<br>
<a href="http://localhost/LIBRARYDATABASE/bookdisplay.php">
  <button>To book list</button>
</body>
</html>
