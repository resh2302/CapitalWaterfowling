<!Doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capital Waterfowling</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="font/foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="css/xmain.css" />
    <script src="js/modernizr.js"></script>
  </head>
  <body>
 <!-- ****************************** -->
 <!--         HEADER SECTION         -->
 <!-- ****************************** -->
   <header> 
    <div class="row">
      <div class="small-4 medium-3 columns logo" id="logo_wrapper">
        <img src="<?php print $logo ?>" alt="<?php print $site_name ?>" title="<?php print $site_name ?>" id="logo" />
        <!-- Capital Waterfowling -->
      </div> <!-- end large-3 -->
      <div class="small-4 medium-7 columns" id="main_nav_wrapper">
        <nav class="top-bar" id="main_nav" data-topbar> 
          <ul class="title-area"> 
            <li class="name" > 




              
            </li>
             <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li> 
           </ul>
            <section class="top-bar-section"> <!-- Right Nav Section --> 
              <ul class="right"> 
                <li><a href="home.html">Home</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="prostaff.html">Pro Staff</a></li>
                <li><a href="tutorials.html">Tutorials</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="contact.html">Contact</a></li>
               
            </ul> <!-- Left Nav Section --> 
         
            </section> 
          </nav>

      </div> <!-- end large-6  -->
      <div class="small-4 medium-2 columns" id="cart_wrapper">

        <p class="small alert button">
          <a id="shopping_p" href="#" >MY CART </a> 
          <i class="fi-shopping-cart"></i>
        </p>

      </div>
    </div> <!-- end row -->
  </header>
 <!-- ****************************** -->
 <!--         MISSION SECTION        -->
 <!-- ****************************** -->
  <article>   
    <div class="row">
      <div class="small-12 columns ms">

        <p class="title red_heading ">Mission Statement</p>
        <p class="ms_p">Our passion for waterfowling and the outdoors is second to none. Together we have harnessed this passion to create products for hunters, by hunters. We are stopping at nothing to offer the best waterfowling products in all of Canada.</p>

      </div>
    </div>
  </article>
 <!-- ****************************** -->
 <!--         NEWS SECTION           -->
 <!-- ****************************** -->

 <!-- ****************************** -->
 <!--       PRODUCTS SECTION         -->
 <!-- ****************************** -->
  <article>
    <div class="row ps">

      <p class="title red_heading ">Feature Products</p>

      
      <div class="large-4 columns products product_line">
          <div class="row" >
            <div class="large-12 medium-6 small-6 columns ps_img">
            <img src="<?php print $directory; ?>/img/product1.png" />
           </div>

           <div class="large-12 medium-6 small-6 columns ps_des">
            <h4 class="title">Duck Calls</h4>
            <p><a href="store.html#duckCalls" class="small alert button">View more &#10142;</a></p>
           </div>
          </div> <!-- end row -->
      
      </div>
      
       <div class="large-4 columns products product_line">
          <div class="row">
            <div class="large-12 medium-6 small-6 columns ps_img">
            <img src="<?php print $directory; ?>/img/product2.png" />
           </div>

           <div class="large-12 medium-6 small-6 columns ps_des">
            <h4 class="title">Duck Calls</h4>
            <p><a href="store.html#gooseCalls" class="small alert button">View more &#10142;</a></p>
           </div>
          </div> <!-- end row -->
      
      </div>


        <div class="large-4 columns products">
          <div class="row">
            <div class="large-12 medium-6 small-6 columns ps_img">
            <img src="<?php print $directory; ?>/img/product3.png" />
           </div>

           <div class="large-12 medium-6 small-6 columns ps_des">
            <h4 class="title">Duck Calls</h4>
            <p><a href="store.html#gooseCalls" class="small alert button">View more &#10142;</a></p>
           </div>
          </div> <!-- end row -->
      
      </div>
    </div>
  </article>
 <!-- ****************************** -->
 <!--         FOOTER SECTION         -->
 <!-- ****************************** -->            
   <footer> 
      <div class="large-12 columns" id="footer_wrapper">
       
            
              <ul class="left" id="footnav">
                  <li><a href="home.html">Home</a></li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="prostaff.html">Pro Staff</a></li>
                  <li><a href="tutorials.html">Tutorials</a></li>
                  <li><a href="store.html">Store</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul>
              <!-- Social Media Icons -->
              <ul class="right social">
                  <li><a href="#" class="socialImg"><img src="<?php print $directory; ?>/img/facebook.png" /></a></li>
                  <li><a href="#" class="socialImg"><img src="<?php print $directory; ?>/img/twitter.png" /></a></li>
                  <li><a href="#" class="socialImg"><img src="<?php print $directory; ?>/img/youtube.png" /></a></li>
              </ul>
            
        
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>