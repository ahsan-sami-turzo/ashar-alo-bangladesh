<style>
  canvas {
    display: block;
    vertical-align: bottom;
  }

  .text-content p {
    font-size: 50px;
    font-weight: bold;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
  }

  @media (max-width:480px) {
    .text-content p {
      font-size: 13px !important;
    }
  }
</style>
<!-- ***** Main Banner Area Start ***** -->
<section id="home">
  <div class="container-fluid" style="padding: 0px !important; margin 0px !important;">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="main-banner header-text" id="top">
          <div class="Modern-Slider">
            <div class="item">
              <div class="img-fill">
                <video autoplay loop muted id="myVideo" class="banner" opacity="10%;">
                  <source src="assets/video/candle.mp4" type="video/mp4">
                </video>
                <div class="text-content">
                  <p id="content"></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="scroll-down scroll-to-section"><a href="#features"><i class="fa fa-arrow-down"></i></a></div>
      </div>
    </div>
  </div>
  <p id="bannerText" hidden>
    <br> ASHAR ALO BANGLADESH
    <br> THRIVING LOCAL HEALTH CENTER
    <br> DEVHATA, SATKHIRA, BANGLADESH
  </p>
</section>
<script>
  var content = $('#bannerText').text()
  var ele = '<span> ' + content.split('').join('</span><span>') + '</span>'
  $(ele).hide().appendTo('#content').each(function (i) {
      $(this).delay(300 * i).css({
          display: 'inline',
          opacity: 0
      }).animate({
          opacity: 1
      }, 200)
  });
</script>