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
                    <h1 class ='titleHeader' style = 'color:black'>
                         Please keep scrolling down
                    </h1>
                </div>
                
               <div class = newsHeader>
                    <h2 class = "titleHeader" style = 'color:black; font-size:100 px; font-weight: bolder;'>
                        Today's Headlines 
                    </h2>
                </div>
                <div>
                    <?php 

                        for ($i = 0; $i<10;$i++){
                            $articleHeadlines = $articlesArray[$i];
                    
                            $headline = $articleHeadlines["title"];
                            $articleLink = $articleHeadlines["url"];
                            $articleImage = $articleHeadlines["urlToImage"];

                            ?>
                            <div>
                                <div class = imageContainer>
                                    <img class = thumbnail src="<?php echo $articleImage;?>"/>
                                    <a class = "headline"  href ="<?php echo $articleLink;?>" target="_blank" > <?php echo $headline; ?></a>
                                    <br><br>
                                </div>

                                <div class = "headlineContainer" >
                                   

                                </div>  
                            </div>    
                            <?php
                           
                        
                        }
                        
                    ?>
            </div>
            
            <div class = "nasaPhotoContainer" style=" background-image: url('<?php echo $imageURL; ?>');"> 
                    <h1 class = 'titleHeader'>
                        Astronomy Picture of the Day
                    </h1>  
                    
            </div>

            <div>
               <br><br>
               <div class = "description">
                    <h1 class = "mainHeader">
                        About the Photo
                    </h1>
                    <h1 class = "titleHeader" >
                        <?php echo $title; ?>
                    </h1>
                    <h3 class = "titleHeader">
                        <?php echo $photographer;?>
                    </h3>
                    <h3 class = "dateHeader">
                        <?php echo $date; ?>
                    </h3>
                    <p>
                        <?php echo $description; ?>
                    </p>
               </div>
            </div>
    </body>
</html>