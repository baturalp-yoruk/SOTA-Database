<html>
    <head>
        <title>Search By Keyword</title>
    </head>
    <body>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "SOTA_results";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {

                die("Connection failed: " . $conn->connect_error);
            }else{
            ?>
                <form action="SearchPapersByKeyResult.php" method="post">
                    <p>Keyword: <input type="text" name="keyword" value = "" /></p>
                    <p><input type="submit" value = "List Papers"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>

