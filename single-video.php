<?php
$API_key    = 'AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA';
$id = $_GET['v'];
$video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?id=' . $id . '&key=' . $API_key . '&part=snippet'));
$GLOBALS['title'] = $video_list->items[0]->snippet->title . " - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";


include('header.php');

if (isset($_GET['v'])) {
    echo '
    <section class="podcast-detail">
    <div class="container">
        <div class="podcast-detail-wrap">
            <h1>' . $video_list->items[0]->snippet->title . ' </h1>
            <p></p>
             <div class="podcast-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $id . '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div> 
        </div>
    </div>
</section>
    ';
}
include('footer.php');
