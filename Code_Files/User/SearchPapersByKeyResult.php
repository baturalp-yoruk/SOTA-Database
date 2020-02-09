<html>
    <head>
        <title>Search Result</title>
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
                //$sql = "SELECT paper.id, paper.title, paper.abstract, paper.result, paper.authors, paper.topics FROM paper, paper_author, author 
				//WHERE paper.id=paper_author.paperid AND paper.authors LIKE CONCAT('%' , $_POST['name'] , '%') 
				//AND paper.authors LIKE CONCAT('%', $_POST['surname'],'%') AND paper_author.authorid=author.author_id AND 
				//author.name LIKE CONCAT('%' , $_POST['name'] , '%') 
				//AND author.surname LIKE CONCAT('%', $_POST['surname'],'%') ";
				//$sql = "SELECT * FROM paper WHERE paper.id IN
				//((SELECT paper_author.paperid FROM paper_author WHERE paper_author.authorid = author.author_id) WHERE paper_author.authorid IN
				//(SELECT author_id FROM author WHERE author.name =" . "'" . $_POST['name'] . "'" . "AND author.surname ='" .  $_POST['surname'] . "')) ";
				$sql = "SELECT * FROM paper WHERE title LIKE CONCAT('%' , '" . $_POST['keyword'] . "', '%') OR abstract LIKE CONCAT('%' , '" . $_POST['keyword'] . "', '%') ";
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
