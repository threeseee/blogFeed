<?php

 $title=$_POST['title']; 
 $author=$_POST['author']; 
 $content=$_POST['content']; 
 

echo "Hello World";
 // Connects to your Database 
 mysql_connect("sql.mit.edu", "bjohns", "doggies") or die(mysql_error()); echo "Hello World";
 mysql_select_db("bjohns+threeseee") or die(mysql_error()); 
echo "Hello World";

 mysql_query("INSERT INTO `blog_posts` (title,author,content) VALUES ('$title', '$author', '$content')"); 
 Print "Your information has been successfully added to the database."; 

?>
    
