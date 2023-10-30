<?php
$GLOBALS['title'] = "Newsroom - CancerVax";
$GLOBALS['desc'] = "";
$videos = include "data/podcast-data.php";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="marketbanner" style="background-image: url(./assets/img/new-bg.jpg);">
    <div class="container">
        <h1>Newsroom</h1>
    </div>
</section>


<section class="news">
    <div class="container">
        <h4>Major Press Releases</h4>
        <div class="row">
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="ucart-announcement.php"></a>
                    <span>September 12, 2023 </span>
                    <h3>CancerVAX Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancervax-reports-significant-progress-on-universal-cancer-vaccine-development-at-ucla.php"></a>
                    <span>June 27, 2023</span>
                    <h3>CancerVAX Reports Significant Progress on Universal Cancer Vaccine Development at UCLA</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <a href="cancerax-reports-positive-progress-on-kids-cancer-immunotherapy-treatment.php"></a>
                    <span>June 12, 2023</span>
                    <h3>CancerVAX Reports Positive Progress on Kids Cancer Immunotherapy Treatment </h3>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="nCommentary">
    <div class="container">
        <div class="nCommentary-heading">
            <h3>News Commentary</h3>
            <!-- <a href="#">See All</a> -->
        </div>
        <div class="row">
            <?php
            $filteredlatestNewsCommentary = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary' && $item['scope'] === 'public';
            });
            $filteredLatestNewsCommentry = array_slice($filteredlatestNewsCommentary, 0, 3);
            foreach ($filteredLatestNewsCommentry as $video) {
                echo "<div class=\"col-lg-4 col-md-6\">
                <div class=\"cchat\">
                <div class=\"cchat-box\">
                <a href=\"videos/news-commentary/{$video['slug']}\"></a>
                    <div class=\"cchat-thumbnail thumbnail-overlay\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <i class=\"far fa-play-circle\"></i>
                </div>            
                <p>{$video['date']} - {$video['title']}</p>
                </div>
                </div>";
            }
            ?>



        </div>
    </div>
</section>
<section class="news pb-0">
    <div class="container">
        <h4>CancerVAX In The News</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://valiantceo.com/ryan-davies-cancervax/" target="_blank"></a>
                    <img src="./assets/img/news-logo-7.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:20px;">October 12, 2023</span>
                    <h3>Ryan Davies Shares Insights on CancerVAX and the Future of Cancer Treatment</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pharmacytimes.com/view/challenges-and-opportunities-in-the-treatment-of-ewing-sarcoma" target="_blank"></a>
                    <img src="./assets/img//pharmacy.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:20px;">October 5, 2023</span>
                    <h3>Challenges and Opportunities in the Treatment of Ewing Sarcoma</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.pacbiztimes.com/2023/10/06/santa-barbara-firm-partners-with-ucla-for-new-cancer-treatments/" target="_blank"></a>
                    <img src="./assets/img/pacific.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:30px;">OCTOBER 6, 2023</span>
                    <h3>Santa Barbara firm partners with UCLA for new cancer treatments</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://rescue.ceoblognation.com/2023/09/13/18-entrepreneurs-share-some-of-the-best-leadership-ceo-hacks-and-resources/" target="_blank"></a>
                    <img src="./assets/img/news-logo-5.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">September 26, 2023</span>
                    <h3>18 Entrepreneurs Share Some of The Best Leadership CEO Hacks and Resources</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/health-tech/cancer-vaccines-where-are-we-now-and-where-are-we-going/" target="_blank"></a>
                    <img src="./assets/img/news-logo-6.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:15px;">September 23, 2023</span>
                    <h3>Cancer Vaccines: Where are We Now and Where are We Going?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://coruzant.com/profiles/ryan-davies/" target="_blank"></a>
                    <img src="./assets/img/news-logo-4.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">August 14, 2023</span>
                    <h3>Serial Entrepreneur Using Science to Tackle the Biggest Disease with Founder Ryan Davies | Ep 693</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.labiotech.eu/in-depth/sarcoma-research-advances/" target="_blank"></a>
                    <img src="./assets/img/news-logo-3.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:25px;">July 24, 2023</span>
                    <h3>Labiotech: Sarcoma Research: Is a Breakthrough in Sight?</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>
                    <img src="./assets/img/news-logo-2.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:13px;">July 14, 2023</span>
                    <h3>Healthcare Business Today: Scientists Have Found The Silver Bullet for Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>
                    <img src="./assets/img/news-logo-1.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:25px;">June 22, 2023</span>
                    <h3>HealthLeaders: CancerVax CEO Sees a Homerun With Breakthrough Cancer Vaccine</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthcarebusinesstoday.com/scientists-have-found-the-silver-bullet-for-pediatric-cancer/" target="_blank"></a>
                    <img src="./assets/img/news-logo-2.png" alt="news" class="news-logo-n " style="heiht:50px;">
                    <span style="margin-top:8px;">July 14, 2023</span>
                    <h3>Scientists Have Found The Silver Bullet For Pediatric Cancer</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="https://www.healthleadersmedia.com/pharma/cancervax-ceo-sees-home-run-breakthrough-universal-cancer-vaccine" target="_blank"></a>
                    <img src="./assets/img/news-logo-1.png" alt="news" class="news-logo-n" style="heiht:50px;">
                    <span style="margin-top:23px;">JUNE 22, 2023</span>
                    <h3>CancerVax CEO Sees a Home Run With Breakthrough Universal Cancer Vaccine</h3>
                </div>
            </div>

        </div>
    </div>
