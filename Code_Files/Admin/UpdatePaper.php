<html>
    <head>
        <title>Update Paper</title>
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
                $sql = "SELECT id, title, abstract, result, authors, topics FROM paper WHERE id = " . $_GET['id'];
                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <form action="UpdatePaperResult.php" method="post">


                    <?php

                    // Get the data
                    $row = $result->fetch_assoc();
                    ?>
                        <p>ID: <input type="text" name="id" value = "<?php echo $row["id"] ?>" readonly /></p>
                        <p>Title: <input type="text" name="title" value = "<?php echo $row["title"] ?>" readonly /></p>
                        <p>Abstract: <input type="text" name="abstract" value = "<?php echo $row["abstract"] ?>" /></p>
                        <p>Result: <input type="text" name="result" value = "<?php echo $row["result"] ?>" /></p>
						<p>Authors: <input type="text" name="authors" value = "<?php echo $row["authors"] ?>" /></p>
                        <p>Topics: <input type="text" name="topics" value = "<?php echo $row["topics"] ?>" /></p>
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