<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!----------- css link ----->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!----------- css media query ----->
    <link rel="stylesheet" type="text/css" href="css/media_query.css">
   
   <!----------- css fontawasome ----->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">

      <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>Babysitter</title>

    <style type="text/css">
 
 .flickity-page-dots {
    position: absolute;
    width: 100%;
    bottom: 20px;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
    line-height: 1;
}

.flickity-page-dots .dot {
    display: inline-block;
    width: 5px;
    height: 5px;
    margin: 0px 3px;
    background: #ffffff33;
    border-radius: 50%;
    opacity: 1.25;
    cursor: pointer;
    border: 2px solid #fff;
    padding: 3px;
}



  </style>
  </head>
  <body>

    <!------------------- line 
   <div class="row line1">
      <div class="tags">
      </div>
      <div class="tags1">
      </div>
      <div class="tags2">
      </div>
      <div class="tags3">
      </div>
      <div class="tags4">
      </div>
      <div class="tags5">
      </div>
      <div class="tags6">
      </div>
   </div>-------------->
    
<!----------------- responsive navbar header -------------->
    <header>
    <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
      <div class="container navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span style="color: #FD6A10;font-size: 40px;">B</span>abysi<span style="color: #10FCF1; font-size: 40px;">t</span><span style="color: #10FCF1; font-size: 30px;">t</span>er</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#about">Pages <span style="color: #FD6A10;font-size: 11px;"><i class="fa fa-plus"></i></span></a></li>
            <li><a href="#portfolio">Babysitter</a></li>
            <li><a href="#contact">Blog</a></li>
            <li><a href="#blog">Contact Us</a></li>
            <li class="button1" style="text-decoration: none;">Add a Listning</li>
          </ul>
        </div>
        <!--<div class="top-social">
          <ul id="top-social-menu">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Investors</a></li>
          </ul>
        </div>-->
      </div>
    </nav>
  </header>

  <!-- Back to top button -->
<a id="button4"></a>

  <!--<section class="full-width-img">
    
    </section>-->
 <!---------------------- slider ------------>

  <!--Slider-->
      <div id="slider">  
        <div class="slide">
           <img src="img/banner/banner3.jpg">
            <div class="rib7">
              <div>A Big Source of</div>
              <div>Loving Babysitter</div>
            </div>
          </div>
          
          <div class="slide">
             <img src="img/banner/banner2.jpg" >
             <div class="rib7">
              <div>A Big Source of</div>
              <div>Loving Babysitter</div>
            </div>
          </div>
         
            <div class="slide">
              <img src="img/banner/banner1.png" >
              <div class="rib7">
              <div>A Big Source of</div>
              <div>Loving Babysitter</div>
            </div>
            </div>
            
            <div class="slide">
              <img src="img/banner/banner4.jpg" >
              <div class="rib7">
              <div>A Big Source of</div>
              <div>Loving Babysitter</div>
            </div>
            </div>
            
            <!--Controlling arrows-->
            <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
          </span>
              <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
          </span>
          </div>
          <div id="dots-con">
       <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
    </div>

    <!--------------- date  form ---------------->
   
   <section id="form">
     <div class="container">
      <div class="baby">
        <h3>Book Your BabySitter</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      </div>
       <div class="col-md-3">
         <div class="menu" id="menu-drop">
            <span class="select">Look For</span>
            <div class="menu__icon-box">
                <div class="menu__icon"></div>
            </div>
            <div class="menu__dropdown">
              <div class="menu__dropdown-option">An Option</div>
              <div class="menu__dropdown-option">Just another option</div>
              <div class="menu__dropdown-option">By far the coolest option</div>
            </div>
          </div>
       </div>
       <div class="col-md-3">
         <div class="menu" id="menu-drop">
            <span class="select">City Name</span>
            <div class="menu__icon-box">
                <div class="menu__icon"></div>
            </div>
            <div class="menu__dropdown">
              <div class="menu__dropdown-option">An Option</div>
              <div class="menu__dropdown-option">Just another option</div>
              <div class="menu__dropdown-option">By far the coolest option</div>
            </div>
          </div>
       </div>
       <div class="col-md-3">
         <div class="menu" id="menu-drop">
            <span class="select">How many Children</span>
            <div class="menu__icon-box">
                <div class="menu__icon"></div>
            </div>
            <div class="menu__dropdown">
              <div class="menu__dropdown-option">An Option</div>
              <div class="menu__dropdown-option">Just another option</div>
              <div class="menu__dropdown-option">By far the coolest option</div>
            </div>
          </div>
       </div>
       <div class="col-md-3">
         <div class="menu" id="menu-drop">
            <span class="select">Distance</span>
            <div class="menu__icon-box">
                <div class="menu__icon"></div>
            </div>
            <div class="menu__dropdown">
              <div class="menu__dropdown-option">An Option</div>
              <div class="menu__dropdown-option">Just another option</div>
              <div class="menu__dropdown-option">By far the coolest option</div>
            </div>
          </div>
       </div>
       <div class="btn1">
         <li class="button2" style="text-decoration: none;">Search</li>
       </div>
       
     </div>
   </section>

