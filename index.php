<!DOCTYPE html>
<html lang="en">
<head>

    <title> Home kaboomusic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" href="">
    <!--bootstrap 4 bro-->  
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
</head>

<body>
    <!--navigation starts here-->
    <nav class="navbar navbar-inverse">
        <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Kaboom</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1">
                <span class="sr-obly">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>    
            </button>
        </div>
        <div class="navbar-form">
            <form action="search.php"  method="post">
                <div class="form-group">
                    <label for="search" class="s-only">searh here</label>
                    <div class="input-group">                  
                        <input type="search" class="form-control" name="search" placeholder="search here">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-secondary" name="submitsearch">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="collapse" id="menu1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="index.php">Singles</a></li>
                <li><a href="index.php">Mixtapes</a></li>
                <li><a href="index.php">Albums</a></li>
            </ul>
        
        </div>
        </div>
    </nav>
    <!--navigation end-->




    <!-- latest jquery-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- javascript scripts underneath-->
</body>
</html>