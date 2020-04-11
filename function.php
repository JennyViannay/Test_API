<?php

// GET USER ID 
function getUserId($string){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://codeofaninja.com/tools/find-instagram-id-answer.php?instagram_username={$string}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: InstagramdimashirokovV1.p.rapidapi.com",
            "x-rapidapi-key: 3038c2322amshbd28049ff1cb4b3p14dc77jsn0dd7720e19e9"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        return "cURL Error #:" . $err;
    } 
    return $response;
}

// GET FEED 
function getFeed($id){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://instagramdimashirokovv1.p.rapidapi.com/feed/$id/optional",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: InstagramdimashirokovV1.p.rapidapi.com",
            "x-rapidapi-key: 3038c2322amshbd28049ff1cb4b3p14dc77jsn0dd7720e19e9"
        ),
    ));
    $response = json_decode(curl_exec($curl));
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        return "cURL Error #:" . $err;
    } 
    return $response->edges;
}