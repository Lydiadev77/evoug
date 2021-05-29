<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="asset/css/global.css">
    <link rel="stylesheet" href="asset/css/rebrand.css">
    <link rel="stylesheet" href="asset/css/style.css">
    
  
    <title>About Us</title>
  </head>
  <body>
  <?php include 'includes/header.php'?>
  <div class="container mt-5">
    <div class="hero-carousel">
      <div class="hero-carousel__item hero-carousel__vertical-bg" style="background-image: url('asset/img/about_banner.png');">
        <div class="hero-carousel__text-container hero-carousel__text-container--vertical-bg">
          <h1 class="hero-carousel__title hero-carousel__title--smaller">Executing what matters</h1>
          <p>At DXC Technology, we run the mission-critical systems that keep the world moving.</p>
          <a href="" class="hero-carousel__link link--btn-next link--btn-next--yellow strong">Read our company overview</a>
        </div>
      </div>
      
      <div class="hero-carousel__item hero-carousel__vertical-bg" style="background-image: url('asset/img/about_banner.png');">
        <div class="hero-carousel__text-container hero-carousel__text-container--vertical-bg">
          <h1 class="hero-carousel__title hero-carousel__title--smaller">Investing in our people</h1>
          <p>We cultivate a work environment that attracts, trains and retains some of the most skilled employees in today's workplace.</p>
          <a href="" class="hero-carousel__link link--btn-next link--btn-next--yellow">Learn More</a>
        </div>
      </div>
      
      <div class="hero-carousel__item hero-carousel__vertical-bg" style="background-image: url('asset/img/about_banner.png');">
        <div class="hero-carousel__text-container hero-carousel__text-container--vertical-bg">
          <h1 class="hero-carousel__title hero-carousel__title--smaller">Meet our partners</h1>
          <p> Partner Network provides our customers with unparalleled innovation.</p>
          <a href="/partner_network" class="hero-carousel__link link--btn-next link--btn-underline multiple-line strong" tabindex="0">Learn More</a>
        </div>
      </div>
      
    </div>
  </div>
  <div class="container border-bottom border-dark">  
      <div class="our-mission about-us__element about-us__our-mission">
        <div class="our-mission__content content-swap" data-spy="contentswap">
          <div class="our-mission__content__left content-swap__area active">
            <h2 class="our-mission__content__subtitle strong">Company Overview</h2>
            <div>
              <a id="swapper" class="arrow-link js-swapper content-swap__show-more">More</a>
            </div>
            <p class="content-swap__show-if-active">
              Learn about Evouge and what drives us, guides us and inspires us.
              <a href="" class="link--btn-next our-mission__content__link strong">Learn more</a>
            </p>
    
          </div>
          <div class="our-mission__content__right content-swap__area">
            <h2 class="our-mission__content__subtitle strong">Our History</h2>
            <div>
              <a id="swapper" class="arrow-link js-swapper content-swap__show-more">More</a>
            </div>
            <p class="content-swap__show-if-active">
                Learn about our long history of innovation, service and value.
              <a href="/about_us/ds/140019-dxc_history" class="link--btn-next our-mission__content__link strong">Learn more</a>
            </p>
          </div>
        </div>
      </div>
  </div>
  <div class="container border-bottom border-dark" style="padding-bottom: 80px;">
    <div class="title">
      <h2>About</h2>
      <span>Visit our corporate pages and learn more about us.</span>
  </div>

  <div class="row stackable-row no-margin-bottom no-margin-top">
      <div class="col-md-3 stack-nav">
          <a class="btn0 btn0-link active" href="">
              <button class="btn btn-stack">Company Overview</button>
          </a>
          <a class="btn0 btn0-link" href="">
              <button class="btn btn-stack">Enterprise Technology Stack</button>
          </a>
          <a class="btn0 btn0-link" href="">
              <button class="btn btn-stack">Our Partner Network</button>
          </a>
      </div>
      <div class="col-md-9 content-wrapper">
      <div class="stack-nav-content active">
          <button class="btn btn-stack stack-nav-inset">Company Overview</button>
          <div class="content-container font--base">
              <div class="hero">
                  <img class="img-responsive" src="asset/img/about_us2.png">
              </div>
              <h1 class="header-block__heading strong">Get financial news, reports and information for current and
                  prospective investors.</h1>
              <a href=""
                  class="link--btn-next strong stack-nav-content__rounded-link text-uppercase">Learn More</a>
          </div>
      </div>
      <div class="col-md-9 stack-nav-content">
          <button class="btn btn-stack stack-nav-inset">Enterprise Technology Stack</button>
          <div class="content-container font--base">
              <div class="hero">
                  <img class="img-responsive" src="asset/img/about_us2.png">
              </div>
              <h1 class="header-block__heading strong">Read the latest news and analyst reports, and connect
                  with us on social media.</h1>
              <a href=""
                  class="link--btn-next strong stack-nav-content__rounded-link text-uppercase">Learn More</a>
          </div>
      </div>
      <div class="col-md-9 stack-nav-content">
          <button class="btn btn-stack stack-nav-inset">Our Partner Network</button>
          <div class="content-container font--base">
              <div class="hero">
                  <img class="img-responsive" src="asset/img/about_us2.png">
              </div>
              <h1 class="header-block__heading strong">Join us at upcoming global events.</h1>
              <a href=""
                  class="link--btn-next strong stack-nav-content__rounded-link text-uppercase">View events</a>
          </div>
      </div>
      
      </div>
      

  </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script src="asset/js/jquery-3.6.0.min.js"></script>    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="asset/js/rebrandcustom-bundle.js"></script>
    
  </body>
</html>