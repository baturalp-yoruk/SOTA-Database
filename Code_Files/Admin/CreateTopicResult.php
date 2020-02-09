<html>
    <head>
        <title>CreateTopicResult</title>
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

                // Insert the record
                $sql = "INSERT INTO topic(name, SOTA_result) " .
                    "VALUES('" . $_POST['name'] . "', '" .  $_POST['SOTA_result'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'admin.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>
