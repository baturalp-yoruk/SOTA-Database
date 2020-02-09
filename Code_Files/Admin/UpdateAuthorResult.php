<html>
    <head>
        <title>UpdateAuthorResult</title>
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

                // Update the record
                $sql = "UPDATE author SET name = '" . $_POST['name'] . "', surname = '" . $_POST['surname'] . "' WHERE author_id=" . $_POST[author_id] ;

                if ($conn->query($sql) === TRUE) {
                    echo "Record was updated successfully <br />";
                    echo "<a href = 'admin.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>