<?php
$API_key    = 'AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA';

// Check if HTTPS is set and whether it's "on"
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

// Construct the URL for the YouTube search
$protocol = $is_https ? 'https' : 'http';
$current_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current_url_check = $protocol . "://" . $_SERVER['HTTP_HOST'];
$domain = $_SERVER['HTTP_HOST'];
$showAllVideo = 1;

if ($domain === 'localhost' || $domain === '127.0.0.1') {
    if($current_url !== 'http://localhost/cancervax/videos/cancer-survivor-stories/'){
        $showAllVideo = 0;
    }
} else {
    if($current_url !== $current_url_check . '/videos/cancer-survivor-stories/'){
        $showAllVideo = 0;
    }
}

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);

// echo $lastPart;

$videos = include "../../data/podcast-data.php";

$filteredCEOPodcastVedios = array_filter($videos, function ($item) use ($lastPart) {
    return $item['category'] === 'cancer-survivor-stories' && strtolower($item['slug']) === $lastPart;
});



$GLOBALS['title'] = ucwords($vedioTitleFromURL). " - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";

include('../../header.php');

// Check if there are search results
if($showAllVideo == 1){
    ?>
    

    <section class="cchatsbanner">
    <div class="container">
        <h1>Cancer Survivor Stories</h1>
    </div>
</section>


<section class="abtceo">
    <div class="container">
        <div class="abtceo-wrap">
            <div class="abt-ceo-img">
                <img src="../../assets/img/byron-cvax.png" alt="ryan">
            </div>
            <p>Our
                CMO, Byron Elton, interviews cancer survivors about their personal
                experiences battling cancer
            </p>
        </div>
    </div>
</section>


<section class="cchats">
    <div class="container">
        <div class="row">
            
            <?php
            $latestCancerSurvivorStories = array_filter($videos, function ($item) {
                return $item['category'] === 'cancer-survivor-stories' && $item['scope'] === 'public';
            });
            foreach ($latestCancerSurvivorStories as $video) {
                echo "<div class=\"col-lg-6\">
                <div class=\"cchat\">
                    <div class=\"cchat-box mb-4\">
                    <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                    <a href=\"{$video['slug']}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                        <i class=\"far fa-play-circle\"></i>
                    </div>
                    <p class=\"mt-0\">{$video['date']} - {$video['title']}</p>
                </div>
            </div>";
            }
            ?>

        </div>
    </div>
</section>

    <?php
}
else{
    if (count($filteredCEOPodcastVedios) > 0) {
        // There are matching videos in $filteredCEOPodcastVedios
        foreach ($filteredCEOPodcastVedios as $video) {
            // Display the matching videos
            $videoTitle = $video['title'];
            $videoID = $video['videoID'];
            $videoDate = $video['date'];
          
            echo '
            <section class="podcast-detail">
            <div class="container">
                <div class="podcast-detail-wrap">
                <h1>' . $videoTitle . ' </h1>
                    <p></p>
                     <div class="podcast-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoID . '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> 
                </div>
            </div>
        </section>
            ';
        }
    } else {
        // No matching videos found
        echo 'No matching videos found.';
    }
}

include('../../footer.php');




