<!DOCTYPE HTML>
<html>
    <head>
       <title>Book selection page</title> 
    </head>
    <body>
        <h1> To loan a book, copy the book ID from your desired book into the Loan page. </h1>
    <?php
        include_once('connection.php');
       {echo("<br>");} 
        $stmt = $conn->prepare("SELECT * FROM Tblbooks");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("ID = ".$row["BookID"].'<br> Name ='.$row["bookname"]."<br> Author = ".$row["authorname"].'<br> minimum year = '.$row["minyear"].'<br> Date of publish = ' .$row["pubyear"]. '<br>Genre = ' .$row["genre"]. '<br><br><br>');
        }

    ?>
    <a href = "http://localhost/LIBRARYDATABASE/loans.php">
    <button> to loans page </button>
    </body>
</html>