<!--------------- baby sitter vs baby sitter job  ---------------->

<section id="babe1">
  <div class="container">
    <div class="baby2">
  </div>
  <h4 style="color: #f57a2d;">Babysitters</h4><i class="fa fa-exchange-alt" style="color: #888181"></i><h4 style="color: #19c0b2">
    Babysitter Jobs
    </h4>
    <div class="row">
      <div class="col-md-6">
        <div class="wrapper">
        <div class="product-img container1">
          <img src="img/card/img1.jpg">
          <div class="overlay">
            <div class="text">
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
          </div>
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1>Seema Singh - 23 year old</h1>
            <h5><i class="fa fa-map-marker"></i> Mumbai, India</h5>
            <p>Harvest Vases are a reinterpretation... </p>
            <p style="margin-top: 20px"><i class="fa fa-heart" style="color: #31ece4;"></i> 144 &nbsp;&nbsp;<i class="fa fa-pencil-alt" style="color: #31ece4;"></i> 14 Reviews </p>
            <div id="but"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a> </div>
          </div>
        </div>
      </div>
      </div>

      <div class="col-md-6">
        <div class="wrapper">
        <div class="product-img container1">
          <img src="img/card/img2.jpg">
          <div class="overlay">
            <div class="text">
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
          </div>
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1>Riya - 38 year old</h1>
            <h5><i class="fa fa-map-marker"></i> Delhi, India</h5>
            <p>Harvest Vases are a reinterpretation... </p>
            <p style="margin-top: 20px"><i class="fa fa-heart" style="color: #31ece4;"></i> 444 &nbsp;&nbsp;<i class="fa fa-pencil-alt" style="color: #31ece4;"></i> 44 Reviews </p>
            <div id="but"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a> </div>
          </div>
        </div>
      </div>
      </div>

    <div class="row">
        
      <div class="col-md-6">
        <div class="wrapper">
        <div class="product-img container1">
          <img src="img/card/img3.jpg">
          <div class="overlay">
            <div class="text">
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
          </div>
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1>Rasmi Tiwari - 25 year old</h1>
            <h5><i class="fa fa-map-marker"></i> Uttar Pradesh, India</h5>
            <p>Harvest Vases are a reinterpretation... </p>
            <p style="margin-top: 20px"><i class="fa fa-heart" style="color: #31ece4;"></i> 334 &nbsp;&nbsp;<i class="fa fa-pencil-alt" style="color: #31ece4;"></i> 12 Reviews </p>
            <div id="but"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a> </div>
          </div>
        </div>
      </div>
      </div>
      
      <div class="col-md-6">
        <div class="wrapper">
        <div class="product-img container1">
          <img src="img/card/img4.jpg">
          <div class="overlay">
            <div class="text">
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
          </div>
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1>Sweta Singh - 30 year old</h1>
            <h5><i class="fa fa-map-marker"></i> Haidrabad, India</h5>
            <p>Harvest Vases are a reinterpretation... </p>
            <p style="margin-top: 20px"><i class="fa fa-heart" style="color: #31ece4;"></i> 139 &nbsp;&nbsp;<i class="fa fa-pencil-alt" style="color: #31ece4;"></i> 9 Reviews </p>
            <div id="but"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a> </div>
          </div>
        </div>
      </div>
      </div>

      </div>
      </div>
  </div>
