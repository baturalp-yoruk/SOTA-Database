<html>
    <head>
        <title>CreatePaperResult</title>
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
                $sql = "INSERT INTO paper(title, abstract, result, authors, topics) " .
                    "VALUES('" . $_POST['title'] . "', '" . $_POST['abstract'] .
                    "', '" . $_POST['result'] . "', '" . $_POST['authors'] .
                    "', '" . $_POST['topics'] . "')";

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
