<?php
	$pageNo = "5";
	$pageName = "Contact us";
	require_once("common_header.php");
?>
  <!--======= CONTACT =========-->
  <section class="contact"> 
    
    <!--======= MAP =========-->
    <div id="map"></div>
    <div class="container"> 
      
      <!--======= CONTACT INFORMATION =========-->
      <div class="contact-info">
        <div class="row"> 
          
          <!--======= CONTACT =========-->
          <div class="col-sm-6">
            <h3>get in touch</h3>
            <!-- <p>Hello we are comre. We are here to provide you the best offers through our 
              coupons. Hello we are comre.</p> -->
            <ul class="con-det">
              
              <!--======= ADDRESS =========-->
              <li> <i class="fa fa-map-marker"></i>
                <h6>Address</h6>
                <p>
                    65, Boulevard du 30 juin,<br>
                    Commune de la Gombe<br>
                    Ville de Kinshasa, R.D.Congo<br>
                </p>
              </li>
              
              <li> <i class="fa fa-phone"></i>
                <h6>Phone</h6>
                <p>+ 243 81 030 07 55</p>
              </li>              
              <!--======= EMAIL =========-->
              <li> <i class="fa fa-envelope"></i>
                <h6>email</h6>
                <p>Courriel :dgm@dgm.cd</p>
              </li>
              
            </ul>
            
            <!--======= SOCIAL ICON =========-->
            <!-- <ul class="social_icons">
              <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
              <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
              <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
              <li class="googleplus"> <a href="#."><i class="fa fa-google-plus"></i> </a></li>
              <li class="flicker"> <a href="#."><i class="fa fa-flickr"></i> </a></li>
              <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a></li>
              <li class="skype"> <a href="#."><i class="fa fa-skype"></i> </a></li>
              <li class="behance"> <a href="#."><i class="fa fa-behance"></i> </a></li>
              <li class="vimeo"> <a href="#."><i class="fa fa-vimeo-square"></i> </a></li>
              <li class="youtube"> <a href="#."><i class="fa fa-youtube"></i> </a></li>
              <li class="instagram"> <a href="#."><i class="fa fa-instagram"></i> </a></li>
            </ul> -->
          </div>
          
          <!--======= CONTACT FORM =========-->
          <div class="col-sm-6">
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
            <form role="form" id="contact_form" method="post" onSubmit="return false">
              <ul>
                <li>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </li>
                <li>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </li>
                <li>
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company">
                </li>
                <li>
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                </li>
                <li>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                </li>
                <li>
                  <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
	require_once("common_footer.php");
?>