<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/intro-bg_1.jpg" />
        <title> Hardware Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell hardware tools.</h1>
                       <p>Flat 20% OFF on all tools.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/electrical cover.jpg" alt="electrical cover">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Electrical Tools</p>
                                        <p>Purchase safe and original ISI mark tools.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/plumbing img cover.jpg" alt="plumbing img cover">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Plumbing Tools</p>
                                    <p>Original tools in best rates.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/construction materials.jpg" alt="construction materials">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">construction materials</p>
                                   <p>Buy materials on wholesale rates</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy hardware  Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Ninad agre</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>