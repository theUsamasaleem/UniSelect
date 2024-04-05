<?php

include "nav.php";

?>
	<link rel="stylesheet" href="css/chat.css">
	<!-- Search Nav -->
	<div class="search-nav-wrapper">
		<div class="container">
			<div class="flex dir-col">
				<form action="#" method="post" class="flex align-center study">
					<div id="search-title">University Search:</div>
					<div class="search-fields levels">
						<div class="select">
							<select name="slct" id="slct">
								<option selected disabled>Select Levels</option>
								<option value="1">Undergraduate</option>
								<option value="2">Postgraduate</option>
								<option value="3">PhD</option>
								
							</select>
						</div>
					</div>
					<div class="search-fields interest">
						<div class="select">
							<select name="slct" id="slct">
								<option selected disabled>Subject of Interest</option>
								<option value="1">Accounting & Finance</option>
								<option value="2">Business</option>
								<option value="3">Computer Science</option>
								<option value="4">Media Science</option>
								<option value="5">Engineering - Electrical</option>
								<option value="6">Engineering - Chemical</option>
								<option value="7">Engineering - Civil</option>
								<option value="8">Law & Legal Studies</option>
								<option value="9">Nursing</option>
								<option value="104">Sociology</option>

							</select>
						</div>
					</div>
					<div class="search-fields destination-search">
						<div class="select">
							<select name="slct" id="slct">
								<option selected disabled>Study destination</option>
								<option value="1">Karachi</option>
								<option value="2">Lahore</option>
								<option value="3">Islamabad</option>
							</select>
						</div>
					</div>
					<button class="btn submit-btn" type="submit"><a href="b-result.php">GO</a></button>
				</form>
				<form action="#" class="flex align-center search">
					<input type="text" class="form-control search" placeholder="Search">
					<button class="btn search-submit">GO</button>
				</form>
			</div>
		</div>
	</div>



	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Selection System</strong></h2>
										<p class="lead">With UniSelect, find best university according to your preference.</p>
											<a href="select.php" class="hover-btn-new"><span>Advance Search</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Top Ranking <strong></strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">With UniSelect, find best university according to your preference.</p>
											<a href="ranking.php" class="hover-btn-new"><span>View More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Community</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">With UniSelect, find best university according to your preference.</p>
											<a href="contact.html" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="news.html" class="hover-btn-new"><span>News</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<!--
	<input type="checkbox" id="click">
    <label for="click">
      <i class="fab fa-facebook-messenger"></i>
      <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
      <div class="head-text">
		UniSelect Bot - Online
	</div>
	<div class="chat-box">
		<div class="desc-text">
			Hi! How can I help you?
		</div>
		<form action="#">
			<div class="field textarea">
				<textarea cols="30" rows="10" placeholder="Enter your queries.." required></textarea>
			 </div>
			<div class="field">
				<button type="submit">Send</button>
			</div>
		</form>
	</div> -->
	</div>

	
	
	<!-- -->
	
	
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">

                    <p class="lead">Where in the country should you study, and which course is the best match for your interests and ambitions? In our discover section, find information about programs, locations and scholarships.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2020 BEST University Finder</h4>
                        <h2>Welcome to UniSelect</h2>
                        <p>In a world of technology where assistance is provided for almost every daily life thing like grocery shopping, where to go for family dinner, what to buy and etc you can find many applications and websites telling you what is the best choice for you. If we can find applications and websites for restaurants, shopping and other things so why not a website for universities, so to fill that gap we decided to create a site where you can choose a university according to your own preferences.</p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Find your preferred University!</h2>

                        <p>Compare universities around the Pakistan with our interactive university search tool. Use the options to search for universities by location, program type or study level. Results have been ordered based on the amount of information we hold about the institutions.</p>

                    
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Top 8 Universities</h3>
                    <p class="lead">These are the top 8 universities, based upon the HEC Rankings: Pakistan 2020. </p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>1 - SZABIST</h2>
								<p>The Shaheed Zulfikar Ali Bhutto Institute of Science and Technology (SZABIST) is a fully Chartered Institute established and is approved and recognized by HEC.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2 - DHA Suffa University</h2>
								<p>DHA Suffa University (DSU), established in the year 2012, has systematically taken giant strides to become the institution of choice in Pakistan.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>3 - FAST University</h2>
								<p>For more than 30 years NUCES-FAST continues to play an important role in educating and fostering its students for their enlightened careers in Computer Science.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>4 - MAJU</h2>
								<p>The Mohammad Ali Jinnah University is a private university located in Karachi, Sindh, Pakistan. The university offers undergraduate and post-graduate programs.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>5 - NUST</h2>
								<p>National University of Sciences & Technology (NUST) has come a long way as a a premier S&T university of Pakistan since its inception in March 1991. It has earned the infallible reputation of being a next-generation university with a progressive and innovative outlook.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>6 - NED University</h2>
								<p>The NED University of Engineering & Technology, was established in March 1977. The NED University is thus one of the oldest institution in Pakistan for teaching and producing Engineering graduates.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>7 - Karachi University</h2>
								<p>The University of Karachi is a public research university located in Karachi, Sindh, Pakistan. The university was established with a status as "Federal University" in 1951.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>8 - Bahria University</h2>
								<p>Bahria University is a Federally Chartered Public Sector University. The principal seat of Bahria University is at Islamabad and campuses are at Islamabad, Karachi and Lahore.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">12000</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p>100+</p>
					<h3>Programs</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p>50+</p>
					<h3>Affiliations</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>User Feedback</h3>
                <p>Know what feedback our users are giving to us for this website system. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>Umer Farooq </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">The website is one platform to all my options for selecting a university as per my preference.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Ali Khan </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Helped me select university fit best to my criteria. Highly recommended.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Sana Khan </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of student university life by helping students choose best university for them. Authenticity is guaranteed. Students need to visit this site for better options they are missing out. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>Ridah Yaqoob </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">Best decision of my life to visit this site for better perspective in choosing university as per my requirements.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Sara Ali </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Amazing Services!</h3>
                                <p class="lead">Helped alot in choosing best university. Worth the visit and for any query do ask the support they are very helpful and cooperative.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid">
                                <h4>Haris </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great Help</h3>
                                <p class="lead">Very helpful website for all the students out there who recently graduated from intermediate. Guys Do visit it helped me alot. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Finding a better university for higher education is becoming essential for all the students and their parents. To overcome this problem, we decided to develop a website that will be able to not only show universities information but also recommend best few according to students and their parent's desire.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="ranking.php">Ranking</a></li>
                            <li><a href="news.php">Community</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contactus.php">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@uniselect.com</a></li>
                            <li><a href="#">www.uniselect.com</a></li>
                            <li>Block 6, P.E.C.H.S, Karachi</li>
                            <li>090078601</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">UniSelect</a> Design By : Sharaan & Arsalan</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
	<script src="js/ajax.js"></script>
    <script src="js/custom.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

	<script src="js/document.js"></script>
  	
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>