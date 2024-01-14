<!DOCTYPE HTML>
<html>
    <head>
       <title>Loan view page</title> 
    </head>
    <body>
        <h1> Viewing current and past loans </h1>
    <?php
    $date1 = date('m/d/Y', time());
        include_once('connection.php');
       {echo("<br>");} 
        $stmt = $conn->prepare("SELECT * FROM Tblloans");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("Loan ID ".$row["LoanID"].'<br> BookID = '.$row["BookID"]."<br> UserID = ".$row["UserID"].'<br> Length in days = '.$row["Time"].'<br> Start of loan = ' .$row["Date"]. '<br> End of loan = '.$row["EndDate"]. '<br><br><br>');
        
        }

    ?>
    <a href = "http://localhost/LIBRARYDATABASE/loans.php">
    <button> to loans page </button>
    </body>
</html>