</section>






<section class="news">
    <div class="container">
        <h4>Press Releases</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="ucart-announcement.php"></a>
                    <span>September 12, 2023 </span>
                    <h3>CancerVAX Expands Development Pipeline to Include a Universal CAR-T Cell Platform</h3>
                    <p> CancerVAX, Inc., a pre-clinical biotechnology company working with UCLA to develop breakthrough immunotherapy cancer treatments that use the body’s immune system to fight cancer, today announced an expansion of its development pipeline to include a Universal CAR-T Cell Platform that can dramatically lower the cost of CAR-T cell cancer therapies</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discussed-cancer-immunotherapy-with-ucla-physician-scientist.php"></a>
                    <span>August 24, 2023 </span>
                    <h3>CancerVAX CEO Ryan Davies Discussed Cancer Immunotherapy with UCLA Physician-Scientist</h3>
                    <p>CancerVAX, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced that in a recent Company podcast its CEO, Ryan Davies, spoke with and UCLA cancer physician and researcher, Dr. Steven Jonas, about his journey to becoming both a practicing cancer doctor and active cancer researcher</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="world-renowned-biomedical-professor-jonathan-lakey-joins-cancervax-board-of-advisors.php"></a>
                    <span>July 25, 2023 </span>
                    <h3>World Renowned Biomedical Professor Jonathan Lakey Joins CancerVAX Board of Advisors</h3>
                    <p>Dr. Lakey has been recognized nationally and internationally for his groundbreaking research in cell and tissue transplantation for patients suffering from diabetes and cancer</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discusses-biotech-entrepreneurship-with-pyxis-oncology-ceo-dr-lara-sullivan.php"></a>
                    <span>July 10, 2023 </span>
                    <h3>CancerVAX CEO Ryan Davies Discusses Biotech Entrepreneurship with Pyxis Oncology CEO Dr. Lara Sullivan</h3>
                    <p>The two industry leaders focus on navigating the biotech industry and immuno-oncology research</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-reports-significant-progress-on-universal-cancer-vaccine-development-at-ucla.php"></a>
                    <span>June 27, 2023</span>
                    <h3>CancerVAX Reports Significant Progress on Universal Cancer Vaccine Development at UCLA</h3>
                    <p>Three separate teams of physician scientists at UCLA working on three different parts of the project have made significant progress and are ready to merge their work into a complete proof-of-concept vaccine construct </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="biotech-executive-michael-dmith-discusses-the-fda-drug-development-process-with-cancervax-ceo-ryan-davies.php"></a>
                    <span>June 16, 2023</span>
                    <h3>Biotech Executive Michael Smith Discusses the FDA Drug Development Process with CancerVAX CEO Ryan Davies </h3>
                    <p>Michael Smith comments on the growth of immunotherapy and sees the required FDA development phases as a benefit to small biotech firms such as CancerVax</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancerax-reports-positive-progress-on-kids-cancer-immunotherapy-treatment.php"></a>
                    <span>June 12, 2023</span>
                    <h3>CancerVAX Reports Positive Progress on Kids Cancer Immunotherapy Treatment </h3>
                    <p>LEHI, Utah, June 12, 2023 (GLOBE NEWSWIRE) -- CancerVAX, Inc., developer of a breakthrough universal cancer vaccine that uses the body’s immune system to fight cancer, today announced</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="biotech-entrepreneur-and-venture-capitalist-dinesh-patel-discusses-therapeutics-and-medical-devices-with-cancervax-ceo-ryan-davies.php"></a>
                    <span>May 17, 2023</span>
                    <h3>Biotech Entrepreneur and Venture Capitalist Dinesh Patel Discusses Therapeutics and Medical Devices with CancerVAX CEO Ryan Davies</h3>
                    <p>Lehi, UT – May 17, 2023 – CancerVAX, developer of a breakthrough universal cancer vaccine that will use the body’s immune system to fight cancer, today reported that the Company’s CEO, Ryan Davies</p>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="news-item">
                    <a href="former-pfizer-legal-counsel-discusses-gene-therapy-with-cancervax-ceo-ryan-davies.php"></a>
                    <span>April 20, 2023</span>
                    <h3>Former Pfizer Legal Counsel Discusses Gene Therapy with CancerVAX CEO Ryan Davies</h3>
                    <p>Stephen Diamond, Senior Vice President, General Counsel, and Secretary of Freeline, discussed his unique path from the legal and business worlds to gene therapy and next-generation therapeutics.</p>

                </div>

            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-discusses-cancer-research-with-leading-pediatric-hematologic-oncologist.php"></a>
                    <span>April 12, 2023</span>
                    <h3>CancerVAX CEO Ryan Davies Discusses Cancer Research with Leading Pediatric Hematologic Oncologist</h3>
                    <p>Dr. Satiro De Oliveira, a principal investigator in the Company’s cancer research program at UCLA, comments about the importance of cancer immunotherapy</p>

                </div>

            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-lands-byron-elton.php"></a>
                    <span>April 3, 2023</span>
                    <h3>CancerVAX Lands Byron Elton</h3>
                    <p>Experienced business executive to help establish the Company as a significant force in the field of cancer research</p>

                </div>

            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-speaks-with-university-of-utah-chemistry-professor-about-the-future-of-fherapeutic-research.php"></a>
                    <span>March 24, 2023</span>
                    <h3>CancerVax CEO Ryan Davies Speaks with University of Utah Chemistry Professor about the Future of Therapeutic Research</h3>
                    <p>Dr. Ryan Looper, a chemistry Professor at the University of Utah, sat down with CancerVAX CEO Ryan Davies to discuss the future of novel therapeutics and how the industry can encourage young scientists to enter the field.</p>

                </div>

            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="leading-diabetes-researcher-speaks-groundbreaking.php"></a>
                    <span>March 22, 2023</span>
                    <h3>Leading Diabetes Researcher Speaks on his Groundbreaking ‘Edmonton Protocol’ with CancerVAX CEO Ryan Davies</h3>
                    <p>Dr. Jonathan Lakey, Professor in University of California – Irvine’s Surgery and Biomedical Engineering departments, spoke with CancerVAX CEO Ryan Davies on his accomplishments in scientific research and their impact on the world</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-ceo-ryan-davies-sits-down-with-oncology-research-leader.php"></a>
                    <span>March 20, 2023</span>
                    <h3>CancerVAX CEO Ryan Davies Sits Down with Oncology Research Leader</h3>
                    <p>Dr. David Bearss, an oncology researcher and biotech start-up founder, spoke with CancerVAX CEO Ryan Davies on the future of oncology therapeutics</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-universal-cancer-vaccine-being-developed-by-UCLA.php"></a>
                    <span>March 17, 2023</span>
                    <h3>CancerVax Universal Cancer Vaccine Being Developed by UCLA</h3>
                    <p>The UCLA research team, which includes Dr. Steven Jonas, Dr. Christopher Seet, Dr. Satiro De Oliveira and Dr. Christopher Denny, will leverage cutting-edge technologies to develop a breakthrough universal cancer vaccine (UCV) that will train the body to target and destroy cancer cells.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-files-non-provisional-patent-for-universal-cancer-vaccine.php"></a>
                    <span>March 16, 2023</span>
                    <h3>CancerVax Files Non-Provisional Patent for Universal Cancer Vaccine</h3>
                    <p>The Company’s patent application describes how it plans to leverage cutting-edge CRISPR and mRNA technologies to develop a breakthrough universal cancer vaccine (UCV)</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-announces-research-program-to-develop-its-second-immunotherapy-cancer-treatment.php"></a>
                    <span>August 31, 2022</span>
                    <h3>CancerVAX Announces Research Program to Develop Its Second Immunotherapy Cancer Treatment</h3>
                    <p>The Company has entered into a Sponsored Research Agreement with UCLA to develop a new cancer immunotherapy universal cancer vaccine.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-files-provisional-patent-for-a-universal-cancer-vaccine.php"> </a>
                    <span>October 6, 2021</span>
                    <h3>CancerVAX Files Provisional Patent for a Universal Cancer Vaccine</h3>
                    <p>The Company plans to leverage cutting-edge CRISPR and mRNA technologies in its quest to develop a breakthrough universal cancer vaccine (UCV).</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="biotech-executive-joins-cancervax.php"> </a>
                    <span>October 1, 2021</span>
                    <h3>Biotech Executive Joins CancerVAX</h3>
                    <p>New CEO Ryan Davies will lead the Company’s development of its breakthrough immunotherapy treatment SANTA BARBARA, CA – October 1, 2021 – CancerVAX, Inc.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-announces-research-program.php"> </a>
                    <span>May 26, 2021</span>
                    <h3>CancerVAX Announces Research Program</h3>
                    <p>The Company has entered into an agreement with UCLA to develop an immunotherapy breakthrough targeted at treating Ewing sarcoma, a rare but deadly soft tissue and bone cancer that primarily affects children and young adults.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-closes-series-a-funding-round.php"> </a>
                    <span>March 30, 2021</span>
                    <h3>CancerVAX Closes Series A Funding Round</h3>
                    <p>SANTA BARBARA, CA – March 30, 2021 – CancerVAX, Inc., a developer of immunotherapy cancer treatments that use the body’s immune system to fight cancer, today announced it has closed its $2 million series A funding round.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="news-item">
                    <a href="cancervax-launched.php"> </a>
                    <span>March 23, 2021</span>
                    <h3>CancerVAX Launched</h3>
                    <p>The Company was founded by experienced healthcare executive Lindsay Mann</p>

                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('footer.php'); ?>