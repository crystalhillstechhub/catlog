<!DOCTYPE html>
<html>
    <head>
        <title>
            Crystalhills Catalogue
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <style>
            .refixer{
                margin-top: -80px;
                margin-left: -40px;
            }
        </style>
    </head>
    <body>
       <header class="header" id="HOME">
        &nbsp; &nbsp;
       </header>
       <!--Section About-->
       <!-- <section id="about"> -->
          
           <div class="section-about">
              <div class="container">
              <div class="row">
              <div class="col-md-12 text-center refixer">
              <img src="img/our-logo.png" alt="logo" class="img-responsive text-center" height="100px" width="100px"/></div></div>
                  <div class="row">
                      <div class="col-md-12 wow bounceIn">
                          <h2 class="section-title"> Crystalhills Group Catalogue</h2>
                          <p class="under-heading">A step away from getting our catalogue</p>
                      </div>
                  </div>
              </div>
               <div class="section-wrapper">
                   <div class="container">
               <div class="row">
               <div class="col-md-12">
                <div class="col-md-3">

                <img src="img/biometrics.png" alt="biometrics img" class="img-responsive">
                    <h4>Biometrics Catalogue</h4>
                    <a class="btn btn-primary" href="file/biometrics.pdf" target="_blank" name="download">Download Catalogue</a>
                </div>
                <div class="col-md-3">
                <img src="img/cctv.png" alt="biometrics img" class="img-responsive">
                <h4>Camera Catalogue</h4>
                    <a class="btn btn-primary" href="file/camera.pdf" target="_blank" name="download">Download Catalogue</a>
                </div>
                <div class="col-md-3">
                <img src="img/pabx.png" alt="biometrics img" class="img-responsive">
                <h4>PABX Catalogue</h4>
                    <a class="btn btn-primary" href="file/pabx.pdf" target="_blank" name="download">Download Catalogue</a>
                </div>
                <div class="col-md-3">
                <img src="img/general.png" alt="biometrics img" class="img-responsive">
                <h4>General Catalogue</h4>
                    <a class="btn btn-primary" href="file/catlog.pdf" target="_blank" name="download">Download Catalogue</a>
                </div>
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
                            <h6 class="section-title">Request for a Quote</h6>
                            <p class="under-heading">Receive Response Within 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="container">
                        <form role="form" method="post" action="getquote.php">
                            <div class="row">
                            <div class="col-md-6 wow bounceInLeft">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control input-lg" id="qFullName" name="fullName" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Your E-Mail (someone@domain.com)" id="qEmail" class="form-control input-lg" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Your Mobile Number" id="qPhoneNumber" class="form-control input-lg" name="phoneNumber" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subjet" class="form-control input-lg" name="subject" value="Quotation" required>
                                </div>
                            </div>
                            <div class="col-md-6 wow bounceInRight">
                                <div class="form-group">
                                    <select class="form-control input-lg" name="productName" required>
                                        <option value="general">General</option>
                                        <option value="biometrics-devices">Time and Attendance (Biometrics Devices)</option>
                                        <option value="spy-cameras">Spy Cameras</option>
                                        <option value="electic-fencing">Electric Fencing</option> 
                                        <option value="Access-control">Access Control</option>
                                        <option value="Smart-home-solutions">Smart Home Solutions</option>
                                        <option value="School-managment-solution">School Managment Solutions</option>    
                                        <option value="Payroll-automation">Payroll Automation</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                    </select>
                                </div>
                               <div class="form-group">
                                    <textarea placeholder="Product Details and Quantity" required class="form-control " name="details"></textarea>
                               </div>
                               <input type="submit" class="btn btn-primary btn-block input-lg" name="getQuote" value="Get Quote">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icons wow slideInDown">
                                    <ul class="list-unstyled">
                                        <li><a href="https://web.facebook.com/crystalhillsgroup"><i class="fa fa-facebook fa-3x"></i></a></li>
                                        <li><a href="https://www.twitter.com/crystalhills_"><i class="fa fa-twitter fa-3x"></i></a></li>
                                        <li><a href="https://www.instagram.com/technologyhubng"><i class="fa fa-instagram fa-3x"></i></a></li>
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
                        <button type="button" class="close hidden" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-md-center" style="color:#1d9bd4;">You are just a step away from getting Crystalhills catalogue</h4>
                        
                    </div>
                    <form method="post" action="send.php">
                        <div class="modal-body">
                            <div class="form-group>">
                                <label for="email">Full Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" required>
                            </div>

                            <div class="form-group>">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="form-group>">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="signup" id="signup" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
       

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
        <script>new WOW().init();</script>

        <script>
            $(document).ready(function(){
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

                $('#signup').click(function() {
                    const fullName = document.getElementById('fullName').value;
                    const email = document.getElementById('email').value;
                    const phoneNumber = document.getElementById('phoneNumber').value;   
                    if(fullName != '' && email != '' && phoneNumber != '')
                    {
                        $('.close').trigger('click');
                        $('#qFullName').val($('#fullName').val());
                        $('#qEmail').val($('#email').val());
                        $('#qPhoneNumber').val($('#phoneNumber').val());
                    }    
                    else{
                        $.notify("All fields are required", "warn");
                    }                                 
                }); 
            });
        </script>
    </body>
</html>