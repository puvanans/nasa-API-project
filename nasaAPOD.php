<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NASA Astronomy Picture</title>
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
        <h1 class = 'titleHeader'>
            This be the NASA display page
        </h1>
        <div class = "description">
            <div style = 'text-align:center'>
                <img src ='<?php echo $imageURL;?>'>
                <button class = 'Button' >
                        thatra clapsa
                </button>
            </div>
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
        
    </body>
</html>