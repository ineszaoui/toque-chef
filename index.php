<?php
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($langue == 'fr') {
        header('location: ./fr/index.html');
        exit;
    } elseif ($langue == "en") {
        header('location: ./en/index.html');
        exit;
    } else {
        header('location: ./fr/index.html');
    }
?>