<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); 
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
include('footer.php'); ?>