<?php
if( isset($_COOKIE['visits']) )
{
    // Checking if the user already visited the site
    if( $_COOKIE['visits'] >= 1 )
      $delay = 1;


    // Increasing cookie value
    setcookie("visits", $_COOKIE['visits'] + 1, time()+150);
}
else
{
    // First visit

    $delay = 6;
    setcookie("visits", 1, time()+150);
}
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Wildan Angga Rahman</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/animate.min.css">
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/animate.min.css">
   <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home" data-type="background" data-speed="10">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline wow bounceInUp" id="wow" data-wow-duration="1s" data-wow-delay="<?=$delay?>s">Wildan Angga Rahman</h1>
            <h3 class="wow fadeInUp" data-wow-delay="<?=$delay+0.4?>s" id="wow">I'm a <span>programmer</span> who like adventuring.
            web development is a most I skilled, because there I can spilled the beatiful thing on it.
             <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr class="wow fadeInUp" data-wow-delay="<?=$delay+0.5?>s"/>
            <ul class="social">
               <li class="wow bounceIn" data-wow-delay="<?=$delay+0.8?>s" id="wow"><a href="https://www.facebook.com/wildan.ween"><i class="fa fa-facebook"></i></a></li>
               <li class="wow bounceIn" data-wow-delay="<?=$delay+1.2?>s" id="wow"><a href="https://www.twitter.com/wardwar_"><i class="fa fa-twitter"></i></a></li>
               <li class="wow bounceIn" data-wow-delay="<?=$delay+1.6?>s" id="wow"><a href="https://plus.google.com/+WildanAnggaRahman"><i class="fa fa-google-plus"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown wow pulse bounceIn" data-wow-delay="<?=$delay+2?>s" id="wow">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profile.jpg" alt="Wildan Angga Rahman" />

         </div>

         <div class="nine columns main-col">

            <h2 class="wow bounce">About Me</h2>

            <p>Seorang yang lahir untuk berlari mencari hal yang baru,
            saat ini hobbi sebagai paradise hunter (nature), mempunyai ambisi
            yang sangat besar dalam hal menggabungkan dua hal yang berbeda yaitu 
            nature dan teknoligi sebagai base skill saya.
            web salah satu yang saya kuasai, seakan haus ilmu jika sedang mengerjakan web.
            seorang yang selalu berimajinasi dan mempunyai banyak keinginan yang ingin dicapai
            menjadi cara saya untuk mengembangkan lebih jauh lagi.
            <br />
            <br />
            HUBUNGI SAYA JIKA INGIN MEMBUAT WESITE YANG ANDA INGIKAN.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Wildan Angga Rahman</span><br>
						   <span>jalan Puyuh Dalam<br>
						         Bandung - Jawa Barat
                     <br/>
                     Indonesia
                     </span><br>
						   <span>08992110102</span><br>
                     <span>wildan@gmail.com</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Universitas Komputer Indonesia</h3>
                  <p class="info">Teknik Informatika <span>&bull;</span> <em class="date">April 2011</em></p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>MoccaDev</h3>
                  <p class="info">Web Developer <span>&bull;</span> <em class="date">March 2013 - Present</em></p>

                  <p>
                    Mengerjakan sejumlah project Website.
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand php"></span><em>PHP</em></li>
                  <li><span class="bar-expand html5"></span><em>HTML5</em></li>
						<li><span class="bar-expand css3"></span><em>CSS3</em></li>
						<li><span class="bar-expand jquery"></span><em>jQuery</em></li>
						<li><span class="bar-expand c"></span><em>C</em></li>
                  <li><span class="bar-expand cpp"></span><em>C++</em></li>
                  <li><span class="bar-expand cs"></span><em>C#</em></li>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/portfolio/backsilmove.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Backsilmove</h5>
                              <p>Web</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-backsilmove.jpg" alt="" />

		      <div class="description-box">
			      <h4>Backsilmove</h4>
			      <p>Website Organisai Lingkungan</p>
               <span class="categories"><i class="fa fa-tag"></i>Web</span>
		      </div>

            <div class="link-box">
               <!-- <a href="#">Details</a> -->
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
<!--    <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

            <h1><span>Get Hosting.</span></h1>

         </div>

         <div class="seven columns">

            <h2><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h2>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>.  -->
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --><!-- </p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section>  --><!-- Call-To-Action Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>Web nya keren trimakasi om :D
                           </p>
                           <cite>Backsilmove</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <!-- <li>
                        <blockquote>
                           <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                           Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                           nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                           </p>
                           <cite>Mr. Adobe</cite>
                        </blockquote>
                     </li> --> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Contact saya dan deskripsikan web keinginan anda.
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   Wildan Angga Rahman<br>
						   jalan Puyuh Dalam <br>
						   Bandung - Jawa Barat<br>
						   <span>08992110102</span>
					   </p>

				   </div>

               <!-- <div class="widget widget_tweets">

                  <h4 class="widget-title">Latest Tweets</h4>

                  <ul id="twitter">
                     <li>
                        <span>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">2 Days Ago</a></b>
                     </li>
                     <li>
                        <span>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">3 Days Ago</a></b>
                     </li>
                  </ul>

		         </div> -->

            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="https://www.facebook.com/wildan.ween"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.twitter.com/wardwar_"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://plus.google.com/+WildanAnggaRahman"><i class="fa fa-google-plus"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2014 wardwar</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/init.js"></script>

</body>

</html>