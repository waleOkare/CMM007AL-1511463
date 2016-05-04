<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Blog Entry </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href=../css/unsemantic-grid-responsive-tablet.css>

</head>

<body>

<main class="grid-container">

    <header class="grid-100">


        <h1> myBlog </h1>

        <h4> because the internet needs to know what i think </h4>

        <nav>
            <ul>
                <li><a href="blog.php"> All Blog Items </a></li>
                <li><a href="blog.php"> Work Items  </a></li>
                <li><a href="blog.php">  University Items </a></li>
                <li><a href="blog.php"> Family Items </a></li>
                <li><a href="add.php"> Insert a Blog Item </a></li>

            </ul>
        </nav>

       <?
     //   $BugCategory =$_GET['BugCategory'];

      //  if(isset($_GET['BugCategory'])){
          //  $BugCategory =$_GET['BugCategory'];

          //  echo "<h4 align='center' id='p'>  You are in the $BugCategory category  </h4>";


      //  }else{

         //   echo '<h4 align="center" id="p"> You are looking at all the data in the database </h4>';
      //  }

    //    ?>

    </header>







    <section class="grid-66 mobile-grid-66">


        <?php
        include("connection.php");

        //$BugCategory = $_GET['BugCategory'];

        //if(isset($_GET['BugCategory'])){

        //  $bugs_SQLselect = "    SELECT * FROM bugs WHERE BugCategory = '$BugCategory' ";
        //}else{



        $blogview_SQLselect = "    SELECT *
                               FROM blogview ";




        $blogview_SQLselect_Query = mysqli_query($db, $blogview_SQLselect);

        $indx = 1;
        while($row = mysqli_fetch_array($blogview_SQLselect_Query, MYSQLI_ASSOC)){
            $entryTitle = $row['entryTitle'];
            $entrySummary = $row['entrySummary'];
            $category =  $row['category'];
            $submitter =  $row['submitter'];









              echo  " <h3> " . "[". $entryTitle."]" .   " by " . " $submitter " .  " </h3>";

              echo'<br>';

              echo  $category;

              echo'<br>';

             echo  $entrySummary;


            echo ' <hr>';


            $indx++;
  }
        mysqli_free_result($blogview_SQLselect_Query);

?>






    </section>

    <aside class="grid-33 mobile-grid-66">








    </aside>

</main>




<footer id="footer">
    <p> Designed by [Wale Patrick, [2016] </p>
</footer>

</body>
</html>