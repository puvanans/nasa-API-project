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

        <div>
            
            <div>
               <h1><?php echo $title; ?></h1>
               <h3><?php echo "by ".$photographer;?></h3>
               <h3><?php echo $date; ?></h3>
               <img src="<?php echo $imageURL;?>"/>
               <p><?php echo $description; ?></p>
            </div>
            <div>
                <p>
                    <?php  ?>
                </p>
            </div>

            

        </div>
    </body>
</html>