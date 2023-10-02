<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php');

$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            putenv("$key=$value");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
}

$API_key = getenv('API_KEY');
$channelID = getenv('CHANNEL_ID');
$CEO_PODCAST_ID = getenv('CEO_PODCAST_ID');

$maxResults = 1000000;

// $video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $channelID . '&maxResults=' . $maxResults . '&key=' . $API_key . ''));
$ceo_podcasts = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=' . $maxResults . '&playlistId=' . $CEO_PODCAST_ID . '&key=' . $API_key . ''));
?>


<section class="nCommentary theme-bg">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>CEO Podcast</h3>
            <a href="/ceo-podcast">See All</a>
        </div>
        <div class="row">
            <?php
            foreach ($ceo_podcasts->items as $item) {

                //Embed video
                if (isset($item->id)) {
                    $titleCleaned = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $item->snippet->title));
                    $titleCleaned = rtrim($titleCleaned, '-');
                    echo ' <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="cchat">
                        <div class="cchat-box mb-4">
                        <a href="videos/ceo-podcast/' . $titleCleaned . '"></a>
                        <div class="cchat-thumbnail thumbnail-overlay">
                            <img src=' . $item->snippet->thumbnails->high->url . ' />
                        </div>
                        <i class="far fa-play-circle"></i>
                    </div>
                            <p class="mt-0">' . $item->snippet->title . '</p>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</section>





<?php
include('footer.php'); ?>