</section>
    
    <!-----------------------   start work --------------------->

    <section id="stary">
      <div class="container beta">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6 sta">
            <h3>Start meeting great babysitter now.</h3>
                <div class="ice"></div>
            <div class="icon">
              <i class="fa fa-search"></i>
              <h4>Repeat Family Budges</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="icon">
              <i class="fa fa-youtube"></i>
              <h4>Nancy & Babysitter Video Profile</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note"></i>
              <h4>Certificate Goodness</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

            <div class="btn3">
               <li class="button2" style="text-decoration: none;">Search</li>
             </div>
          </div>
        </div>
        <div class="img2">
              <img src="img/bac/img4.png" style="    width: 30%;
           margin-top: 40px;">
            </div>
      </div>

    </section>

    <!------------------------   card 2 ----------->

    <section id="card_ribb">
      <div class="ca">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="container2">
                <div class="card">
                  <div class="card__container">
                    <div id="ribb2">
                      Parents,
                    </div>
                    <div class='ribbon' id='one'>
                            <span class='ribbon-content'>
                              Join for free!
                            </span>
                          </div>
                    <p class="card__body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat vestibulum,
                    </p>  
                    <div id="but" style="margin-top: 0px;
                            margin-right: -20px;
                            margin-bottom: 5px"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="container2">
                <div class="card">
                  <div class="card__container">
                    
                      <h3 class="card__header">
                      Find a babysitter!  <img src="img/bac/img5.PNG" style="height: 50px; width: 50px;    float: right;">
                    </h3>
                  
                    <p class="card__body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat vestibulum,
                    </p>  
                    <div id="but" style="margin-top: 0px;
                            margin-right: -20px;
                            margin-bottom: 5px"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="img4">
                        <img src="img/bac/img6.png">
                      </div>
              <div class="container2">
                <div class="card">
                  <div class="card__container">
                       <h3 class="card__header">
                      Parenting Advice!
                    </h3>
                    <div id="but" style="margin-top: 0px;
                            margin-right: -20px;
                            margin-bottom: 5px"><a href=""><span id="abc"><i class="fa fa-arrow-right"></i> Go</span></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!---------------------------- testi monils ----------------->

    <section id="testi">
      <div class="container">
        <div class="tet">
          <div class="row">
            
            <div class="col-md-3">
              <div class="ram" style="">
                <h4>Local Babysitters</h4>
                <div class="stm"></div>
                <p>Enter your portal code & meet</p>
                <p>Some are our babysitter in your area</p>
                <input type="text" name="name" class="level" id="in" placeholder="ZipCode" required="required">
              </div>
                <div class="btn1">
                   <li class="button4" style="text-decoration: none;">Search</li>
                 </div>
            </div>
            <div class="col-md-1">
               <div class="vl"></div>
            </div>
            <div class="col-md-8 page1">
              <h4 style="font-size: 20px; margin: 0px;">Top rated babysitters</h4>
              <div class="main">
                <!--<div class="slider slider-for">
                  <div><h3>1</h3></div>
                  <div><h3>2</h3></div>
                  <div><h3>3</h3></div>
                  <div><h3>4</h3></div>
                  <div><h3>5</h3></div>
                </div>-->
                <div class="slider slider-nav">
                  <div>
                    <div class="container1 spiner">
                      <img src="img/card/img5.jpg">
                      <div class="overlay"></div>
                    </div>
                    <h5>Meera Thakare</h5>
                    <p>Mumbai, India</p>
                    <div style="margin-bottom: 10px;">
                      <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                    </div>
                    <a href="">View Profile</a>
                  </div>

                  <div>
                    
                    <div class="container1 spiner">
                      <img src="img/card/img6.jpg">
                      <div class="overlay"></div>
                    </div>
                    <h5>Reena Singh</h5>
                    <p>Delhi, India</p>
                    <div style="margin-bottom: 10px;">
                      <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                    </div>
                    <a href="">View Profile</a>
                  </div>
                  <div>
                    <div class="container1 spiner">
                      <img src="img/card/img7.jpg">
                      <div class="overlay"></div>
                    </div>
                    <h5>Riya Ji</h5>
                    <p>Uttar Pradesh, India</p>
                    <div style="margin-bottom: 10px;">
                      <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                    </div>
                    <a href="">View Profile</a>
                  </div>
                  <div>
                    <div class="container1 spiner">
                      <img src="img/card/img1.jpg">
                      <div class="overlay"></div>
                    </div>
                    <h5>Shivani Sindhe</h5>
                    <p>Gujrat, India</p>
                    <div style="margin-bottom: 10px;">
                      <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star fa1"></span>
                    </div>
                    <a href="">View Profile</a>
                  </div>
                  <div>
                    <div class="container1 spiner">
                      <img src="img/card/img2.jpg">
                      <div class="overlay"></div>
                    </div>
                    <h5>Sneha Thakare</h5>
                    <p>Mumbai, India</p>
                    <div style="margin-bottom: 10px;">
                      <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star fa1"></span>
                        <span class="fa fa-star fa1"></span>
                    </div>
                    <a href="">View Profile</a>
                  </div>
                </div>
                <!--<div class="action">
                  <a href="#" data-slide="3">go to slide 3</a>
                  <a href="#" data-slide="4">go to slide 4</a>
                  <a href="#" data-slide="5">go to slide 5</a>
                </div>-->

              </div>
          </div>

        </div>
      </div>
    </section>

