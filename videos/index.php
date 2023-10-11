<?php
$GLOBALS['title'] = "Videos - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "../data/podcast-data.php";
include('../header.php'); ?>

<section class="cchatsbanner">
    <div class="container">
        <h1>Videos</h1>
    </div>
</section>

<div class="videoCategories">

    <div class="container">
        <div class="trend-video">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="cchat">
                        <div class="cchat-box mb-4" data-video="trend">
                            <a class="getThumbnail" href="../expanded-ucla-pipeline.php"></a>
                            <div class="cchat-thumbnail thumbnail-overlay">
                                <img src="//img.youtube.com/vi/RJYGOJSKKLk/maxresdefault.jpg" class="object-fit-contain" alt="Cancervax">
                            </div>
                            <i class="far fa-play-circle"></i>
                            <div class="trend-video-ucla">
                                <img src="./assets/img/ucla.png" alt="ucla">
                            </div>
                        </div>
                        <p class="mt-0">CancerVAX CEO Discusses Expanded Pipeline at UCLA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="vCatBox">
                    <a href="#news-commentary">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/news-commentary.png" alt="video">
                        </div>
                        <span>News <br> Commentary</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="vCatBox">
                    <a href="#ceo-podcast">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/ceo-podcast.png" alt="video">
                        </div>
                        <span>CEO Podcast</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="vCatBox">
                    <a href="#cancer-survivor-stories">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/cancer-survivor-stories.png" alt="video">
                        </div>
                        <span>Cancer Survivor <br>
                            Stories
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="vCatBox">
                    <a href="#short-videos">
                        <div class="vCatBox-thumb">
                            <img src="../assets/img/short-videos.png" alt="video">
                        </div>
                        <span>Short
                            Videos
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="nCommentary theme-bg" id="ceo-podcast">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>CEO Podcast</h3>
            <a href="./ceo-podcast">See All</a>
        </div>
        <div class="row">
            <?php
            $filteredlatestCeoPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });

            usort($filteredlatestCeoPodcast, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });

            $latestCeoPodcast = array_slice($filteredlatestCeoPodcast, 0, 4);
            foreach ($latestCeoPodcast as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box mb-4\">
                <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                <a href=\"ceo-podcast/{$string}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p class=\"mt-0\" >{$video['date']} - {$video['title']}</p>
                </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>

<section class="nCommentary theme-bg" id="news-commentary">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>News Commentary</h3>
            <a href="./news-commentary">See All</a>
        </div>
        <div class="row">
            <?php
            $categories = ['news-commentary'];

            $filteredNewsCommentaryVideos = array_filter($videos, function ($item) use ($categories) {
                // Check if the category is in the list and the scope is public, but not "short-videos"
                return in_array($item['category'], $categories) && $item['scope'] === 'public' && $item['category'] !== 'short-videos';
            });

            // Sort the filtered videos by date in descending order
            usort($filteredNewsCommentaryVideos, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });

            // Take the latest 4 videos for "news-commentary"
            $latestNewsCommentary = array_slice($filteredNewsCommentaryVideos, 0, 4);

            foreach ($latestNewsCommentary as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"cchat\">
            <div class=\"cchat-box mb-4\">
            <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
            <a href=\"news-commentary/{$string}\"></a>
                <div class=\"cchat-thumbnail thumbnail-overlay\">
                <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                </div>
                <i class=\"far fa-play-circle\"></i>
            </div>            
            <p class=\"mt-0\" >{$video['date']} - {$video['title']}</p>
            </div>
        </div>";
            }
            ?>
        </div>

    </div>
</section>



<section class="nCommentary theme-bg" id="cancer-survivor-stories">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>Cancer Survivor Stories</h3>
            <a href="./cancer-survivor-stories">See All</a>
        </div>
        <div class="row">

            <?php
            $filteredlatestCancerSurvivorStories = array_filter($videos, function ($item) {
                return $item['category'] === 'cancer-survivor-stories' && $item['scope'] === 'public';
            });
            usort($filteredlatestCancerSurvivorStories, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });

            $latestCancerSurvivorStories = array_slice($filteredlatestCancerSurvivorStories, 0, 4);
            foreach ($latestCancerSurvivorStories as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"cchat\">
                    <div class=\"cchat-box mb-4\">
                    <a href=\"cancer-survivor-stories/{$string}\"></a>
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

<section class="nCommentary theme-bg" id="short-videos">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>Short Videos</h3>
            <a href="./short-videos">See All</a>
        </div>
        <div class="row">

            <?php
            $filteredlatestShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-videos' && $item['scope'] === 'public';
            });
            usort($filteredlatestShortVideos, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });
            
            $latestCancerShortVideos = array_slice($filteredlatestShortVideos, 0, 4);
            foreach ($latestCancerShortVideos as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box mb-4\">
                <a class=\"popup-youtube getThumbnail\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                <a href=\"short-videos/{$string}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p class=\"mt-0\" >{$video['date']} - {$video['title']}</p>
                </div>
                </div>";
            }
            ?>

        </div>
    </div>
</section>



<?php
include('../footer.php'); ?>