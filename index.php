<?php

header('Access-Control-Allow-Origin: *');

include "xam-youtube-downloader.php";

if(isset($_GET['xam_url'])) {
    $video = $_GET['xam_url'];
    $youtube_links = new xam_youtube_downloader();

    $links_object = $youtube_links->xam_getLinks($video);

    foreach($links_object as $link) {
        $links[] = $link;
    }

    echo json_encode($links);
}else{
    echo "Please provide a Youtube video URL.";
}
?>