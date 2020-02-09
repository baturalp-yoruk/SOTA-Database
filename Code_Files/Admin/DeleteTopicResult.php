<html>
    <head>
        <title>Delete Topic Result</title>
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

                // Delete the Topic
                $sql = "DELETE FROM topic WHERE topic_id = " . $_POST['topic_id'];

                if ($conn->query($sql) === TRUE) {
                    echo "Topic is deleted successfully <br />";
                    echo "<a href = 'admin.php'>Go back</a>";
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>