<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>

<section class="cchatsbanner">
    <div class="container">
        <h1>Videos</h1>
    </div>
</section>

<section class="abtceo">
    <div class="container">
        <div class="abtceo-heading">
            <h2>Short Videos</h2>
        </div>
    </div>
</section>

<section class="cchats shortVideos">
    <div class="container">
        <div class="row">

        <?php
            $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'short-videos' && $item['scope'] === 'public';
            });
            foreach ($filteredCEOPodcast as $video) {
                $videoTitle = $video['title'];
                $videoID = $video['videoID'];
                $videoDate = $video['date'];
                echo '
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="cchat">
                        <div class="cchat-box">
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
</section>



<?php
include('footer.php'); ?>