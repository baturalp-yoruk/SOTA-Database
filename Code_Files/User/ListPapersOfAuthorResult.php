<html>
    <head>
        <title>List Papers of Authors</title>
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

				$sql = "SELECT * FROM paper WHERE authors LIKE CONCAT('%' , '" . $_POST['name'] . "', '%') AND authors LIKE CONCAT('%','" . $_POST['surname'] ."', '%') ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
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
