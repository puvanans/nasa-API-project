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

        <h1>Welcome to the Page</h1>
        <div>
            <p>
                <?php
                    echo $date;
                ?>
            </p>
            <p>
                <?php 
                    echo $description;
                ?>
            </p>
            <div>
               <img src="<?php echo $imageURL;?>"/>
            </div>
            <div>
                <p>
                    <?php  ?>
                </p>
            </div>

            

        </div>
    </body>
</html>