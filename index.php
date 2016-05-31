<?php 
  session_start();

  $isLogged = false;
  $user = null;

  if (isset($_SESSION["user"])) {
    $isLogged = true;
    $user = $_SESSION["user"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Met Hotels</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navbar -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click();>Met Hotels</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click();>Rooms</a>
            </li>          
            <?php if ($isLogged) { ?>
              <li><a><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></a></li>
              <li><a href="logout.php">Logout</a></li>
            <?php } else { ?>
              <li data-toggle="modal" data-target="#sign-up">
                <a onclick = $("#menu-close").click();  style="cursor: pointer;">Sign up</a>
              </li>
              <li data-toggle="modal" data-target="#sign-in">
                <a onclick = $("#menu-close").click(); style="cursor: pointer;">Log in</a>
              </li>
            <?php } ?>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Met Hotels</h1>
            <h3>Come to our hotels, you won't regret it!</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Hotels are THE place to be when visiting a city!</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sunt, quia, eum enim numquam nam fuga repellat optio placeat, sit amet impedit. Minima amet harum voluptate illo magnam laboriosam aut?</p>
                </div>
            </div>
        </div>
    </section>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up"></i></a>

    <!-- Services -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-bed fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Best Rooms</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Great Location</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wifi fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Free Wifi</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-credit-card fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Easy Payment</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms -->
    <section id="rooms" class="rooms">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Rooms</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="rooms-item">
                                <a href="#">
                                    <img class="img-rooms img-responsive" src="img/room-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="rooms-item">
                                <a href="#">
                                    <img class="img-rooms img-responsive" src="img/room-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 clearfix">
                            <div class="rooms-item">
                                <a href="#">
                                    <img class="img-rooms img-responsive" src="img/room-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="rooms-item">
                                <a href="#">
                                    <img class="img-rooms img-responsive" src="img/room-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark">View More Rooms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Subscribe to our newsletter!</h3>
                    <input type="email" placeholder="your email address" class="col-lg-4 col-lg-push-3">
                    <input type="submit" value="submit" class="btn btn-lg btn-dark col-lg-2 col-lg-push-3">
                </div>
            </div>
        </div>
    </aside>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Met Hotels HQ</strong>
                    </h4>
                    <p>3158 New York Ave.<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Met Hotels 2016.</p>
                </div>
            </div>
        </div>
    </footer>

 <!-- MODAL -->
        <div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title text-center" id="modal-login-label">Met Hotels</h3>
                <p class="text-center">Enter your username and password to log in:</p>
              </div>
              
              <div class="modal-body">
                
                      <form role="form" action="login.php" method="post" class="login-form">
                        <div class="form-group">
                          <label class="sr-only" for="email">Email</label>
                            <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                          </div>
                          <button type="submit" class="btn" id="log-in-btn">Log in!</button>
                      </form>
                      
              </div>
              
            </div>
          </div>
        </div>

         <!-- MODAL -->
        <div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title text-center" id="modal-login-label">Met Hotels</h3>
                <p class="text-center">Enter the required info to sign up:</p>
              </div>
              
              <div class="modal-body">
                <form role="form" action="register.php" method="post" class="sign-up-form">
                  <div class="form-group">
                    <label class="sr-only" for="first_name">First name</label>
                    <input type="text" name="first_name" placeholder="First name..." class="form-first_name form-control" id="form-first_name">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="last_name">Password</label>
                    <input type="text" name="last_name" placeholder="Last name..." class="form-last_name form-control" id="form-last_name">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                  </div>
                  <button type="submit" class="btn" id="sign-up-btn">Sign up!</button>
                </form>
              </div>
              
            </div>
          </div>
        </div>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/met-hotels.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>