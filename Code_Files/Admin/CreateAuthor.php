<html>
    <head>
        <title>Create Author</title>
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
                <form action="CreateAuthorResult.php" method="post">
                    <p>Name: <input type="text" name="name" value = "" /></p>
                    <p>Surname: <input type="text" name="surname" value = "" /></p>
                    <p><input type="submit" value = "Create Author"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
