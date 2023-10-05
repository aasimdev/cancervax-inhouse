<?php
$API_key    = 'AIzaSyC5BWeQzlcGORCD5LEWsdCF5tyUvMOgNaA';

// Check if HTTPS is set and whether it's "on"
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

// Construct the URL for the YouTube search
$protocol = $is_https ? 'https' : 'http';
$current_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$showAllVideo = 1;
if($current_url !== 'http://localhost/cancervax-inhuose/videos/ceo-podcast/'){
    $showAllVideo = 0;
}

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);

// echo $vedioTitleFromURL;

$videos = include "../../data/podcast-data.php";

$filteredCEOPodcastVedios = array_filter($videos, function ($item) use ($vedioTitleFromURL) {
    return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public' && strtolower($item['title']) === $vedioTitleFromURL;
});



$GLOBALS['title'] = $vedioTitleFromURL. " - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";

include('../../header.php');

// Check if there are search results
if($showAllVideo == 1){
    ?>
    
<section class="cchatsbanner">
    <div class="container">
        <h1>Videos</h1>
    </div>
</section>


<section class="abtceo">
    <div class="container">
        <div class="abtceo-heading">
            <h2>CEO Podcast</h2>
        </div>
        <div class="abtceo-wrap">
            <div class="abt-ceo-img">
                <img src="./assets/img/Ryan-Davies.png" alt="ryan">
            </div>
            <p>Watch our CEO, Ryan Davies, chat with leaders and experts in the biotech industry about trends, insights as well as progress with CancerVAX</p>
        </div>
    </div>
</section>

<section class="cchats">
    <div class="container">
        <div class="row">
            <?php
            $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });
            foreach ($filteredCEOPodcast as $video) {
                $videoTitle = $video['title'];
                $videoID = $video['videoID'];
                $videoDate = $video['date'];
                echo '
                <div class="col-lg-6">
                    <div class="cchat">
                        <div class="cchat-box mb-4">
                                <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=' . $videoID . '"></a>
                                <div class="cchat-thumbnail thumbnail-overlay">
                                </div>
                                <i class="far fa-play-circle"></i>
                            </a>
                        </div>
                        <p class="mt-0">'.$videoDate.' - ' . $videoTitle . '</p>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
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
            <div class="col-lg-6">
                <div class="cchat">
                    <div class="cchat-box mb-4">
                        <a class="popup-youtube getThumbnail" href="https://www.youtube.com/watch?v=' . $videoID . '"></a>
                        <div class="cchat-thumbnail thumbnail-overlay">
                        </div>
                        <i class="far fa-play-circle"></i>
                    </a>
                    </div>
                    <p class="mt-0">' . $videoDate . ' - ' . $videoTitle . '</p>
                </div>
            </div>
            ';
        }
    } else {
        // No matching videos found
        echo 'No matching videos found.';
    }
}

include('../../footer.php');

