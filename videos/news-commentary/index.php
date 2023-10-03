<?php
$API_key    = 'AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA';

// Check if HTTPS is set and whether it's "on"
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

// Construct the URL for the YouTube search
$protocol = $is_https ? 'https' : 'http';
$current_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);

// Perform a YouTube search using the title as a keyword
$search_results = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?q=' . urlencode($vedioTitleFromURL) . '&key=' . $API_key . '&part=snippet'));

$GLOBALS['title'] = $search_results->items[0]->snippet->title . " - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";


include('../../header.php');

// Check if there are search results
if (!empty($search_results->items)) {
    // Extract the video ID of the first result
    $video_id = $search_results->items[0]->id->videoId;

    echo '
    <section class="podcast-detail">
    <div class="container">
        <div class="podcast-detail-wrap">
            <h1>' . $vedioTitleFromURL . ' </h1>
            <h1>' . $video_list->items[0]->snippet->title . ' </h1>
            <p></p>
             <div class="podcast-video">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>;
            </div> 
        </div>
    </div>
</section>
    ';
} else {
    // No matching video found
    echo 'Video not found.';
}

include('../../footer.php');
