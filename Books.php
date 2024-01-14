<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
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

<form action="addbooks.php" method = "POST">
  Book name:<input type="text" name="bookname"><br>
  Author name:<input type="text" name="authorname"><br>
  Minimum year:<input type="text" name="minyear"><br>
  year published:<input type="text" name="pubyear"><br>
  <br>
  Genre:<select name="genre">
    <option value="SC">Sci-Fi</option>
    <option value="NF">Non-Fiction</option>
    <option value="HO">Horror</option>
    <option value="CO">Comedy</option>
    <option value="TH">Thriller</option>
  </select><br>
  <input type="submit" value="Add Book">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Tblbooks");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
}
?>
</body>
</html>
