<?php
$page_name = basename($_SERVER['PHP_SELF']);
// Get the current domain URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $domain;

// Check if the script is running on localhost
if ($domain === 'localhost' || $domain === '127.0.0.1') {
    $full_url = $current_url . '/cancervax/';
} else {
    $full_url = $current_url . '/';
}
if ($page_name != "index.php") {
?>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-wrap">
                <p>Keep up with our progress by subscribing to our email newsletter!</p>
                <!-- <form action="./php/subscriber.php" method="POST" id="subscriber-form">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your email address...">
                    <button type="submit">Subscribe</button>
                </form> -->
                <div id="icontactSignupFormWrapper956">
                    <script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=956&cid=1868283&lid=5400&divid=icontactSignupFormWrapper956"></script>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
<div class="invest-footer">
    <div class="container">
        <p>This Reg A+ offering is made available through StartEngine Primary, LLC, member FINRA/SIPC. This investment is speculative, illiquid, and involves a high degree of risk, including the possible loss of your entire investment. You should read the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm#A_003" target="_blank" rel="noopener noreferrer">Selected Risks</a>, the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm" target="_blank" rel="noopener noreferrer">Offering Circular</a>, and <a href="https://www.sec.gov/edgar/browse/?CIK=1905495" target="_blank" rel="noopener noreferrer">Sec Edgar</a> Page before investing.</p>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row footerlinks">
                        <div class="col-sm-4">
                            <div class="footer-logo">
                                <a href="/">
                                    <img src="<?php echo  $full_url; ?>./assets/img/C-01-1.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="footer-link">
                                <h6>COMPANY</h6>
                                <ul class="links">
                                    <li>
                                        <a href="/about">About Us</a>
                                    </li>
                                    <li>
                                        <a href="/pipeline">Pipeline</a>
                                    </li>
                                    <li>
                                        <a href="/market">Market</a>
                                    </li>
                                    <li>
                                        <a href="/news">Newsroom</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="footer-link">
                                <ul class="links no-head">
                                    <li>
                                        <a href="/videos">Videos</a>
                                    </li>
                                    <li>
                                        <a href="/investors">Investors</a>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-info">
                                <h6>CONTACT US</h6>
                                <a href="tel:8053561810">(805) 356-1810</a>
                                <a href="mailto:info@cancervax.com">info@cancervax.com</a>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="footer-social">
                                <h6>FOLLOW US</h6>
                                <a href="https://www.facebook.com/people/Cancervax/100090179828482/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/cancervaxbiotech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/cancervax/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.youtube.com/@cancervax" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2023 CancerVax. All rights reserved</p>
        </div>
    </div>
</footer>

<!-- Team popup -->
<div class="modal fade" id="team">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamLabel"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pipeline-img-preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-end pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <img src="./assets/img/pipeline-virus-2-large.png" class="modal_img" alt="pipeline-virus-2">
            </div>
        </div>
    </div>
</div>

<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/particles.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/typed.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/main.js"></script>

</body>

</html>