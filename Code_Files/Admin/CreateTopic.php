<html>
    <head>
        <title>Create Topic</title>
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
                <form action="CreateTopicResult.php" method="post">
                    <p>Name: <input type="text" name="name" value = "" /></p>
                    <p>SOTA_result: <input type="text" name="SOTA_result" value = "" /></p>
                    <p><input type="submit" value = "Create Topic"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
