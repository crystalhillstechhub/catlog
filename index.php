<?php
$response = "";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Crystalhills Catalogue
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
       <header class="header" id="HOME">
                 <!-- Navigation -->
            
            <nav class="navbar navbar-default navbar-fixed-top">
              
                
                <div class="container">
                  
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#loso-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#about">
                          <!-- small size logo -->
                          <h4 class="header-color"><strong>Crystalhills Catalogue</strong></h4>
                          <!-- <img src="images/logobike.png" alt="logo"> -->

                        </a>
                    </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="loso-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about" class="nav-item">Crystalhills Catalogue</a></li>
                        <li><a href="http://crystalhills.org" target="_blank" class="nav-item">Crystalhills Home</a></li>
                        <li><a href="http://shop.crystalhills.org" target="_blank" class="nav-item">Crystalhills Shop</a></li>
                  </ul>
                 
                 
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
</nav>
          
          
          
           <!-- <div class="header-overlay">
               <div class="container">
                   <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                    <div class="row">
                    <div class="col-md-8 wow bounceIn">
                        <div class="header-text">
                            <h1>Old Is Gold</h1>
                            <p>Simple , Clear and Responsive theme for biking sport to help to re-generate it again!</p>
                        </div>
                        <div class="header-btns">
                          <a href="#about">
                              <i class="fa fa-angle-down wow bounceInUp"></i>
                          </a>
                        
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="header-col">
                        
                         <form role="form" class="header-form">
                            <h2>Meet The Champions</h2>
                             <div class="form-group">
                                 <input type="text" placeholder="First Name" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <input type="text" placeholder="Last Name" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <input type="text" placeholder="E- Mail Address" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-3x">Send Data <span> <i class="fa fa-angle-double-right"></i> </span></button>
                             </div>
                         </form>
                       </div>
                        
                    </div>
                </div>
                </div>
                   <div class="row"></div>
               </div>
           </div> -->
       </header>
       <!--Section About-->
       <section id="about">
          
           <div class="section-about">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 wow bounceIn">
                          <h2 class="section-title">Crystalhills Group Catalogue</h2>
                          <p class="under-heading">Take A Look at some of our best products</p>
                      </div>
                  </div>
              </div>
               <div class="section-wrapper">
                   <div class="container">
               <div class="row">
                   <div class="col-md-4 wow bounceInDown">
                       
                        
                           <h3 class="heading">Biometrics</h3>
                           <p class="col-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas delectus excepturi non modi quo iusto aut in nisi, esse provident!</p>
                   </div>
                       
                    <div class="col-md-4 wow bounceInDown">
                       
                           
                           <h3 class="heading">Cctv</h3>
                           <p class="col-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas delectus excepturi non modi quo iusto aut in nisi, esse provident!</p>
                           
                    </div>
                      
                    <div class="col-md-4 wow bounceInRight">
                       
                           
                           <h3 class="heading">Access Control</h3>
                           <p class="col-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas delectus excepturi non modi quo iusto aut in nisi, esse provident!</p>
                       
                    </div>
               </div>
           </div>
               </div>
           </div>
           
       </section><!--end of about section-->

        <section id="contact-us">
            <div class="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow bounceInDown">
                            <h2 class="section-title">Get a Quote</h2>
                            <p class="under-heading">Feel Free to contact us</p>
                            <?php
                                if ($response == TRUE) {
                                    echo "Request for quotation sent!";
                                }
                                else if($response == FALSE) {
                                    echo "Error Sending quote request";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="container">
                        <form role="form" method="post" action="getquote.php">
                            <div class="row">
                            <div class="col-md-6 wow bounceInLeft">
                                
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" class="form-control input-lg" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Your E - Mail" class="form-control input-lg" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Subjet" class="form-control input-lg" name="subject">
                                    </div>
                                
                            </div>
                            <div class="col-md-6 wow bounceInRight">
                               <div class="form-group">
                                <textarea placeholder="Product Details and Quantity" class="form-control " name="details"></textarea>
                               </div>
                               <button type="submit" name="submit" class="btn btn-primary btn-block input-lg">Get Quote</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icons wow slideInDown">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="footer-text" >Crystalhills Software Group <span class="copyright"> &copy;</span>2017</p>
                        </div>
                        <div class="col-md-4">
                            <p class="footer-text"><a href="#about" class="top-overide">Back to Top</a></p>
                        </div>
                        <div class="col-md-4">
                            <p class="footer-text">Designed and crafted<span class="usama"> with <i class="fa fa-heart"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="loading-overlay">
       <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
       </div>
       </section>
       
       
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
    </body>
</html>