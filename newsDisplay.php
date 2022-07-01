<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body class = 'body'>
        <?php include "model.php"; ?>
        <?php include "news.php"; ?>
        <h1>
            This be the NEWS display page
        </h1>
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
    </body>
</html>