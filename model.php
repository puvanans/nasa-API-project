<?php

    $url = "https://api.nasa.gov/planetary/apod?api_key=xbweKcmjlVB7efDnnsrmKDXZCaHPUwAafp3A20kL";

    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$url);

    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    $result = curl_exec($curl);

    curl_close($curl);

    $apiResult =(json_decode($result,true));

    
    foreach($apiResult as $key => $value){
        echo "key here is ".$key;
        echo "<br>";
        echo "<br>";
        echo "value here is ".$value;
        echo "<br> ";
        echo "<br>";
    }
    

   $date = $apiResult['date'];

   //echo "today's date is ".$date;

   echo "<br><br>";

   $description = $apiResult['explanation'];

   //echo $description

   $imageURL = $apiResult["url"];

   $curlImage = curl_init();

   curl_setopt($curlImage,CURLOPT_URL,$imageURL);

   curl_setopt($curlImage,CURLOPT_RETURNTRANSFER,true);

   $image = curl_exec($curlImage);

   curl_close($curlImage);

   return $image;

   

    

?>