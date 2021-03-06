<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'example@domain.com'; 
    $subject = 'Message from Contact Demo ';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PacificValleyHeatingAir</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-navbar">

    <!-- Navigation -->
    <nav id="main-navbar" class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" role="navigation">
     
        <div class="col-lg-12 navbar nav-number full-width padding-nil">
                <img src="images/Pacific Valley (logo)_small.png" class="float-left nav-logo" width="100" height="50" alt=""/>
                <div class="navbar-lineheight float-left m-right"><span class="no-show">Call Now</span> <span class="number"><strong>559-351-0054</strong></span>
                </div>
                <button class="navbar-toggle float-right button-style" data-toggle="collapse" data-target=".navHeaderCollapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div id="main-navbar" class="collapse navbar-collapse navHeaderCollapse dropdown-nav">
                 <ul class=" no-float-right nav navbar-nav navbar-right navbar-lineheight">     
                     <a href="#ValleyHeating"><li>
                        <div>
                            <span class="menu-color">Heating/Air</span>
                        </div>
                     </li></a>
                     <a href="#info"><li>
                        <div>
                            <span class="menu-color">About</span>
                        </div>
                     </li></a>
                     <a href="#services"><li>
                        <div>
                            <span class="menu-color">Services</span>
                        </div>
                     </li></a>
                     <a href="#contact-us"><li>
                        <div>
                            <span class="menu-color">Contact</span>
                        </div>
                     </li></a>
                </ul>
                </div> 
            </div>
    </nav>
  

      <section id="hero">
    
  <div class="hero-image">

    <img src="images/truck_desktop.jpg" class="img-responsive"/>
  </div>


  <div  class="container-fluid" data-offset="70">  

        <div class="" id="ValleyHeating" >
            <div class="col-lg-12">
                <h1 class="page-header page-header-2">Pacific Valley Heating & Air </h1>
            </div>

            <!-- Linke waypoint js file then create a js file put next boostrap add jquery also-->

            
            
            <div id="element-to-animate" class="col-lg-6 col-sm-12 margin-bottom animated">
                <div class="col-lg-12 col-sm-8 col-xs-12 heating float-left">
                    <img class="img-responsive align-center" src="images/sun.svg" width="100%" height="auto" alt=""/>
                </div>
                <div class="main-info">
                <p class="col-lg-12 col-sm-4 col-xs-12 align-center"><span class="text-lrg"><strong>Heating</strong></span></p>
                 <p class="col-lg-12 col-sm-4 col-xs-12 align-center">Pacific Valley Heating and air is the Valleys authority for servicing your heating unit. Any unit, any age, and any size can be serviced or repaired by us. We offer around the clock service in and around Fresno.</p>
                 </div>
            </div>
            <div id="pacific__animate" class="col-lg-6 col-sm-12 margin-bottom animated">
                <div class="col-lg-12 col-sm-8 col-xs-12 float-right">
                    <img class="img-responsive align-center" src="images/flakes.svg" width="100%" height="auto" alt=""/>
                </div>
                <div class="main-info">
                <p class="col-lg-12 col-sm-4 col-xs-12 align-center"><span class="text-lrg"><strong>Cooling</strong></span></p>
                 <p class="col-lg-12 col-sm-4 col-xs-12 align-center">Pacific Valley Heating and air will keep you cool. We will service your air-conditioner and keep it running at optimal performance to keep your energy costs down. Any size age or model can be serviced by us.</p>
                 </div>
            </div>
                
            </div>   
            

    </div>


   <div id="info" class="container-fluid bg-color" > 
    

        <!-- Marketing Icons Section -->
        <div id="info" class="row ">
            <div class="col-lg-12">
                <h1 class="page-header page-header-2">
                    Residential HVAC Specialist
                </h1>
            </div>
            <div class="col-md-4 hvr-float">
                <div id="boxes-to-animate" class="panel panel-default text-clr-white animated">

                    <div class="panel-heading selected ">
                        <h3><i class="fa fa-fw fa-check"></i> New Installs</h3>
                    </div>
                    

                    <div class="panel-body text-clr-dark">
                    
                         <p>Installs-When it comes time to replace your old A/C unit Pacific Valley Heating and air will find you the best new unit to fit your house and your needs. We can pick and choose from any manufacture for your best unit</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 hvr-float">
                <div  id="boxes-to-animate-2" class="panel panel-default animated">
                    <div class="panel-heading selected">
                        <h3><i class="fa fa-fw fa-check"></i> Repair Services</h3>
                    </div>
                    <div class="panel-body text-clr-dark">
                        
                        <p>We offer 24 hour a day service and can be at your door in a matter of a few hours most days. We have an inspection and service program to make sure all components of your unit are working properly to save you money.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 hvr-float">
                <div  id="boxes-to-animate-3" class="panel panel-default animated">
                    <div class="panel-heading selected">
                        <h3><i class="fa fa-fw fa-check"></i> Sales</h3>
                    </div>
                    <div class="panel-body text-clr-dark">
                       
                        <p>We carry an assortment of commonly needed part and motors to save you money and time. We also offer upgraded thermostats that can connect to your phone so you can make the house cool or hot from just a couple taps of your phone.</p>
                        
                    </div>
                </div>
            </div>
        </div><div class="row 2nd-callout">
            <div class="col-lg-12">
                <h2 class="page-header page-header-2">
                   Dependable and Professional HVAC at a moment's notice.
                </h2>
            </div>
          </div>
       
      </div>
        <!-- /.row -->
     
        <!-- Features Section -->
    <div id="services" class="container-fluid">
      <div class="row">
            <div class="col-lg-12">
              
                <h2 class="page-header page-header-2">Here to Serve All of Your HVAC Needs</h2>
              
            </div>
            <div id="text-to-animate-2" class="col-md-6 animated">
                <p>Residential focused HVAC service that can also handle commercial and industrial units:</p>
                <ul>
                    <li><strong>Sales</strong></li>
                    <li><strong>Service</strong></li>
                    <li><strong>Repair</strong></li>
                    <li><strong>New Install</strong></li>
                  <li><strong>10 years of technician experience</strong></li>
                </ul>
                <br>
                <p>“Our goal is keep you cool in the summer and cozy in the winter”</p>
            </div>
            <div id="element-to-animate-2" class="col-md-6 animated  hvr-float">
              
                <img src="images/repairman.jpg" class="img-responsive" width="700" height="450" alt=""/>
               
            </div>
        </div>
    </div>
    
    <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h1 class="page-header text-center">Contact Form Example</h1>
            <form class="form-horizontal" role="form" method="post" action="index.php">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                  <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
              </div>
              <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                  <?php echo "<p class='text-danger'>$errHuman</p>";?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <?php echo $result; ?>  
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>   



   <footer class="footer-padding bg-color-light">
        

        <div class="row">
        <div class="row">
            
              
                  <div class="col-md-6 col-sm-6 col-md-push-2 col-sm-push-2 col-xs-12 text__clr__wht">
                      <div class="panel-heading panel-heading-2 selected footer-callnow col-lg-12">
                          <p>Call Now 559-351-0054</p>
                      </div>
                      
                 
              </div>
            
        </div>
          <div class="col-md-4 col-sm-4 col-md-push-2 col-sm-push-2 col-xs-12">
              <div class="panel-2 panel-default ">

                <div class="panel-heading panel-heading-2 selected">
                    <p> <span class="text-lrg"><strong>Location</strong></span></p><br><p class="foot-info-negmar"><a href="https://www.google.com/maps/place/4956+E+Pontiac+Way,+Fresno,+CA+93727/@36.7888943,-119.731445,17z/data=!3m1!4b1!4m5!3m4!1s0x80945c39b757a279:0xb3e76de7c00f1c07!8m2!3d36.78889!4d-119.729251?hl=en"><i class="fa fa-map-marker float-left pad-top-min" aria-hidden="true"></i>
