<?php
    require_once 'conf.php';
    require_once 'functions.php';
    //$url = 'http://localhost:8080/view.php';
    $url = 'http://localhost:8081/tools/index.php';
    logMsg('Getting url: ' . $url,'debug');
    prph('Getting url: ' .$url);
    $post = curl_get($url); // this echo entire <html>...
    echo $post;
    logMsg('Finished: ' . $post,'debug');
