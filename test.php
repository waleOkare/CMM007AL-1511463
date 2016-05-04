<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cmm007</title>
</head>
<body>
<h2> For access lab, its working!!! 28/04/2016 </h2>

</body>
</html>

<?php
include("dbConnect.php");
if($_SERVER['REQUEST_METHOD']==='GET'){
    ?>

    <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

        <ul class="form-style-1">

            <li>
                <label>Entry Title

                    <input type="text" name="entryTitle" class="field-long"  required />
                    <br>
                    <br>
                </label>
            </li>

            <li>
                <label>Entry Summary

                    <textarea name="entrySummary" id="field5" class="field-long field-textarea" rows="2" cols="20" required></textarea>

                </label>
            </li>

            <li>
                <label> Category:
                    <select name="category" class="field-select" required>
                        <option value=" " selected disabled>Select </option>
                        <option value="Cat">work</option>
                        <option value="dog">university</option>
                        <option value="misc">family</option>
                    </select>
                </label>
            </li>


            <li>
                <label>Submitted by:

                    <input type="text" name="submitter" class="field-long" />
                    <br>
                    <br>
                </label>
            </li>

            <li>
                <br>
                <br>
                <br>
                <input type="submit" value="Submit" />
            </li>
        </ul>
    </form>

    <?php



}elseif($_SERVER['REQUEST_METHOD']==='POST') {


    $bugName = $_POST['bugName'];
    $BugCategory = $_POST['BugCategory'];
    $BugSummary = $_POST['BugSummary'];


    $bug_SQLinsert = "INSERT INTO bugs (bugName,BugCategory,BugSummary)
                              VALUES ('$bugName', '$BugCategory', '$BugSummary');";


    if (mysqli_query($db, $bug_SQLinsert)) {

        header("location:showbugs.php");
    } else {
        echo "Failed to add new bug";

    }
}
else{
    ("location:index.php"); //not created yet
}




?>
