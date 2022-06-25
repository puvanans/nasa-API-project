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
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body>
        <?php include "model.php"; ?>
        <?php include "news.php"; ?>
        <div>
            <div>
                <h1 class = "mainHeader">
                    Welcome to the daily page
                </h1>
                <h2 class = "mainHeader">
                    Today's Headlines 
                </h2>
                <h3 class = "dateHeader"><?php echo $date; ?></h3>
                <div>
                    <?php 

                        for ($i = 0; $i<5;$i++){
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
            </div>

            <div>
               <br><br>
               <h1 class = "mainHeader">Today's Photograph</h1>
               <div class = "nasaPhotoContainer">
                    <img class="nasaPhotograph" src="<?php echo $imageURL;?>"/>
               </div>
               <h1 class = "mainHeader" ><?php echo $title; ?></h1>
               <h3 class = "mainHeader"><?php echo "by ".$photographer;?></h3>
               <h3 class = "dateHeader"><?php echo $date; ?></h3>
               <div>
                    <p>
                        <?php echo $description; ?>
                    </p>
               </div>
            </div>
            

            

        </div>
    </body>
</html>