<?php
    ob_start();
    require_once("genfunctions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/style.default.css" rel="stylesheet">

    <style type="text/css">
        body, .form-control{
            font-size: 13px;
        }
    </style>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery -->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(function() {

            if (localStorage.chkbx && localStorage.chkbx != '') {
                $('#remember_me').attr('checked', 'checked');
                $('#username').val(localStorage.usrname);
                $('#pass').val(localStorage.pass);
            } else {
                $('#remember_me').removeAttr('checked');
                $('#username').val('');
                $('#pass').val('');
            }

            $('#remember_me').click(function() {

                if ($('#remember_me').is(':checked')) {
                    // save username and password
                    localStorage.usrname = $('#username').val();
                    localStorage.pass = $('#pass').val();
                    localStorage.chkbx = $('#remember_me').val();
                } else {
                    localStorage.usrname = '';
                    localStorage.pass = '';
                    localStorage.chkbx = '';
                }
            });
        });    
    </script>

        <style type="text/css">
            @CHARSET "UTF-8";
            /*
            over-ride "Weak" message, show font in dark grey
            */

            .progress-bar {
                color: #333;
            } 

            /*
            Reference:
            http://www.bootstrapzen.com/item/135/simple-login-form-logo/
            */

            * {
                -webkit-box-sizing: border-box;
                   -moz-box-sizing: border-box;
                        box-sizing: border-box;
                outline: none;
            }

                .form-control {
                  position: relative;
                  font-size: 16px;
                  height: auto;
                  padding: 10px;
                    @include box-sizing(border-box);

                    &:focus {
                      z-index: 2;
                    }
                }

            body {
                background-color: #d23838;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .login-form {
                margin-top: 60px;
            }

            form[role=login] {
                color: #5d5d5d;
                background: #f2f2f2;
                padding: 26px;
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
            }
                form[role=login] img {
                    display: block;
                    margin: 0 auto;
                    margin-bottom: 35px;
                }
                form[role=login] input,
                form[role=login] button {
                    font-size: 18px;
                    margin: 16px 0;
                }
                form[role=login] > div {
                    text-align: center;
                }
                
            .form-links {
                text-align: center;
                margin-top: 1em;
                margin-bottom: 50px;
            }
                .form-links a {
                    color: #fff;
                }
        </style>
  </head>

  <body>

    <div class="container">  
        <?php
        if(isset($error) && $error !='')
        {
            ?>
        <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
        <?php
        }
        ?>
      <div class="row" id="pwd-container">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
          <section class="login-form">
            <form method="post" role="login">
              <center><h3>Login</h3></center>
              
              <input type="text" name="username" id="username" autofocus placeholder="Email ID" required class="form-control input-lg" />
              
              <input type="password" class="form-control input-lg" id="pass" name="password" placeholder="DOB(YYYY/MM/DD)" required="" />
                            
              <input type="checkbox" value="remember-me" id="remember_me">
              <label for="remember_me">Remember me</label>
              
              <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                            
            </form>
            
          </section>  
          </div>
          
          <div class="col-md-4"></div>

          <?php

            if(isset($_POST['go']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "select id, full_name, email_id, usertype from register where email_id = '$username' and dob='$password' ";
                $res = mysql_query($sql) or die("ERR".mysql_error());

                $r = mysql_fetch_assoc($res);
                
                if(mysql_num_rows($res)>0)
                {
                    session_start();
                    $_SESSION['LOGGED_IN'] = $r['id'];
                    $_SESSION['user_type'] = $r['usertype'];
                    $_SESSION['reg_profile_id'] = $r['id'];
                    $_SESSION['full_name'] = $r['full_name'];
                    $_SESSION['email_id'] = $r['email_id'];

                    header("location:index.php");
                    exit();

                }
            }

          ?>
          

      </div>
      
    </div>

  </body>
</html>