<?php

include "nav.php";
?>
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Q/A Forum<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_single.jpg" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
								<span class="day">19</span>
								<span class="month">Dec</span>
							</div>
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <a href="#">Dec 15, 2020</a> </span>
								<span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>
							<div class="blog-title">
								<h2><a href="#" title="">Free Degrees! And Other Reasons to Study in Nordic Countries</a></h2>
							</div>
							<div class="blog-desc">
								<p>Did you know that…in Norway and Finland, you can complete a bachelor’s degree at a public university free of charge, no matter where you come from? </p>
								<blockquote class="default">
								Sounds too good to be true, doesn’t it? Especially when you consider that these are some of the most developed countries in the world, with some of the best universities, cultured cities and beautiful scenery.
								</blockquote>
								<p>The Nordic countries are a group of countries in northern Europe, including Denmark, Sweden, Norway, Finland and Iceland (which doesn’t have free degrees). Greenland and the Faroe Islands, which are self-governing but technically part of the Kingdom of Denmark, are also included.</p>
								<p>These countries have some shared history and culture, and they collaborate politically through the Nordic Council.
									There’s an overlap with the region known as Scandinavia – which is Denmark, Norway and Sweden.</p>
							</div>							
						</div>
					</div>
					
					<div class="blog-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Javaria</a></h3>
							<h5>Writer at <a href="#">UniSelect</a></h5>
							<p class="author_det">
							The editor of UniSelecs.com, Javaria oversaw the site's editorial content and student forums. She also edited the UniSelect Grad Program Guide and contributed to market research reports.
							</p>
						</div>
						<div class="author-desc">
							<img src="images/author.jpg" alt="about author">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="blog-comments" id="display_info">
						<h4>Comments (3)</h4>
						<div id="comment-blog">
							<ul class="comment-list" >
								<li class="comment">
									<div class="avatar"><img alt="" src="images/avatar-01.jpg" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">Saim Ahmed</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">December 19, 2020</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>It was very helpuful. Thank you!</p>
										</div>
									</div>
								</li>
								<li class="comment">
									<div class="avatar"><img alt="" src="images/avatar-02.jpg" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">Sarah</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">December 16, 2020</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Can you tell me when are the admission opening?</p>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<div class="avatar"><img alt="" src="images/avatar-03.jpg" class="avatar"></div>
											<div class="comment-container">
												<h5 class="comment-author"><a href="#">Ridah</a></h5>
												<div class="comment-meta"><a href="#" class="comment-date link-style1">December 20, 2020</a><a class="comment-reply-link link-style3" href="#respond">Reply »</a></div>
												<div class="comment-body">
													<p>The admission opening date for nordic Universties is 23 March 2021.</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="comments-form">
						<h4>Leave a comment</h4>
						<div class="comment-form-main">
							<!-- <form action="#" method="get"> -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
										</div>
									</div>
									<div class="col-md-12 post-btn">
										<button onClick='postComments()' class="hover-btn-new orange"><span>Post Comment</span></button>
									</div>
								</div>
							<!-- </form> -->
						</div>
					</div>
					
                </div><!-- end col -->
				<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="#">
								<div>
									<input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
									<input id="searchsubmit" value="Search" type="submit">
								</div>
							</form>
						</div>
					</div>
					<div class="widget-categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li><a href="#">Political Science</a></li>
							<li><a href="#">Business Leaders Guide</a></li>
							<li><a href="#">Become a Product Manage</a></li>
							<li><a href="#">Language Education</a></li>
							<li><a href="#">Micro Biology</a></li>
							<li><a href="#">Social Media Management</a></li>
						</ul>
					</div>
					<div class="widget-tags">
						<h3 class="widget-title">Search Tags</h3>
						<ul class="tags">
							<li><a href="#"><b>business</b></a></li>
							<li><a href="#"><b>finance</b></a></li>
							<li><a href="#">corporate</a></li>
							<li><a href="#">mechanicalengineering</a></li>
							<li><a href="#">admissions</a></li>
							<li><a href="#"><b>civilengineering</b></a></li>
							<li><a href="#"><b>news</b></a></li>
							<li><a href="#"><b>ranking2020</b></a></li>
							<li><a href="#">multipurpose</a></li>
							<li><a href="#">requirements</a></li>
							<li><a href="#">forum</a></li>
							<li><a href="#">nordic</a></li>
							<li><a href="#"><b>software</b></a></li>
						</ul>
					</div>
				</div>
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
    <script src="js/custom.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
	
	
	<script>
		$( document ).ready(function() {
			loadComments();
		});
		
		function loadComments(){
			
			var status = "forum";
			$.ajax({
				type: "post",
				url: "./functions/get_comment.php",
				data: {status: status},
				success: function (data) {
					$( '#display_info' ).html(data);
				}

			});
			
			$("#commenter-message").val('');
		}
		
		function showSuccessMessage(){
			
			swal(
				'Congratulation',
				'Your comment has been posted.',
				'success'
			)
			
		}
		
		function showLoginMessage(){
			swal(
					'Please Login!',
					'in order to post a comment.',
					'warning'
				)			
		}
		
		function showErrorMessage(){
			swal(
					'Error Message!',
					'Cant post a comment.',
					'warning'
				)
		}
		
		function postComments(){
			
			if (<?php echo isset($_SESSION['userid'])?'true':'false'; ?>) {
				if(document.getElementById('commenter-message').value != ""){
					showSuccessMessage();
					
					
                    var comment = $("#commenter-message").val();
					var status = "forum";
                    $.ajax({
                        type: "post",
                        url: "./functions/post_comment.php",
                        data: {comment: comment, status: status},
                        success: function (data) {
                            showSuccessMessage();
							loadComments();
                        }

                    });
					
					
				}
				else{
					showErrorMessage();
				}
			  
			} else {
			  showLoginMessage();
			}
			
			
			
			
		}
	</script>
</body>
</html>