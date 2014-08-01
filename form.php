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
                <a class="navbar-brand" href="threeseeerss.php">Threeseee</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="threeseeerss.php">About</a>
                    </li>
                    <li><a href="form.php">New Post</a>
                    </li>
                    <li><a href="#contact">???</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
    <div class="container">
    
    <br>
<form class="form-horizontal" action="formsubmit.php" method="POST">
<fieldset>
    

<!-- Form Name -->
<legend>Make a post yay!</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Title</label>
  <div class="controls">
    <input id="textinput" name="title" type="text" placeholder="Fluffy bunnies" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Author</label>
  <div class="controls">
    <input id="textinput" name="author" type="text" placeholder="I am hooman" class="input-xlarge">
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Say what you need to say</label>
  <div class="controls">                     
    <textarea id="textarea" name="content"></textarea>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="submit" name="submitbutton" class="btn btn-primary" type="submit">Submit</button>
  </div>
</div>

</fieldset>
</form>
        </div>
    
    
</body>

</html>