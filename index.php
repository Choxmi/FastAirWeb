<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Fastair</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Gallery Resources -->
  <link rel="stylesheet" href="assets/css/gallery/photoswipe.css">
  <link rel="stylesheet" href="assets/css/gallery/default-skin/default-skin.css">
  <script src="assets/js/gallery/photoswipe.min.js"></script>
  <script src="assets/js/gallery/photoswipe-ui-default.min.js"></script>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/gallery.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">

  <script src="https://kit.fontawesome.com/41c4e311cb.js" crossorigin="anonymous"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    let pages = [];
    let pages_original = [];
    let retrieved = null;
    let productIndexPerPage = 39;
  </script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="assets/js/gallery.js"></script>
  <script src="assets/js/scroll.js"></script>
  <script src="assets/js/animatedModal.min.js"></script>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <div style="display: flex;position: absolute;padding-left: 25px;height: 100%;">
      <a class="navbar-brand" href="index.html">
        <img loading="lazy" src="./assets/images/logo.png" style="height: 100%;" />
      </a>
      <div class="details">
        <p class="details-title">FASTAIR SERVICES PTY LTD</p>
        <p class="details-sub">GLOBAL PROCUREMENT & LOGISTICS</p>
        <p class="details-sub">ESTABLISHED 1977</p>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg" style="height: 100%;">
      <div class="container" style="height: 100%;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="height: 100%;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="drop-link" href="#our_business">About Us</a>
              <div class="row drop-row">
                <div class="col-sm-4 right-bordered green-colored" style="display:flex; align-items:center;">
                  <h2>About Us</h2>
                </div>
                <div class="col-sm-4 grid-display green-colored">
                  <a href="#our_business">OUR BUSINESS</a>
                  <a href="#industries">Industries Serviced</a>
                  <a href="#history">History</a>
                  <a href="#charities">FastAir Charities</a>
                </div>
                <div class="col-sm-4 grid-display green-colored">
                  <a href="#aim">We Aim to Provide</a>
                  <a href="#products">Products</a>
                  <a href="#management">Management</a>
                  <a href="#green">Fastair Green Zone</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#logistics">Logistics</a>
              <div class="row drop-row">
                <div class="col-sm-4 right-bordered green-colored" style="display:flex; align-items:center;">
                  <h2>Logistics</h2>
                </div>
                <div class="col-sm-4 grid-display green-colored">
                  <a href="#logistics">Packing & Creating</a>
                </div>
                <div class="col-sm-4 grid-display green-colored">
                  <a href="#logistics">Export</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#handicart">Handi-Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item quote-cls">
              <a class="filled-button" id="reqBtn" href="#requestModal">Request a Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text" id="home">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <!-- <div class="text-content">
          <h4>WELCOME TO</h4>
          <h2>FastAir</h2>
        </div> -->
      </div>
      <div class="banner-item-02">
        <!-- <div class="text-content small-heading left-aligned with-padding">
          <h4>Who We Are</h4>
          <h2>Our family owned company has continued to maintain close and personal contacts with our clients
            throught the Asia Pacific Region since 1977. As one of the longest serving suppliers in this field we have
            pioneered the industry and continue to lead the way.</h2>
        </div> -->
      </div>
      <div class="banner-item-03">
        <!-- <div class="text-content small-heading right-aligned with-padding">
          <h4>Our Team</h4>
          <h2>Our highly skilled team of people include those with years of service within this area, with technical
            expertise and acknowldge of local conditions together with a young and enthusiastic support staff. The
            Product we offer are of high quality and keenly priced. New technology has been embraced and we are
            constantly upgrading our system to ensure that our efficiency is kept at peak levels.</h2>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <!-- About Starts here -->

  <div class="best-features about-features">
    <div class="container" style="max-width: 90%;">
      <!-- <div class="row" id="description">
        <div class="col-md-4 margined">
          <div class="text-content small-heading right-aligned with-padding-left">
            <h4>Who We Are</h4>
            <h2></h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-content center-aligned main-topic">
            <h4>WELCOME TO</h4>
            <h1>FastAir</h1>
          </div>
        </div>
        <div class="col-md-4 margined">
          <div class="text-content small-heading left-aligned with-padding-right">
            <h4>Our Team</h4>
            <h2></h2>
          </div>
        </div>
      </div>

      <br />
      <br />
      <br /> -->

      <div class="row" id="our_business">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Business</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image" style="position:relative">
            <img loading="lazy" src="./assets/images/logo.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Who we are &amp; What we do?</h4>
            <p>Our family owned company has continued to maintain close and personal contacts with our clients
              throught the Asia Pacific Region since 1977. As one of the longest serving suppliers in this field we have
              pioneered the industry and continue to lead the way.
              <br>
              <br>
              Our highly skilled team of people include those with years of service within this area, with technical
              expertise and acknowldge of local conditions together with a young and enthusiastic support staff. The
              Product we offer are of high quality and keenly priced. New technology has been embraced and we are
              constantly upgrading our system to ensure that our efficiency is kept at peak levels.
            </p>
            <div style="display: flex; justify-content:space-between">
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
              </ul>
            </div>
            <img src="/assets/images/overview/established.png" alt="Fourty years of experience" style="width: auto;max-height: 25vh; position: absolute; right: 0; bottom: 0;" />
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />

      <div class="row" id="history">
        <div class="col-md-12">
          <div class="section-heading" style="display: flex; justify-content:space-between;">
            <h2>History</h2>
          </div>
        </div>


        <div class="col-md-6 right-bordered">
          <div style="display:flex;justify-content:center;flex-direction:column;">
            <p>FastAir History Description Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Sed voluptate nihil eum consectetur similique? Consectetur,
              quod, incidunt, harum nisi dolores delectus</p>
            <div style="display:flex;justify-content:center;">
              <img src="/assets/images/values/pillars.jpg" style="max-height: 50vh;width:auto;" alt="Pillars" />
            </div>
          </div>
        </div>

        <div class="col-md-6" style="display: flex; flex-direction:column;justify-content:center">
          <div class="right-content">
            <p>Celebrating the people of FastAir. Our team here at FastAir have helped the company
              to succeed and continue to grow throughout the years. There are a few sneak peak of our longest staff,</p>
            <div style="display: flex;margin-bottom:10px;">
              <div style="width: 50%;margin:auto;text-align:center;">
                <img src="/assets/images/team/team1.png" style="width: 40%;height:auto;" alt="Team member 1" />
              </div>
              <div style="display:flex;justify-content:center;width:50%;flex-direction:column;">
                <h4 style="padding: 5px 10px;color: #f7df39;background:#124734;width:100%;margin:0;">Team Member1 name</h4>
                <p style="padding: 0;margin: 0;color: #124734;">5 Years of service</p>
                <p style="padding: 0;margin: 0;color: #124734;">Assistant Manager</p>
              </div>
            </div>
            <div style="display: flex;margin-bottom:10px;">
              <div style="display:flex;justify-content:center;width:50%;flex-direction:column;">
                <h4 style="padding: 5px 10px;color: #f7df39;background:#124734;width:100%;margin:0;">Team Member1 name</h4>
                <p style="padding: 0;margin: 0;color: #124734;">5 Years of service</p>
                <p style="padding: 0;margin: 0;color: #124734;">Assistant Manager</p>
              </div>
              <div style="width: 50%;margin:auto;text-align:center;">
                <img src="/assets/images/team/team1.png" style="width: 40%;height:auto;" alt="Team member 1" />
              </div>
            </div>
            <div style="display: flex;margin-bottom:10px;">
              <div style="width: 50%;margin:auto;text-align:center;">
                <img src="/assets/images/team/team1.png" style="width: 40%;height:auto;" alt="Team member 1" />
              </div>
              <div style="display:flex;justify-content:center;width:50%;flex-direction:column;">
                <h4 style="padding: 5px 10px;color: #f7df39;background:#124734;width:100%;margin:0;">Team Member1 name</h4>
                <p style="padding: 0;margin: 0;color: #124734;">5 Years of service</p>
                <p style="padding: 0;margin: 0;color: #124734;">Assistant Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />

      <div class="row" id="management">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Management</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img loading="lazy" src="assets/images/management/img1.png" style="padding: 0 15%;" alt="">
            <h3 style="margin-top: 10px;margin-bottom: 10px;background:#124734;color:#f7df39;font-weight: bold;text-align: center;">Erik Lensherr</h3>
            <h5 style="margin-top: 10px;margin-bottom: 10px;color:#124734;font-style:italic;">Fictional character</h5>
            <p style="margin:0">Magneto is a fictional character appearing in American comic books published by Marvel Comics, commonly in association with the X-Men. Created by writer Stan Lee and artist/co-writer Jack Kirby, the character first appears in The X-Men #1 as an adversary of the X-Men.</p>
          </div>
          <div class="col-md-4">
            <img loading="lazy" src="assets/images/management/img1.png" style="padding: 0 15%;" alt="">
            <h3 style="margin-top: 10px;margin-bottom: 10px;background:#124734;color:#f7df39;font-weight: bold;text-align: center;">Wolverine</h3>
            <h5 style="margin-top: 10px;margin-bottom: 10px;color:#124734;font-style:italic;">Fictional character</h5>
            <p style="margin:0">James Howlett, also known as Logan or by his codename, Wolverine, is a fictional character from 20th Century Fox's superhero film series X-Men, portrayed by Hugh Jackman and based on the Marvel Comics.</p>
          </div>
          <div class="col-md-4">
            <img loading="lazy" src="assets/images/management/img1.png" style="padding: 0 15%;" alt="">
            <h3 style="margin-top: 10px;margin-bottom: 10px;background:#124734;color:#f7df39;font-weight: bold;text-align: center;">Raven</h3>
            <h5 style="margin-top: 10px;margin-bottom: 10px;color:#124734;font-style:italic;">Fictional character</h5>
            <p style="margin:0">Mystique is a fictional character appearing in American comic books published by Marvel Comics, commonly in association with the X-Men. Created by artist David Cockrum and writer Chris Claremont, she first appeared in the comic book Ms. Marvel #16.</p>
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />

      <div class="row" id="aim">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>We Aim to Provide</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Your prosperity is our business...</h4>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Sed voluptate nihil eum consectetur similique? Consectetur, 
                quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor</p> -->
            <ul class="featured-list">
              <li><a href="#">Personalized first class service.</a></li>
              <li><a href="#">Flexibility to cater to your specific needs.</a></li>
              <li><a href="#">Competitively priced quotations with the brand of your choice.</a></li>
              <li><a href="#">One Account.</a></li>
              <li><a href="#">Order Acknowledgments.</a></li>
              <li><a href="#">Orders expedited, minimizing expensive down times.</a></li>
              <li><a href="#">Correct export documentation.</a></li>
              <li><a href="#">All items individually checked, packed & labelled.</a></li>
              <li><a href="#">Airfreight orders specially packed & dispatched from our premises daily or consolidated weekly using the freight forwarder of your choice.</a></li>
              <li><a href="#">Urgent orders treated with top priority.</a></li>
              <li><a href="#">Sea freight orders: LCL & FCL packed on site & delivered to Port.</a></li>
              <li><a href="#">Dispatch advice.</a></li>
              <li><a href="#">Site visits to meet teams on the ground and discuss services, products, systems and logistics.</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 aim-cls">
          <div class="right-image aim-img">
            <img loading="lazy" src="assets/images/aim/weaim.png" alt="">
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />

      <div class="row" id="industries">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Industries Serviced</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="mining" src="assets/images/industries/mining.svg" alt="Mining">
              <h4>Mining Industry</h4>
            </div>
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="engineering" src="assets/images/industries/engineering.svg" alt="Engineering">
              <h4>Engineering</h4>
            </div>
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="transportation" src="assets/images/industries/transport.svg" alt="Transportation">
              <h4>Transportation</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="marine" src="assets/images/industries/marine.svg" alt="Marine">
              <h4>Marine</h4>
            </div>
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="agri" src="assets/images/industries/agri.svg" alt="Agri">
              <h4>Agriculture</h4>
            </div>
            <div class="col-lg-4 col-md-4 industry">
              <img loading="lazy" id="oil" src="assets/images/industries/oil.svg" alt="Oil and Gas">
              <h4>Oil and Gas</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Ends here -->

  <!-- Products Starts here -->

  <div class="products" id="products">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Products</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel">
            <div class="client-item">
              <a href="http://www.tnt.com/webtracker/tracker.do?navigation=1&respLang=en&respCountry=AU&genericSiteIdent=" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-tnt.png" alt="1"></a>
            </div>

            <div class="client-item">
              <a href="http://www.dhl.com.au/en/express/tracking.html" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-dhl.png" alt="2"></a>
            </div>

            <div class="client-item">
              <a href="http://www.agilitylogistics.com.au/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-agility.png" alt="3"></a>
            </div>

            <div class="client-item">
              <a href="http://logwebprod.au.cevalogistics.com/vlvisibility/TrackAndTrace.aspx" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-ceva.png" alt="4"></a>
            </div>

            <div class="client-item">
              <a href="http://www.toll.com.au/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-toll.png" alt="5"></a>
            </div>

            <div class="client-item">
              <a href="http://auspost.com.au/track/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-auspost.png" alt="6"></a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <p>Catering to any industry, FastAir services the South West Pacific and South East Asian Regions.</p>
          <p>With long established relationships with over 3,000 supplier and manufatures
            covering all the industries, FastAir can provide the brand of your choice.</p>
          <p>Orders are generally dispatched within 1-2 days. FastAir deals with numerous supply
            sources from around the world - the United States, United Kingdom, Germany and Japan,
            making ordering one stop service, cutting down delivery times.</p>
          <p>Through our commitment to large mining, agriculture and petrochemical companies,
            FastAir has specially trained, committed staff who soley cater to thses industries.
            Documentation and labeling is specially designed to comply with each companys requirements.</p>
          <br><br>
          <h6>FastAir Services Purchasing and Supplying the following product range...</h6>
          <br><br>
        </div>
        <div class="col-md-12">
          <div class="filters">
            <ul>
              <li class="active" onclick="filterPage('*')">All Products</li>
              <li onclick="filterPage('ad')">A-D</li>
              <li onclick="filterPage('eh')">E-H</li>
              <li onclick="filterPage('il')">I-L</li>
              <li onclick="filterPage('mp')">M-P</li>
              <li onclick="filterPage('qt')">Q-T</li>
              <li onclick="filterPage('uz')">U-Z</li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="filters-content" id="product_list">
            <!-- <div class="col-lg-4 col-md-4 all ad">
                <div class="product-item">
                  <a href="#"><img loading="lazy" src="assets/images/product_01.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="#">
                      <h4>Abattoir Equipment</h4>
                    </a>
                    <h6>$18.25</h6>
                    <ul class="stars">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  </div>
                </div>
              </div> -->
          </div>
        </div>
        <div class="col-md-12">
          <ul class="pages" id="pages">
            <!-- <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Products Ends here -->

  <!-- Business Starts here-->

  <div class="business" id="business">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Packing & Creating</h2>
          </div>
        </div>
        <div class="col-md-12">
          <p>FastAir service is a fully accredited ISPM15 wood packing manufacturer.</p>
          <p>We specialise in the manufacture of export rated, high quality, custom built, timber crates.</p>
          <p>All timber used in the manufacture of these crates are from sustainably sourced plantation grown pine.</p>
        </div>
        <div class="row business-img">
          <div class="col-md-4">
            <img src="assets/images/business/img1.png" alt="" loading="lazy">
          </div>
          <div class="col-md-4">
            <img src="assets/images/business/img2.png" alt="" loading="lazy">
          </div>
          <div class="col-md-4">
            <img src="assets/images/business/img3.png" alt="" loading="lazy">
          </div>
        </div>
        <div class="row business-img">
          <div class="col-md-4">
            <img src="assets/images/business/img4.png" alt="" loading="lazy">
          </div>
          <div class="col-md-4">
            <img src="assets/images/business/img5.png" alt="" loading="lazy">
          </div>
          <div class="col-md-4">
            <img src="assets/images/business/img6.png" alt="" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Business Ends here-->

  <!-- Logistics Starts here -->

  <div class="logistics" id="logistics">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Logistics</h2>
          </div>
        </div>
        <div class="col-md-12">
          <p>We despatch airfreight daily and seafreight weekly to all Asia/Pacific destinations. Large volumes of freight has resulted in cost effective pricing for all of our clients. Direct electronic link to Australian Customs allows us to obtain Export Clearance within minutes, expediting goods without delay. Our email despatch advice with invoices ensures early customs clearance on arrival of goods. Online track and trace can assist those who purchase from us to plan the arrival of their orders.</p>
          <p>Click on the logos of the freight companies to track your order.</p>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel">
            <div class="client-item">
              <a href="http://www.tnt.com/webtracker/tracker.do?navigation=1&respLang=en&respCountry=AU&genericSiteIdent=" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-tnt.png" alt="1"></a>
            </div>

            <div class="client-item">
              <a href="http://www.dhl.com.au/en/express/tracking.html" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-dhl.png" alt="2"></a>
            </div>

            <div class="client-item">
              <a href="http://www.agilitylogistics.com.au/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-agility.png" alt="3"></a>
            </div>

            <div class="client-item">
              <a href="http://logwebprod.au.cevalogistics.com/vlvisibility/TrackAndTrace.aspx" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-ceva.png" alt="4"></a>
            </div>

            <div class="client-item">
              <a href="http://www.toll.com.au/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-toll.png" alt="5"></a>
            </div>

            <div class="client-item">
              <a href="http://auspost.com.au/track/" target="_blank"><img loading="lazy" src="assets/images/logistics/logo-auspost.png" alt="6"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Logistics Ends here -->

  <!-- Handicart Starts here -->

  <div class="handicart" id="handicart">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Handi-Cart</h2>
          </div>
        </div>
        <div class="col-md-12">
          <p>Handi-Cart, a retail/wholesale division of Fastair, specializing in;</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Wheels and Cators</h4>
          <p>Fallshaw Australian made quality, 10-10,000kg capacity.</p>
        </div>
        <div class="col-md-4">
          <h4>Hand Trucks</h4>
          <p>A leading supplier of commercial and domestic hand trolleys for big and small business.</p>
        </div>
        <div class="col-md-4">
          <h4>Nally Polythene Crates</h4>
          <p>An extensive range of solid and vantilated crates from 11-1,00Ltrs capacity with themperature rating of -2c to +120c.</p>
        </div>
      </div>
      <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
          <p>Also complete a range of ladders, lifting equipments, tie downs and ratchets.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 blue-colored hoverable">
          <a href="http://www.handicart.com.au/" target="_blank"><img loading="lazy" id="trolleyimage" src="assets/images/handicartlogo.png" alt=""></a>
        </div>
        <div class="col-md-4">
        </div>
      </div>
      <div class="handi-img">
        <a href="http://www.handicart.com.au/castors.php" target="_blank">
          <div class="handi-container">
            <img loading="lazy" src="assets/images/handicraft/castors.png" alt="Castors">
            <div class="handi-label">
              <h4>Castors</h4>
            </div>
          </div>
        </a>
        <a href="http://www.handicart.com.au/ladders-60.php" target="_blank">
          <div class="handi-container">
            <img loading="lazy" src="assets/images/handicraft/ladders.png" alt="Ladders">
            <div class="handi-label">
              <h4>Ladders</h4>
            </div>
          </div>
        </a>
        <a href="http://www.handicart.com.au/trolleys-1.php" target="_blank">
          <div class="handi-container">
            <img loading="lazy" src="assets/images/handicraft/trolleys.png" alt="Trolleys">
            <div class="handi-label">
              <h4>Trolleys</h4>
            </div>
          </div>
        </a>
        <a href="http://www.handicart.com.au/plastics-3.php" target="_blank">
          <div class="handi-container">
            <img loading="lazy" src="assets/images/handicraft/plastics.png" alt="Plastics">
            <div class="handi-label">
              <h4>Plastics</h4>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Handicart Ends here -->

  <!-- Gallery Starts here -->

  <div class="gallery" id="gallery">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Gallery</h2>
          </div>
        </div>

        <div class="container my-gallery" id="gallery_inner" itemscope itemtype="http://schema.org/ImageGallery">
        </div>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

          <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
          <div class="pswp__bg"></div>

          <!-- Slides wrapper with overflow:hidden. -->
          <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

              <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>

              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>

              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>

              <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Gallery Ends here -->

  <br />
  <br />
  <br />

  <div class="find-us" id="green">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 class="green-zone">Fastair Green Zone</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <!-- <iframe width="100%" height="300px" src="https://www.youtube.com/embed/zCRKvDyyHmI" title="Green Zone Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <div class="banner" style="padding-top: 0;">
              <div class="owl-banner owl-carousel">
                <div class="green-item-01">
                </div>
                <div class="green-item-02">
                </div>
              </div>
            </div>
          </div>
          <!-- <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d453478.8006575831!2d152.71300552810746!3d-27.38186310901794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91579aac93d233%3A0x402a35af3deaf40!2sBrisbane%20QLD%2C%20Australia!5e0!3m2!1sen!2slk!4v1613918942048!5m2!1sen!2slk" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div> -->
        </div>
        <div class="col-md-6 green-center">
          <div class="left-content">
            <ul class="featured-list">
              <li><a>Fully Solar powered</a></li>
              <li><a>Recyclable packaging: pallets, shrink wrapping, cartons, tape</a></li>
              <li><a>Waste recycling: Plastics, Bottle recycling, Composted food waste</a></li>
              <li><a>Environmentally responsible cleaning products</a></li>
              <li><a>Sustainable plantation sourced timber</a></li>
              <li><a>Staff green space</a></li>
              <li><a>Living garden for all: Flowers, herbs & fruit</a></li>
              <li><a>All led by our very own environmental scientist</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br />
  <br />
  <br />

  <div id="charities">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>FastAir Charities</h2>
          </div>
        </div>
        <div class="col-md-4 charity">
          <h4>Schools</h4>
          <ul class="featured-list">
            <li><a href="#">Books</a></li>
            <li><a href="#">Desks</a></li>
            <li><a href="#">Chairs</a></li>
            <li><a href="#">Early learning resources</a></li>
            <li><a href="#">Shoes</a></li>
          </ul>
          <div class="banner">
            <div class="owl-banner owl-carousel">
              <div class="charity1-item-01">
              </div>
            </div>
          </div>
          <p><i>Book Donations Gusap</i></p>
        </div>
        <div class="col-md-4 charity">
          <h4>Medical</h4>
          <ul class="featured-list">
            <li><a href="#">Wheelchairs</a></li>
            <li><a href="#">Beds</a></li>
            <li><a href="#">Equipment</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Consumables</a></li>
          </ul>
          <div class="banner">
            <div class="owl-banner owl-carousel">
              <div class="charity2-item-01">
              </div>
              <div class="charity2-item-02">
              </div>
            </div>
          </div>
          <p><i>Medical Equipment Donations Popondetta</i></p>
        </div>
        <div class="col-md-4 charity">
          <h4>Our amazing Donors</h4>
          <ul class="featured-list">
            <li><a href="#">Schools</a></li>
            <li><a href="#">Libraries</a></li>
            <li><a href="#">Colleges</a></li>
            <li><a href="#">Individuals</a></li>
            <li><a href="#">Doctors & Nurses</a></li>
          </ul>
          <div class="banner">
            <div class="owl-banner owl-carousel">
              <div class="charity3-item-01">
              </div>
            </div>
          </div>
          <p><i>Donations Furniture, Ramu</i></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Starts here -->
  <div class="find-us" id="contact">
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d746.5613691326694!2d152.97511744046585!3d-27.317593805352644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93fcfc7712495b%3A0x7cca47b95494de6d!2s14%20Combarton%20St%2C%20Brendale%20QLD%204500%2C%20Australia!5e0!3m2!1sen!2slk!4v1615182476530!5m2!1sen!2slk" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Street Address</h4>
          <address>14 Combarton St,<br>
            Brendale QLD 4500,<br>
            Australia
          </address>
          <br>
          <h4>Postal Address</h4>
          <address>PO Box 5835,<br>
            Brendale Queensland 4500,<br>
            Australia
          </address>
          <br>
        </div>
        <div class="col-md-4">
          <h4>Phone</h4>
          <a href="tel:+61736064300">+61 7 3606 4300</a>
          <br>
          <br>
          <h4>Email</h4>
          <a href="mailto:export@fastair.com.au">export@fastair.com.au</a>
          <br>
          <br>
          <h4>Facsimile</h4>
          <a href="fax:+61736064399">+61 7 3606 4399</a>
          <br>
          <br>
          <h4>ABN #</h4>
          <p><b>66 375 715 911</b></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Ends here -->

  <!-- Quote Starts here -->
  <div id="requestModal">
    <form id="saveForm">
      <div class="anim-header">
        <div class="close-requestModal">
          <div class="close-item">
            <i class="fas fa-times fa-2x"></i>
          </div>
        </div>
        <div class="quote-title">
          <div>
            <h4>Request Quote</h4>
          </div>
        </div>
        <div class="save-btn">
          <button id="saveBtn">
            <i class="fas fa-check fa-2x"></i>
          </button>
        </div>
        <div class="save-skin inactive" id="saveSkin">
          <div class="save-confirm">
            <p id="saveTxt"></p>
            <div class="save-btn-container">
              <button id="okBtn">Submit</button>
              <button id="cancelBtn">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-content">

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h5>Customer Details</h5>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div id="cusdetails">

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label for="cname">Customer Name: *</label>
              <input id="cname" type="text" name="cname" required>
            </div>
            <div class="col-md-5">
              <label for="cnum">Contact Number: *</label>
              <input id="cnum" type="number" name="cnum" min="1" required>
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label for="cemail">Email: *</label>
              <input id="cemail" type="text" name="cemail" required>
            </div>
            <div class="col-md-5">
              <label for="cadddr">Shipping Address: *</label>
              <input id="caddr" type="text" name="caddr" required>
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label for="ccompany">Company: </label>
              <input id="ccompany" type="text" name="ccompany">
            </div>
            <div class="col-md-5">
              <label for="cfax">Fax: </label>
              <input id="cfax" type="number" name="cfax">
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label for="ccode">Customer Code: </label>
              <input id="ccode" type="text" name="ccode">
            </div>
            <div class="col-md-5">
            </div>
            <div class="col-md-1"></div>
          </div>

        </div>

        <br>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h5>Item Details</h5>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div id="itemdetails">

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-6">
                  <label for="cquantity">Quantity: * </label>
                  <input id="cquantity" type="number" name="cquantity" id="cquantity" min="1">
                </div>
                <div class="col-md-6">
                  <label for="cpart">Part Number: </label>
                  <input id="cpart" type="text" name="cpart" id="cpart">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="cstock">Stock Code: </label>
                  <input id="cstock" type="text" name="cstock">
                </div>
                <div class="col-md-6">
                  <label for="cunits">Units: </label>
                  <input id="cunits" type="number" name="cunits" min="1">
                </div>
              </div>

              <label for="cdescription">Description: * </label>
              <input id="cdescription" type="text" name="cdescription">

              <label for="cattachment">Attachment: * </label>
              <input id="cattachment" type="file" name="cattachment">

              <div class="row" style="margin-top: 5px;margin-bottom: 10px;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <button type="button" class="add-req" onclick="addToRequest()">Add To Request</button>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="request-table">
                <div class="tbl-header">
                  <div class="col-small">
                    <h6>#</h6>
                  </div>
                  <div>
                    <h6>Quantity</h6>
                  </div>
                  <div>
                    <h6>Part No</h6>
                  </div>
                  <div>
                    <h6>Stock Code</h6>
                  </div>
                  <div>
                    <h6>Units</h6>
                  </div>
                  <div class="col-small"></div>
                </div>
                <div class="tbl-content" id="tbl-content">
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
        <input type="hidden" name="item_lines" id="item_lines" />
      </div>
    </form>
  </div>

  <!-- Quote Ends here -->

  <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>2021 Sat Labs- Design</p>
          </div>
        </div>
      </div>
    </div>
  </footer> -->

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

  <script>
    initPhotoSwipeFromDOM('.my-gallery');
    $("#reqBtn").animatedModal();
  </script>

</body>

</html>