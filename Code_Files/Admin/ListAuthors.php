<html>
    <head>
        <title>List Authors</title>
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

                <a href = "CreateAuthor.php">Create a new author</a><br />

                <?php
				
                // List records
                $sql = "SELECT * FROM author";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
							<th>Operations</th>
							<th>ID</th>
                            <th>name</th>
                            <th>surname</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
							<td>
                                <a href = "DeleteAuthor.php?author_id=<?php echo $row["author_id"]; ?>"><img src = "img/delete.png" alt = "Delete" /></a>
                                <a href = "UpdateAuthor.php?author_id=<?php echo $row["author_id"]; ?>"><img src = "img/edit.png" alt = "Edit" /></a>
                            </td>
                            <td><?php echo $row["author_id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["surname"]; ?></td>
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
