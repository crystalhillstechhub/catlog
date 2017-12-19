<!DOCTYPE html>
<html>
    <head>
        <title>
            Crystalhills Catalogue
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
       <header class="header" id="HOME">
       </header>
       <!--Section About-->
       <!-- <section id="about"> -->
          
           <div class="section-about">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 wow bounceIn">
                          <h2 class="section-title">Crystalhills Group Catalogue</h2>
                          <p class="under-heading">A step away from getting our catalogue</p>
                      </div>
                  </div>
              </div>
               <div class="section-wrapper">
                   <div class="container">
               <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" name="download">Click To Download Catalogue</button>
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
                                        <input type="text" placeholder="Your E-Mail" class="form-control input-lg" name="email">
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
            
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-md-center" style="color:#1d9bd4;">You are just a step away from getting Crystalhills catalogue</h4>
                        
                    </div>
                    <form method="post" action="send.php">
                        <div class="modal-body">
                            <div class="form-group>">
                                <label for="email">Full Name</label>
                                <input type="text" class="form-control" name="fullName" required>
                            </div>

                            <div class="form-group>">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group>">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phoneNumber" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="signup" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
       

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>new WOW().init();</script>

        <script>

            if(document.cookie.indexOf('visited=true') == -1){
                $('#myModal').modal({show: 'show',
                    backdrop: 'static',
                    keyboard: false
                });
                var year = 1000*60*60*24*365;
                var expires = new Date((new Date()).valueOf() + year);
                document.cookie = "visited=true;expires=" + expires.toUTCString();
            }else {
                console.log('welcome back');
            }
        </script>
    </body>
</html>