<!-----------------------------  public  ----------- data -->

<section id="public">
  <div class="container3">
      <img src="img/bac/Simple_world_map.svg" alt="Snow" style="width:60%;">
      <div class="centered2">
        <h1>56,908,00</h1>
        <p>member in 11 counties,</p>
        <h3 class="counting">and counting..</h3>
      </div>
    </div>
</section>

<!-----------------------------  calcuate data -----------  -->
<section id="calcuate">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="img3">
          <img src="img/bac/img_2PNG.PNG">
        </div>
      </div>
      <div class="col-md-5">
        <div class="baysit">
          <h1>What should pay <br>my baysitter ?</h1>
          <p>Get the going rate in your town</p>
        </div>

          

          <select id="drop">
              <option value="" disabled="disabled" selected="selected">Number of children</option>
              <option value="1">One</option>
              <option value="2">Two</option>
          </select>

           <select id="drop">
              <option value="" disabled="disabled" selected="selected">Year of expriance</option>
              <option value="1">One</option>
              <option value="2">Two</option>
          </select>

          <select id="drop">
              <option value="" disabled="disabled" selected="selected">Hour per week</option>
              <option value="1">One</option>
              <option value="2">Two</option>
          </select>

            <div class="btn1">
                   <li class="button4" style="text-decoration: none;">Calculate</li>
                 </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>
    

    <!-----------------------------  testimonilas -----------  -->
<!-- Flickity HTML init -->
<section id="tt">
<div class="gallery js-flickity container">
  <div class="gallery-cell">
   <div class="rounded">
    <img src="img/card/img2.jpg" alt="Baby">
    <figcaption>
      <h4>Riya singh</h4>
      <p>-Housewife</p>
    </figcaption>
    </div>
   <div class="center2">
       
      <p><span style="font-size: 30px; color: #fff"><i class="fa fa-quote-left"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galle</p>
    </div>
  </div>
  <div class="gallery-cell">
      <div class="rounded">
    <img src="img/card/img3.jpg" alt="Baby">
    <figcaption>
      <h4>Sweta singh</h4>
      <p>-Housewife</p>
    </figcaption>
    </div>
   <div class="center2">
       
      <p><span style="font-size: 30px; color: #fff"><i class="fa fa-quote-left"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galle</p>
    </div>
  </div>
  <div class="gallery-cell">
      <div class="rounded">
    <img src="img/card/img4.jpg" alt="Baby">
    <figcaption>
      <h4>Rasmi singh</h4>
      <p>-Housewife</p>
    </figcaption>
    </div>
   <div class="center2">
       
      <p><span style="font-size: 30px; color: #fff"><i class="fa fa-quote-left"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galle</p>
    </div>
  </div>
  <div class="gallery-cell">
      <div class="rounded">
    <img src="img/card/img6.jpg" alt="Baby">
    <figcaption>
      <h4>Pooja Dev</h4>
      <p>-Housewife</p>
    </figcaption>
    </div>
   <div class="center2">
       
      <p><span style="font-size: 30px; color: #fff"><i class="fa fa-quote-left"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galle</p>
    </div>
  </div>
  <div class="gallery-cell">
      <div class="rounded">
    <img src="img/card/img5.jpg" alt="Baby">
    <figcaption>
      <h4>Somya ji</h4>
      <p>-Housewife</p>
    </figcaption>
    </div>
   <div class="center2">
       
      <p><span style="font-size: 30px; color: #fff"><i class="fa fa-quote-left"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galle</p>
    </div>
  </div>
