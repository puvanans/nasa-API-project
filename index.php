<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php include "model.php"; ?>
        <?php include "news.php"; ?>
        <div>
            <div>
                <h1>
                    Today's Headlines
                    <h3><?php echo $date; ?></h3>
                </h1>
                <p>
                    <?php 
                        for ($i = 0; $i<5;$i++){
                            $articleHeadlines = $articlesArray[$i];
                    
                            $headline = $articleHeadlines["title"];
                            $articleLink = $articleHeadlines["url"];
                            $articleImage = $articleHeadlines["urlToImage"];
                    
                            
                            
                            echo "<br>";
                            ?>
                            <div class = "newsContainer">
                                <div>
                                    <img class = "thumbnail" src="<?php echo $articleImage;?>"/>
                                </div>

                                <div class = "headlineContainer" >
                                    <a class = "headline"  href ="<?php echo $articleLink;?>" target="_blank" > <?php echo $headline; ?></a>
                                </div>  
                            </div>    
                            <?php
                           
                        
                        }
                        
                    ?>
                </p>
            </div>

            <div>
               <h1>Today's Photograph</h1>
               <img src="<?php echo $imageURL;?>"/>
               <h1><?php echo $title; ?></h1>
               <h3><?php echo "by ".$photographer;?></h3>
               <h3><?php echo $date; ?></h3>
               <p><?php echo $description; ?></p>
            </div>
            

            

        </div>
    </body>
</html>