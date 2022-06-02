<?php

    $newsURL = "https://newsapi.org/v2/top-headlines?country=us&apikey=abbdc7b22afc468387b285b27ff8069f" ;

    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36";

    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$newsURL);

    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($curl,CURLOPT_USERAGENT, $userAgent);

    $newsResult = curl_exec($curl);
        //the above line of code executes the curl instance and the resultant (JSON) is contained
        //in the variable $newsResult.
    
    $newsArray = json_decode($newsResult,true);
        //the JSON returned from the previous step is converted into an associative array 
        //through the json_decode(true) function.

    

    /*
    foreach ($newsArray as $key => $value){

        echo "The key here is - ".$key;
        echo "<br>";
        echo "<br>";
        echo " and the value here is - ".$value;
        echo "<br> ";
        echo "<br>";
    }
    */
    $newsArticles = $newsArray["articles"];
        //the newsArray derivede from JSON returned from the API contains a multidimensional array 
        //as the value for the "articles".
        //This multidimensional array is contained in the variable $newsArticles
    
    var_dump($newsArticles);
    
    echo gettype($newsArticles);

    /*
    foreach ($newsArticles as $no => $article){
        echo "The key here is - ".$no;
        echo "<br>";
        echo "<br>";
        echo " and the value here is - ".$article;
        echo "<br> ";
        echo "<br>";
    }
    */



?>