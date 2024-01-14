<!DOCTYPE HTML>
<html>
    <head> <title> searchy </title> </head>

    <body>


    <?php
    $button = $_GET ['submit'];
    $search = $_GET ['search'];

    $con=mysqli_connect("localhost","root","","libraryoptions");

    $sql ="SELECT * FROM TblBooks WHERE MATCH(bookname,authorname,minyear,pubyear,genre) AGAINST('%" . $search . "%')";
    $run = mysqli_query($con,$sql);
    $foundnum = mysqli_num_rows($run);
    if ($foundnum==0)
    {
        echo "we were unable to find a product with a search term of '<b>$search<b>'.";
    }
    else{
        echo"<h1><strong> $foundnum Results Found for \"" .$search."\" </strong></h1>";
        $sql = "SELECT * FROM tblbooks WHERE MATCH(bookname,authorname,minyear,pubyear,genre) AGAINST ('%" . $search . "%')";
        $getquery = mysqli_query($con,$sql);
        while($runrows = mysqli_fetch_array($getquery))
        {
            $buyLink = $runrows["bookname"];
            $imageLink = $runrows["authorname"];

            echo"<h5 class='card-title'>". $runrows["bookname"] ."</h5>";
            echo"<h5 class='card-title'>". $runrows["authorname"] ."</h5>";
            echo"<h5 class='card-title'>". $runrows["minyear"] ."</h5>";
            echo"<h5 class='card-title'>". $runrows["pubyear"] ."</h5>";
            echo"<h5 class='card-title'>". $runrows["genre"] ."</h5>";
        }}
    mysqli_close($con);
    ?>
</body>
</html>