</div>
</section>


    <!-----------------------------  form our blogs -----------  -->
    <section id="our_blog">
      <div class="container">
        <div class="vlog">
          <h3>From Our Blogs</h3>
        </div>
        <div class="row">
          <div class="col-md-4 data1">
             <div class="btn1">
                   <li class="button5" style="text-decoration: none;">Housekiper</li>
                 </div>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p style="font-weight: bold;
                        color: #01dad0;
                         margin-bottom: 20px;">21 - March - 2021</p>
                 <div class="polaroid">
                     <img src="img/card/img1.jpg" alt="5 Terre" style="width:100%">
                      <div class="container4">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                             </div>
                        </div>
                     <div class="btn1" style="text-align: initial;">
                   <li class="button4" style="text-decoration: none;">Read artical</li> <i class="fa fa-pencil" style="color: #31ece4;"></i> 14 
                 </div>
          </div>

           <div class="col-md-4 data1">
             <div class="btn1">
                   <li class="button5" style="text-decoration: none;">Eldercare</li>
                 </div>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p style="font-weight: bold;
                        color: #01dad0;
                         margin-bottom: 20px;">20 - Dec - 2021</p>
                 <div class="polaroid">
                     <img src="img/card/img2.jpg" alt="5 Terre" style="width:100%">
                      <div class="container4">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                             </div>
                        </div>
                     <div class="btn1" style="text-align: initial;">
                   <li class="button4" style="text-decoration: none;">Read artical</li> <i class="fa fa-pencil" style="color: #31ece4;"></i> 23 
                 </div>
          </div>

          <div class="col-md-4 data1">
             <div class="btn1">
                   <li class="button5" style="text-decoration: none;">Companion</li>
                 </div>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p style="font-weight: bold;
                        color: #01dad0;
                         margin-bottom: 20px;">19 - Oct - 2021</p>
                 <div class="polaroid">
                     <img src="img/card/img3.jpg" alt="5 Terre" style="width:100%">
                      <div class="container4">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                             </div>
                        </div>
                     <div class="btn1" style="text-align: initial;">
                   <li class="button4" style="text-decoration: none;">Read artical</li> <i class="fa fa-pencil" style="color: #31ece4;"></i> 25 
                 </div>
          </div>
        </div>
      </div>
    </section>

 <!-----------------------------  footer  ----- -----------  -->
  
  <footer>
    <div class="container">
      <div class="foot">
        <div class="row">
          <div class="col-md-6">
            <h2>It's easy to find what you want!</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="col-md-6">
            <div class="icons2">
              <ul>
                  <li><i class="fa fa-facebook-f"></i></li>
                  <li><i class="fa fa-twitter"></i></li>
                  <li><i class="fa fa-wifi"></i></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="foot">
          <div class="col-md-3">
            <h5>Company</h5>
            <div class="stm1"></div>
            <ul>
              <a href=""><li><i class="fa fa-caret-right"></i> About Us</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Press</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Career In Babysitter</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> FAQ & Support</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Term Of Service</li></a>
            </ul>
          </div>

          <div class="col-md-3">
            <h5>Browse for city</h5>
            <div class="stm1"></div>
            <ul>
              <a href=""><li><i class="fa fa-caret-right"></i> Mumbai</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Delhi</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Banglore</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Haidrabad</li></a>
              <a href=""><li><i class="fa fa-caret-right"></i> Punjab</li></a>
            </ul>
          </div>

          <div class="col-md-3 feet">
            <h5>Popular Topics</h5>
            <div class="stm1"></div>
            <ul>
              <a href=""><li>Babysitter Service</li></a>
              <a href="" style="margin-left: 50px;"><li>Toturing</li></a>
              <a href=""><li>Day care</li></a>
              <a href="" style="margin-left: 30px;"><li>Nanny Jobs</li></a>
              <a href="" ><li>Babysitting</li></a>
              <a href=""><li>Nannies</li></a>
            </ul>
          </div>

          <div class="col-md-3">
            <h5>Instgarm</h5>
            <div class="stm1"></div>
            <div class="gallery2">
              <a target="_blank" href="img_5terre.jpg">
                <img src="img/card/img1.jpg" alt="Cinque Terre" width="600" height="400">
              </a>
            </div>

            <div class="gallery2">
              <a target="_blank" href="img_forest.jpg">
                <img src="img/card/img2.jpg" alt="Forest" width="600" height="400">
              </a>
            </div>

            <div class="gallery2">
              <a target="_blank" href="img_lights.jpg">
                <img src="img/card/img3.jpg" alt="Northern Lights" width="600" height="400">
              </a>
            </div>

            <div class="gallery2">
              <a target="_blank" href="img_mountains.jpg">
                <img src="img/card/img3.jpg" alt="Mountains" width="600" height="400">
              </a>
            </div>
            <div class="gallery2">
              <a target="_blank" href="img_mountains.jpg">
                <img src="img/card/img2.jpg" alt="Mountains" width="600" height="400">
              </a>
            </div>
            <div class="gallery2">
              <a target="_blank" href="img_mountains.jpg">
                <img src="img/card/img1.jpg" alt="Mountains" width="600" height="400">
              </a>
            </div>

          </div>
        </div>
      </div>
      
    </div>
  </footer>

    


  <!--<div class="screen"><img src="img/bac/screen.png" width="300" height="300"></div>
  <div class="screen"><img src="http://www.pmob.co.uk/temp/images/zimg5.jpg" width="300" height="300"></div>-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

      <!-- JavaScript -->
       <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
   
    <script type="text/javascript">
      // xxxxxxx  ----- header
      $(window).scroll(function () {
      var sc = $(window).scrollTop()
      if (sc > 150) {
        $("#main-navbar").addClass("navbar-scroll")
      } 
      else {
        $("#main-navbar").removeClass("navbar-scroll")
      }
    });
    </script>

    <script type="text/javascript">
      /////  slider   
      var slides = document.querySelectorAll(".slide");
      var dots = document.querySelectorAll(".dot");
      var index = 0;


      function prevSlide(n){
        index+=n;
        console.log("prevSlide is called");
        changeSlide();
      }

      function nextSlide(n){
        index+=n;
        changeSlide();
      }

      changeSlide();

      function changeSlide(){
          
        if(index>slides.length-1)
          index=0;
        
        if(index<0)
          index=slides.length-1;
        
        
        
          for(let i=0;i<slides.length;i++){
            slides[i].style.display = "none";
            
            dots[i].classList.remove("active");
            
            
          }
          
          slides[index].style.display = "block";
          dots[index].classList.add("active");

      }

    </script>
    
    <script type="text/javascript">
      /// select
      const menu = document.querySelector('.menu');
      const option = document.querySelector('.menu span')

      menu.addEventListener('click', e => {
        if (e.target.classList.contains('menu') || e.target.classList.contains('select') || e.target.classList.contains('menu__icon')) {
            menu.classList.toggle('menu__active');
        }

        if (e.target.classList.contains('menu__dropdown-option')) {
            option.innerHTML = e.target.textContent;
            menu.classList.remove('menu__active');
        }
      })
    </script>

    <script type="text/javascript">
              $('.slider-for').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: false,
           fade: true,
           asNavFor: '.slider-nav'
         });
         $('.slider-nav').slick({
           slidesToShow: 4,
           slidesToScroll: 1,
           asNavFor: '.slider-for',
           dots: true,
           focusOnSelect: true
         });

         $('a[data-slide]').click(function(e) {
           e.preventDefault();
           var slideno = $(this).data('slide');
           $('.slider-nav').slick('slickGoTo', slideno - 1);
         });
    </script>

     
        <script>
          var slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
          </script>

          <script type="text/javascript">
            var btn = $('#button4');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
          </script>


  </body>
</html>


