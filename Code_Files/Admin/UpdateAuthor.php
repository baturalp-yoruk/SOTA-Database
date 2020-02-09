<html>
    <head>
        <title>Update Author</title>
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

                // Fetch the record
                $sql = "SELECT * FROM author WHERE author_id = " . $_GET['author_id'];
                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <form action="UpdateAuthorResult.php" method="post">


                    <?php

                    // Get the data
                    $row = $result->fetch_assoc();
                    ?>
                        <p>ID: <input type="text" name="author_id" value = "<?php echo $row["author_id"] ?>" readonly /></p>
                        <p>Name: <input type="text" name="name" value = "<?php echo $row["name"] ?>"  /></p>
                        <p>Surname: <input type="text" name="surname" value = "<?php echo $row["surname"] ?>" /></p>
                        <p><input type="submit" value = "Save Changes" /></p>
                    </form>
                    <?php
                } else {
                    echo "Record does not exist";
                }
            }
            $conn->close();
        ?>

    </body>
</html>