<?php

	$pageNo = "1";
	$pageName = "Home";
	
	require_once("common_header.php");

?>

  
  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flexslider">
      <ul class="slides">
        <li> <img src="assets/images/home_slider.gif" alt="" > 
          
          <!--======= BANNER INNER =========-->
          
          <!-- <div class="banner-up">
            <div class="container">
              <div class="slide-products slide-products-txt">
                <div class="col-xs-12 no-padding"> 
                  
                  <div class="text-slide2">
                    <h1>Online Foreign Registration</h1>
                    <h3>Register now</h3>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </li>
      </ul>
    </div>
  </div>
    
  <!--======= APP =========-->
  <section class="app-com">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center"> <img class="img-responsive" src="assets/images/Congo_Map.jpg" alt=""> </div>
        <div class="col-sm-6">
          <div class="text-sec">
            <h3>Welcome to DR Congo!</h3>
            <p>The Democratic Republic of Congo is extremely rich in natural resources, but political instability, a lack of infrastructure, deep rooted corruption, and centuries of both commercial and colonial extraction and exploitation have limited holistic development. Besides the capital, Kinshasa, the other major cities, Lubumbashi and Mbuji-Mayi, are both mining communities. DR Congo's largest export is raw minerals, with China accepting over 50% of DRC's exports in 2012. As of 2013, according to the Human Development Index (HDI), DR Congo has a low level of human development, ranking 176 out of 187 countries. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
	require_once("common_footer.php");
?>