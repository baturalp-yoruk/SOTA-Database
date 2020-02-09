<html>
    <head>
        <title>
          Admin Welcome Page
        </title>
    </head>
    <body>
      <?php

        echo "Admin, Welcome to the SOTA" ;

        $msq = "
			<ul>
        <li> <a href='CreatePaper.php'>Create Paper</a></li>
        <li> <a href='CreateAuthor.php'>Create Author</a></li>
        <li> <a href='CreateTopic.php'>Create Topic</a></li>

        <li> <a href='ListPapers.php'>List Papers</a></li>
        <li> <a href='ListAuthors.php'>List Authors</a></li>
        <li> <a href='ListTopics.php'>List Topics</a></li>
			</ul>";


		echo $msq;
        $ms = "<br> Click <a href = '../index.php'>here</a> to log out.";
        echo $ms;

      
        
      ?>
    </body>
</html>