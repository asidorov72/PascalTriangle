<?php

    require_once 'src/Figures/PascalTriangle.ini.php';
    
    use \Figures\PascalTriangle;
    
    $pascalTriangle = new PascalTriangle(10);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <title>Pascal Triangle Example</title>

       <!-- Bootstrap -->
       <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="assets/css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="container" role="main">
            <div class="page-header"><h1>Pascal Triangle Example</h1></div>
            
            <div class="row">
               <div class="col-lg-12">
                    <?php

                        $pascalTriangle->drawFigure();

                    ?>
                </div>
            </div>
        </div>
        
       
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>