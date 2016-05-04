<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add Blog Entry  </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href=../css/unsemantic-grid-responsive-tablet.css>
    <style type="text/css">
        .form-style-1 {
            margin:10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }
        .form-style-1 label{
            margin:0 0 3px 0;
            padding:0px;
            display:block;
            font-weight: bold;
        }
        .form-style-1 input[type=text],
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea,
        select{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border:1px solid #BEBEBE;
            padding: 7px;
            margin:0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }
        .form-style-1 input[type=text]:focus,
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus{
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }
        .form-style-1 .field-divided{
            width: 49%;
        }

        .form-style-1 .field-long{
            width: 100%;
        }
        .form-style-1 .field-select{
            width: 100%;
        }
        .form-style-1 .field-textarea{
            height: 100px;
        }
        .form-style-1 input[type=submit], .form-style-1 input[type=button]{
            background: #4B99AD;
            padding: 8px 15px 8px 15px;
            border: none;
            color: #fff;
        }
        .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
            background: #4691A4;
            box-shadow:none;
            -moz-box-shadow:none;
            -webkit-box-shadow:none;
        }
        .form-style-1 .required{
            color:red;
        }
    </style>

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

    </header>



    <section class="grid-66 mobile-grid-66">


        <form action="#" method="post">
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


    </section>

    <aside class="grid-33 mobile-grid-66">








    </aside>

</main>




<footer id="footer">
    <p> Designed by [Wale Patrick, [2016] </p>
</footer>

</body>
</html>