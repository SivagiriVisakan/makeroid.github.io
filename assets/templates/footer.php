<?php
if (isset($_POST['btn-subscribe'])) {
  $post = array(
    'email' => urlencode($_POST['email'])
  );
	$ch = curl_init();
  $headers[]  = 'X-Cachet-Token: ';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt_array($ch, array(
    CURLOPT_URL => "https://status.makeroid.io/api/v1/subscribers",
    CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_SSL_VERIFYPEER => false
  ));
  $result = curl_exec($ch);
  curl_close($ch);
}
?>
<section class="footer4 cid-qqY4y4hBB8 mbr-reveal" id="footer4-5" data-rv-view="115">
    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">

                        <img src="/assets/images/logo-70x70.png" alt="Mobirise" title="" media-simple="true">

                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7"><strong>
                    MAKEROID</strong></p>
                <p class="mbr-text mbr-fonts-style display-7">Maked with &lt;3</p>
            </div>
            <div class="col-md-4 col-sm-8">
              <a class="twitter-timeline" data-height="200" data-link-color="#981CEB" href="https://twitter.com/MakeroidBuilder">Tweets by MakeroidBuilder</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
              <form role="form" method="post">
                <p class="mb-4 foot-title mbr-fonts-style display-7"><strong>
                    SUBSCRIBE
                </strong></p>
                <p class="mbr-text mbr-fonts-style display-7">
                    Get updates of our service
                </p>
                <div class="mb-5" data-form-type="formoid">

                    <form class="mbr-form" method="post" role="form" data-form-type="formoid">

                        <div class="mbr-subscribe mbr-subscribe-dark input-group">
                            <input type="email" class="form-control" name="email" required="" data-form-field="Email" placeholder="Your email" id="email-footer4-5">
                            <span class="input-group-btn mx-2">
                            <button type="submit" name="btn-subscribe" class="btn btn-sm btn-primary display-4">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
              </form>
                <p class="mb-4 mbr-fonts-style foot-title display-7"></p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com/MakeroidBuilder" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">

                                <a href="https://instagram.com/MakeroidBuilder" target="_blank"><span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" media-simple="true"></span></a>

                        </div>
                        <div class="soc-item">

                                <a href="https://t.me/Makeroid" target="_blank"><span class="mbr-iconfont mbr-iconfont-social socicon-telegram socicon" media-simple="true"></span></a>

                        </div>



                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Makeroid - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
  <!--<input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience">-->
<?php include_once("scripts.php"); ?>

</body>
</html>
