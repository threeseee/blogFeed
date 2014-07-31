<html>
    <head>
        <title>Threesee Blog + RSS</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="../css/blog-home.css" rel="stylesheet">
        
    </head>
    
<body>
    <div id="nav-wrapper" style="height: 54px;">
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Threeseee</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <h1> Welcome to the Threesee Blog and RSS Feed!</h1>

        <div class="row">
            <div class="col-md-6">
                
        <h2> RSS Feed </h2>
        <!-- RSS FEED READER -->
        <?php
        //Feed URLs
        $feeds = array(
            "http://www.veranochileno.tumblr.com/rss",
            "http://www.hojinjeon.tumblr.com/rss",
            "https://api.flickr.com/services/feeds/photos_public.gne?id=125879274@N02&lang=en-us&format=rss_200"
        );
        
        //Read each feed's items
        $entries = array();
        foreach($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            $entries = array_merge($entries, $xml->xpath("//item"));
        }
        
        //Sort feed entries by pubDate
        usort($entries, function ($feed1, $feed2) {
            return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
        });
        
        ?>
        
        <?php
        //Print all the entries
        foreach($entries as $entry){
            ?>
            <a href="<?= $entry->link ?>"><h3><?= $entry->title ?></h3></a> (<?= parse_url($entry->link)['host'] ?>)
            <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?></p>
            <p><?= $entry->description ?></p>
            
            <br>
            <hr>
            <hr>
            <?php
        }
        ?>
        
        <!-- /RSS FEED READER -->
                </div>
            
            <div class="col-md-6">
                
                <h2> Blog </h2>
                
                <?php
        mysql_connect("sql.mit.edu", "bjohns", "doggies") or die(mysql_error()); 
        mysql_select_db("bjohns+threeseee") or die(mysql_error()); 
        $data = mysql_query("SELECT * FROM blog_posts") or die(mysql_error());
        while($info = mysql_fetch_array( $data )) 
            {
                Print "<h3><a href='#'>".$info['title'] . "</a>";
                Print "</h3>";
                Print "<p class='lead'>by <a href='#'>".$info['author'] . "</a>";
                Print "</p>";
                Print "<hr>";
                Print "<p>";
                Print    "<span class='glyphicon glyphicon-time'></span> Posted on August 28, 2013 at 10:00 PM</p>";
                Print "<hr>";
                Print "<img src='http://placehold.it/900x300' class='img-responsive'>";
                Print "<hr>";
                Print "<p> ".$info['content'] . "This is a short sentence.</p>";
            } 
                ?>
                

            </div>
            </div>
    
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    
    </body>
</html>