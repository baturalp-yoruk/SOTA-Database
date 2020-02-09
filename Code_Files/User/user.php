<html>
    <head>
        <title>
          User Welcome Page
        </title>
    </head>
    <body>
      <?php

        echo "Welcome to the SOTA" ;

        $msq = "
			<ul>
        <li> <a href='ListPapers.php'>List Papers</a></li>
        <li> <a href='ListAuthors.php'>List Authors</a></li>
        <li> <a href='ListTopics.php'>List Topics</a></li>

        <li> <a href='ListPapersOfAuthor.php'>List Papers Of Author</a></li>
        <li> <a href='ListPapersOfTopic.php'>List Papers Of Topic</a></li>
        <li> <a href='SearchPapersByKey.php'>Search Papers By Key</a></li>

        <li> <a href='FindCoauthors.php'>Find Coauthors</a></li>
        <li> <a href='FindSOTA.php'>Find SOTA</a></li>
        <li> <a href='SortedAuthors.php'>Sort Authors By SOTA</a></li>

			</ul>";


		echo $msq;
        $ms = "<br> Click <a href = '../index.php'>here</a> to log out.";
        echo $ms;

      
        
      ?>
    </body>
</html>
