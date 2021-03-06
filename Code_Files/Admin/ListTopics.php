<html>
    <head>
        <title>List Topics</title>
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

                <a href = "CreateTopic.php">Create a new topic</a><br />

                <?php
				
                // List records
                $sql = "SELECT * FROM topic";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
							<th>Operations</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>SOTA_results</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
							<td>
                                <a href = "DeleteTopic.php?topic_id=<?php echo $row["topic_id"]; ?>"><img src = "img/delete.png" alt = "Delete" /></a>
                                <a href = "UpdateTopic.php?topic_id=<?php echo $row["topic_id"]; ?>"><img src = "img/edit.png" alt = "Edit" /></a>
                            </td>
                            <td><?php echo $row["topic_id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["SOTA_result"]; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
                    <?php
                } else {
                    echo "0 results";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
