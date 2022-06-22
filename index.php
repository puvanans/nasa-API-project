<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php include "model.php"; ?>
        <?php include "news.php"; ?>
        <div>
            <div>
                <h1>
                    Today's NEWS Headlines
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
                            <img src = "<?php echo $articleImage;?>"/>
                            <?php
                            echo "<br>";
                            ?> 
                            <a href ="<?php echo $articleLink;?>"> <?php echo $headline; ?></a>
                            <?php
                            echo "<br><br>";
                        
                        }
                        
                    ?>
                </p>
            </div>

            <div>
               <h1><?php echo $title; ?></h1>
               <h3><?php echo "by ".$photographer;?></h3>
               <h3><?php echo $date; ?></h3>
               <img src="<?php echo $imageURL;?>"/>
               <p><?php echo $description; ?></p>
            </div>
            

            

        </div>
    </body>
</html>