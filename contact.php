<?php
$GLOBALS['title'] = "Contact - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-title">
                    <span>CancerVAX, Inc., a pre-clinical biotechnology company working with UCLA to develop breakthrough immunotherapy cancer treatments that use the body’s immune system to fight cancer. Working with a team of experienced cancer researchers and physicians at UCLA, we are developing a pipeline that includes three innovative projects: (1) treating Ewing sarcoma, a deadly children’s cancer, (2) a Universal Cancer Vaccine that will detect, mark, and destroy only cancer cells while leaving healthy cells in-tact, and (3) a low cost Universal CAR-T Cell Platform that can reprogram natural immune T-cells inside the body to seek and destroy targeted cancer cells. All of our immunotherapy technologies are designed to be delivered as injections. We look forward to the day when treating cancer will be as simple as getting a flu shot – a better way to treat cancer. </span>
                    <h1>Contact us</h1>
                    <p>We would love to hear from you</p>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contact-info-item">
                                <h3>CALIFORNIA</h3>
                                <p><a href="https://goo.gl/maps/5xZJ6Byy4tZt2P7AA" target="_blank" rel="noopener noreferrer">351 Paseo Nuevo, Floor 2 Santa Barbara, CA 93101</a></p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="contact-info-item">
                                <h3>CONTACT</h3>
                                <p><a href="tel:8053561810">(805) 356-1810</a> <br>
                                    <a href="mailto:info@cancervax.com">info@cancervax.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contact-info-item">
                                <h3>UTAH</h3>
                                <p><a href="https://goo.gl/maps/5Thg5NvcUgT5S5zJ9" target="_blank" rel="noopener noreferrer">2701 N. Thanksgiving Way Lehi, UT 84043</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <h2>Send a message</h2>
                    <form action="./php/smartprocess.php" id="cForm" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                        </div>
                        <div class="mb-5">
                            <label for="message" class="form-label">Your message (optional)</label>
                            <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('footer.php'); ?>