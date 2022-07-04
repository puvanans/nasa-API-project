<?php

    $url = "https://api.nasa.gov/planetary/apod?api_key=xbweKcmjlVB7efDnnsrmKDXZCaHPUwAafp3A20kL";

    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$url);

    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    $imageResult = curl_exec($curl);

    curl_close($curl);

    $apiResult =(json_decode($imageResult,true));

   
    
    /*
    foreach($apiResult as $key => $value){
        echo "The key here is - ".$key;
        echo "<br>";
        echo "<br>";
        echo " and the value here is - ".$value;
        echo "<br> ";
        echo "<br>";
    }
    */

   $date = $apiResult['date'];

   $photographer = $apiResult['copyright'];

    
   $description = $apiResult['explanation'];

   $title = $apiResult['title'];


   $imageURL = $apiResult["url"];

   $hdImageURL= $apiResult["hdurl"];

   



   

    

?>