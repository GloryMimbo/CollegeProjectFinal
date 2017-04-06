<?php
  $pageNo = "2";
  $pageName = "Register Online";
  require_once("genfunctions.php");

  require_once("common_header.php");
?>

 <!--======= CLIENTS =========-->
  <section class="our-best">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>Register Your Details Here!</h3>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <label class="pull-left">Present Nationality : </label>
          <select class="form-control" name="present_nationality" id="present_nationality"><?php echo getCountriesList(); ?></select>
        </div>
        <div class="col-sm-4">
          <label class="pull-left">State : </label>
          <select class="form-control state" name="state" id="state"><?php echo getStatesList(); ?></select>
        </div>
        <div class="col-sm-4">
          <label class="pull-left">City : </label>
          <select class="form-control" name="city" id="city"><option value="0">Select One</option></select>
        </div>
      </div>
      <br><hr><br>
      <ul class="row">
        <li>
        	<a href="register.php?job=add&view=registration">
          		<div class="icon"> <img src="assets/images/icon-1.png" alt="" > </div>
          		<h6>Registration</h6>
          	</a>
        </li>
        <li>
          <a class="other_reg" href="admin/login.php">
            <div class="icon"> <img src="assets/images/icon-2.png" alt="" > </div>
            <h6>Visa Extension</h6>
          </a>
        </li>
        <li>
          <a class="other_reg" href="admin/login.php">
            <div class="icon"> <img src="assets/images/icon-3.png" alt="" > </div>
            <h6>Exit Permit</h6>
          </a>
        </li>
        <li>
          <a class="other_reg" href="admin/login.php">
            <div class="icon"> <img src="assets/images/icon-5.png" alt="" > </div>
            <h6>Change of Address</h6>
          </a>
        </li>
        <li>
          <a class="other_reg" href="admin/login.php">
            <div class="icon"> <img src="assets/images/icon-7.png" alt="" > </div>
            <h6>Change of Passport</h6>
          </a>
        </li>
        <li>
          <a class="other_reg" href="admin/login.php">
            <div class="icon"> <img src="assets/images/icon-6.png" alt="" > </div>
            <h6>Loss of Passport</h6>
          </a>
        </li>
      </ul>
    </div>
  </section>

<?php
  require_once("common_footer.php");
?>
<script type="text/javascript">

  $(document).ready(function(){

    $(".other_reg").click(function(){

        alert("Please Register before apply this service!!");

        return false;
        
    });

    $(".state").on("change", function() {
        var stateId = $(this).val();
        
        $('#city').find('option').remove();

        if(stateId != ''){
            
            $.ajax({
                url: "register_actions.php",
                type: "post",
                data: { type: "getCitiesByStateId", state_id: stateId },
                success: function(data){
                  
                  var data = JSON.parse(data);
                  if(data.tp == 1){
                      $.each(data['result'], function(key, val) {
                          var option = $('<option />');
                          option.attr('value', key).text(val);
                          $('#city').append(option);
                      });
                      $("#city").prop("disabled",false);
                  }
                },
                error: function(data){
                  alert(data);
                }
            });

        }
        else{
            $("#city option:gt(0)").remove();
        }
    });

  });
</script>