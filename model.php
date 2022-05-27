<?php

    $url = "https://api.nasa.gov/planetary/apod?api_key=xbweKcmjlVB7efDnnsrmKDXZCaHPUwAafp3A20kL";

    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$url);

    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    $result = curl_exec($curl);

    curl_close($curl);

    $apiResult = json_decode($result,true);

    foreach($apiResult as $x => $x_value){
        echo $x.' '.$x_value ;
        echo "<br> <br>";
    }

    

?>