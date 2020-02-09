<html>
    <head>
        <title>List Papers</title>
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

                <a href = "CreatePaper.php">Create a new paper</a><br />

                <?php
				
                // List records
                $sql = "SELECT * FROM Paper";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
							<th>Operations</th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Abstract</th>
							<th>Result</th>
                            <th>Authors</th>
							<th>Topics</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
							<td>
                                <a href = "DeletePaper.php?id=<?php echo $row["id"]; ?>"><img src = "img/delete.png" alt = "Delete" /></a>
                                <a href = "UpdatePaper.php?id=<?php echo $row["id"]; ?>"><img src = "img/edit.png" alt = "Edit" /></a>
                            </td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["abstract"]; ?></td>
							<td><?php echo $row["result"]; ?></td>
                            <td><?php echo $row["authors"]; ?></td>
							<td><?php echo $row["topics"]; ?></td>
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
