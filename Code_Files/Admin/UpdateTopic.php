<html>
    <head>
        <title>Update Topic</title>
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
                $sql = "SELECT * FROM topic WHERE topic_id = " . $_GET['topic_id'];
                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <form action="UpdateTopicResult.php" method="post">


                    <?php

                    // Get the data
                    $row = $result->fetch_assoc();
                    ?>
                        <p>ID: <input type="text" name="topic_id" value = "<?php echo $row["topic_id"] ?>" readonly /></p>
                        <p>Name: <input type="text" name="name" value = "<?php echo $row["name"] ?>" /></p>
                        <p>SOTA_result: <input type="text" name="SOTA_result" value = "<?php echo $row["SOTA_result"] ?>" /></p>
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