4956 E. Pontiac Way Fresno CA</a></p>
                </div>
                <div class="panel-heading panel-heading-2 selected">
                    <p> <span class="text-lrg"><strong>Contact</strong></span></p><br><p class="foot-info-negmar"><i class="fa fa-phone float-left pad-top-min" aria-hidden="true"></i>Office: 559-999-5579</p>
                    <br><p class="foot-info-negmar"><i class="fa fa-phone float-left pad-top-min" aria-hidden="true"></i>Direct Line: 559-351-0054</p>
                    <br><p class="foot-info-negmar"><i class="fa fa-fax float-left pad-top-min" aria-hidden="true"></i>Fax: 559-291-5480</p>
                    <br><p class="foot-info-negmar"><i class="fa fa-envelope-o float-left pad-top-min" aria-hidden="true"></i>Email: arico@picfresno.com</p>
                </div>
              </div>
          </div>
            <div class="col-md-4 col-sm-4 col-md-push-3 col-sm-push-3 col-xs-12">
                <div class="panel-2 panel-default ">
                    <div class="panel-heading panel-heading-2 selected">
                        <p> <span class="text-lrg"><strong>Business Hours</strong></span></p><br><p class="foot-info-negmar"><i class="fa fa-clock-o float-left pad-top-min" aria-hidden="true"></i>
Mon - Fri: 8:00 am - 4:30 pm</p>
                    </div>
                    <div class="panel-heading panel-heading-2 selected">
                        <img src="images/Pacific Valley (logo)_small.png" class="foot-logo img-responsive" max-width="250px" height="auto" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-clr-white align-center">
                <p>Copyright © Your Website 2016</p>
            </div>
        </div>
        
             
    </footer>
       
       
    
</section>
	<!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script  src="js/jquery.waypoints.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Waypoints -->
    <script src="js/myJsFile.js" type="text/javascript"></script>
    <!-- timelinemax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.0/TweenMax.min.js" type="text/javascript"></script>
    <!-- scrollmagic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/plugins/debug.addIndicators.min.js" type="text/javascript"></script>
</body>

</html>
