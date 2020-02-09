<html>
    <head>
        <title>Create Paper</title>
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
                <form action="CreatePaperResult.php" method="post">
                    <p>Title: <input type="text" name="title" value = "" /></p>
                    <p>Abstract: <input type="text" name="abstract" value = "" /></p>
                    <p>Result: <input type="text" name="result" value = "" /></p>
                    <p>Authors: <input type="text" name="authors" value = "" /></p>
					<p>Topics: <input type="text" name="topics" value = "" /></p>
                    <p><input type="submit" value = "Create Paper"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
