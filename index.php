<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            Puvanan's Daily page
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body class = "body">
        <?php include "model.php"; ?>
        <?php include "news.php"; ?>
                <div class = "welcomeCard">
                    <h1 class = "titleHeader">
                        Welcome 
                    </h1>
                </div>
                <div class = 'transition'>
                    <h1 class ='titleHeader' style = 'color:black; padding:25px'>
                        What's this page about?
                    </h1>
                    <button class = 'Button'>
                        thatra clapsa
                    </button>
                </div>
                
               <div class = 'newsHeader'>
                    <h1 class = "titleHeader" style = 'color:black; font-size:100 px; font-weight: bolder;'>
                        Today's Headlines 
                    </h1>
                    <button class = 'Button'>
                        thatra clapsa
                    </button>
                </div>
                
            
            <div class = "nasaPhotoContainer" style=" background-image: url('<?php echo $imageURL; ?>');"> 
                    <h1 class = 'titleHeader'>
                        Astronomy Picture of the Day
                    </h1>  
                    <button class = 'Button'>
                        thatra clapsa
                    </button>
                    
                    
            </div>

            <div>
               <br><br>
               
            </div>
    </body>
</html>