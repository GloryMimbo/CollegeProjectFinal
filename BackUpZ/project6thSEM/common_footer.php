  
  <!--======= FOOTER =========-->
  <footer>
    <div class="container">
      <ul class="row">
        <li class="col-sm-4">
          <h6>Learn French</h6>
          <p>Learn about the French language: where it came from, where it's spoken and by how many people, why you should learn it, and how it compares to other languages.</p>
          <p>In DRCongo, you'll learn the version of French that you'd hear in Paris. Don't worry though! You'll be understood by the 220 million French speakers across the globe since this is considered the standard.</p>
        </li>
        <li class="col-sm-5">
          <h6>quick link</h6>
          <div class="row links">
            <ul class="col-xs-6">
              <li><a href="index.php">Home</a> </li>
              <li><a href="immigration.php?view=about-immigration">About Immigration</a> </li>
              <li><a href="immigration.php?view=supporting-document">Supporting Document</a> </li>
              <li><a href="immigration.php?view=foreigners">Foreigners</a> </li>
              <li><a href="more_services.php?view=environment-and-natural-resoures">Environment and Natural Resoures</a> </li>
            </ul>
            <ul class="col-xs-6">
              <li><a href="study.php?view=learning-french">Learning french</a> </li>
              <li><a href="more_services.php?view=culture-history-and-sport">Culture, history and sport</a> </li>
              <li><a href="more_services.php?view=transport-and-infrasture">Transport and infrasture</a> </li>
              <li><a href="more_services.php?view=money-and-finance">Money and finance</a> </li>
              <li><a href="more_services.php?view=national-security-and-defence">National security and defence</a> </li>
            </ul>
          </div>
        </li>
        <li class="col-sm-3">
          <div class="subcribe">
            <h6>Subscribe To Mail!</h6>
            <p>Get our Daily email newsletter with 
              Special Services, Updates, Offers and more!</p>
            <input type="search" class="form-control" placeholder="Email Address">
            <button type="submit">SIGNUP!</button>
          </div>
        </li>
      </ul>
    </div>
    <div class="rights">
      <p>copyrights © <?php echo date('Y'); ?> All rights reserved </p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery-1.11.0.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.stellar.js"></script> 
<script src="assets/js/jquery.isotope.min.js"></script> 
<script src="assets/js/jquery.flexslider-min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/jquery.sticky.js"></script> 
<script src="assets/js/own-menu.js"></script> 
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>

<?php

    if(isset($pageNo) && $pageNo=="5") 
    {

?>
<!-- MAP --> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script src="assets/js/mapmarker.js"></script> 
<script type="text/javascript">
    // Use below link if you want to get latitude & longitude
    // http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php 
    $(document).ready(function(){
    
        //set up markers 
        var myMarkers = {"markers": [
                {"latitude": "-4.309535", "longitude":"15.292631", "icon": "images/map-locator.png", "baloon_text": '65 Boulevard du 30 Juin Gombe - Kinshasa'}
            ]
        };
        
        //set up map options
        $("#map").mapmarker({
            zoom    : 18,
            center  : '65 Boulevard du 30 Juin Gombe - Kinshasa',
            markers : myMarkers
        });

    });
</script>
<?php

    }

?>
</body>
</html>