<!DOCTYPE html>
<html lang="en">
<head>

     <title>Cult Fitness </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>


<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- adding php code to read details from text file -->
    <?php
    $fh = fopen('Files/details.txt','r');
    $name1 = fgets($fh);
    $des1 = fgets($fh);
    $name2 = fgets($fh);
    $des2 = fgets($fh);
    fclose($fh);

    ?>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">Cult Fitness</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="#user" class="nav-link smoothScroll">User</a>
                    </li>

                    <!-- Adding login form here -->
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll btn custom-btn bg-color" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#loginForm">Log in</a>
                    </li>
                </ul>

                

                <!-- <ul class="social-icon ml-lg-3">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/_prasadmamidi_/" class="fa fa-instagram"></a></li>
                </ul> -->
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Cult Fitness</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the Cult?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE ($62.50 per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">The quick brown fox jumps over a lazy dog</p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Cult</h2>

                                <p data-aos="fade-up" data-aos-delay="400">The quick brown fox jumps over a lazy dog. The quick brown fox jumps over a lazy dog, The five boxing wizards jump quickly.</p>

                                <p data-aos="fade-up" data-aos-delay="500">The five boxing wizards jump quickly. The quick brown fox jumps over a lazy dog.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <!-- <h3>Mary Yan</h3> -->
                                        <h3><?php echo "$name1"; ?></h3>
                                        <!-- <span>Yoga Instructor</span> -->
                                        <span><?php echo "$des1"; ?></span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3><?php echo "$name2"; ?></h3>
                                        <span><?php echo "$des2"; ?></span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Perfect Body</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                                <a href="./tops.php">
                                    <h3 > Click here for our Most Visited Classes</h3>
                                </a>
                             </div>
                           
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <a href="yoga.php">
                                    
                                    <div class="class-info">
                                        <h3 class="mb-1">Yoga</h3>

                                        <span><strong>Trained by</strong> - Bella</span>

                                        <span class="class-price">$50</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                       
                                        
                                    </div>
                                    </a>

                                </div>
                            </div>
                            
                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">
                                    <a href="areobic.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Areobic</h3>

                                        <span><strong>Trained by</strong> - Mary</span>

                                        <span class="class-price">$66</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio1.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 1</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-2.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio2.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 2</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-3.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio3.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 3</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-4.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio4.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 4</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div><div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-5.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio5.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 5</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div><div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-6.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio6.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 6</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div><div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-7.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio7.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 7</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div><div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class-8.jpg" class="img-fluid" alt="Class">
                                    <a href="cardio8.php">
                                    <div class="class-info">
                                        <h3 class="mb-1">Cardio - 8</h3>

                                        <span><strong>Trained by</strong> - Rishab</span>

                                        <span class="class-price">$75</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </div>
                                    </a>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>
     </section>


     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 1 Washington Sq, San Jose, CA 95192 </p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.309041629757!2d-121.88326018422049!3d37.33519164509988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccb864de43d5%3A0x397ffe721937340e!2sSan%20Jos%C3%A9%20State%20University!5e0!3m2!1sen!2sus!4v1666144296873!5m2!1sen!2sus" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <section class="hero d-flex flex-column justify-content-center align-items-center" id="user">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">Please Select</h6>
                                    <a href="/newuser.php" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Add User</a>
                                    <a href="/search.php" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Search User</a>

                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022 Cult Fitness Co.
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@cult.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0340</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="Durga">

                <input type="email" class="form-control" name="cf-email" placeholder="durga@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>


    <!-- Login Form  -->

    <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
  
          <div class="modal-content">
            <div class="modal-header">
  
              <h2 class="modal-title" id="membershipFormLabel">Login</h2>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  
            <div class="modal-body">
                <form class="membership-form webform" action="loginvalidation.php" role="form" method="POST">
                    <input type="text" class="form-control" name="Username" placeholder="Username">
                    <input type="text" class="form-control" name="Password" placeholder="Password">
                    <button type="submit" class="form-control" id="submit-button" name="submit">Login</button>
                </form>
            </div>
  
            <div class="modal-footer"></div>
  
          </div>
        </div>
      </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>