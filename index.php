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
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="components/css/main.css">
    <link rel="stylesheet" href="components/css/lightslider.css">
   <style>
 
        
        	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 10px;
		    background-color: rgba(0, 0, 0, 0.5);
		    
		    }
                    .content-slider a {
                        text-decoration: none;
                        color: white;
                        
                    }
                    ul.list-inline{
                padding: 15px;
                color: white;
                text-decoration: none;                    
                }


   </style>
   
   
</head>

<body>
   <!--header starts here-->
   <?php include_once "includes/header.php";?>
   <!--header ends-->
   <!--contentr starts here-->
   <div class="container">
    <div class="row">
    <!--new stuff slider including news starts here-->
            <section class="main-slider">
            <ul id="content-slider" class="content-slider">
                        <li style="background-image: url(images/Noble-Styles-1.png); background-size: cover;">
                            <a href="#"><h3>Noble styles relaeases new album</h3></a>
                            
                        </li>
                        <li>
                            <h3>2</h3>
                        </li>
                        <li>
                            <h3>3</h3>
                        </li>
                        <li>
                            <h3>4</h3>
                        </li>
                        <li>
                            <h3>5</h3>
                        </li>
                        <li>
                            <h3>6</h3>
                        </li>
                    </ul>
                    
        </section>
    
        <section class="main-body">
        <!--the main left content-->
            <article class="col-md-8">
            
            
            
            </article>
            <!--the main right content-->
            <aside class="col-md-4">
            
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                    <h4 class="panel-tile">Most Read News</h4>
                    
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item"> Noble styles new album</a>
                        <a href="#" class="list-group-item"> Noble styles new album</a>
                        <a href="#" class="list-group-item"> Noble styles new album</a>
                    </ul>
                    
                    
                </div>
                
                
            
            </aside>
            
            
        
        </section>
   
   </div>
   </div>
   <!--footer starts here-->
   <?php include_once "includes/footer.php"; ?>
   <!--footer ends -->

   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="components/js/lightslider.js"></script>
    <script>
    
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
         
		});
    
    </script>
      
   
        <!-- latest jquery--
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    
  

        <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script src="components/lightslider.js"></script>
</body>
</html>