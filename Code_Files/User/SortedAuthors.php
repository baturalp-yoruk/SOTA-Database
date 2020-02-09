<html>
    <head>
        <title>Sorted Authors</title>
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

                // List records
                $sql = "(SELECT author.name, author.surname, COUNT(*) AS count
								FROM paper_topic
								JOIN paper ON paper.id = paper_topic.paperidt 
                                JOIN paper_author ON paper.id        = paper_author.paperid
                                JOIN topic ON paper_topic.topicid = topic.topic_id 
                                JOIN author ON author.author_id = paper_author.authorid
                                WHERE result=SOTA_result
								GROUP BY paper_author.authorid
								ORDER BY count DESC)";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
							<th>Number of SOTAs</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["surname"]; ?></td>
                            <td><?php echo $row["count"]; ?></td>
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
