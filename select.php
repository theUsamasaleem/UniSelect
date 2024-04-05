<?php

include "nav.php";

?>	
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Find your Perfect University</h1>
		</div>
	</div>
	
	<div id="overviews" class="section wb">
		<div class="container">
			<div class="multisteps-form">
		        <!--progress bar-->
		        <div class="row">
					<div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
						<div class="multisteps-form__progress">
							<button class="multisteps-form__progress-btn js-active" type="button" title="Search">SEARCH</button>
							<button class="multisteps-form__progress-btn" type="button" title="Match">MATCH</button>
							<button class="multisteps-form__progress-btn" type="button" title="Preference">PREFERENCE</button>
							<button class="multisteps-form__progress-btn" type="button" title="Result">Result</button>
						</div>
					</div>
		        </div>
		        <!--form panels-->
		        
            	<div class="row">
					<div class="col-12 col-lg-12 m-auto">
						<div class="multisteps-form__form" style="min-height: 324px;">
							<!--single form panel for SEARCH-->
							<div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="fadeIn">
								<div class="row">
									<div class="col-12 col-lg-6 m-auto">
										<h2 class="form-section-heading">Tell us your study plans</h2>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													STUDY LEVEL
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="studylevel">
												<div class="_mt_qustionoptions">
													<label for="bac" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="bac" name="study_level" value="bac">
														<span class="ui button basic mt_btn_radio_js_study_level">Bachelors</span>
													</label>
													<label for="ms" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="ms" name="study_level" value="ms">
														<span class="ui button basic mt_btn_radio_js_study_level">Masters</span>
													</label>
													<label for="phd" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="phd" name="study_level" value="phd">
														<span class="ui button basic mt_btn_radio_js_study_level">PHD</span>
													</label>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													DESTINATION
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="destination">
												<div class="_mt_qustionoptions">
													<label for="usa" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="usa" name="destination" value="usa">
														<span class="ui button basic mt_btn_radio_js_study_level">Karachi</span>
													</label>
													<label for="uk" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="uk" name="destination" value="uk">
														<span class="ui button basic mt_btn_radio_js_study_level">Islamabad</span>
													</label>
													<label for="aus" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="aus" name="destination" value="aus">
														<span class="ui button basic mt_btn_radio_js_study_level">Lahore</span>
													</label>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													SUBJECT
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="subject-input">
												<div class="_mt_qustionoptions">
													<select class="js-example-basic-single" name="subject[]" multiple="multiple">
														<option value="computer">Computer</option>
														<option value="graphics">Graphics</option>
														<option value="it">IT</option>
													</select>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>	
										</div>
										<div class="button-row d-flex mt-4">
			    							<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
			      						</div>
									</div>
									<div class="col-12 col-lg-6 m-auto">
					          			<div class="img-sticky">
					          				<picture>
					          					<img class="" src="./images/group-22.svg" alt="userpreference_img1">
					          				</picture>
					          			</div>
					          		</div>
					          	</div>
				          	</div>
				          	<!--single form panel-->
				          	<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="fadeIn">
					          	<div class="row">
					          		<div class="col-12 col-lg-6 m-auto">
					          			<h2 class="form-section-heading">Tell us your study plans</h2>
					          			<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													PREVIOUS STUDY LEVEL
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one previous-level">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel">
													<select class="js-example-basic-single" name="studyLevel">
														<option class="item" disabled selected>Select Study Level</option>
														<option class="item" value="highschool">High School</option>
														<option class="item" value="bachelors">Bachelors</option>
														<option class="item" value="masters">Masters</option>
													</select>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one mt-2 high-school-wrapper">
												<label for="intermediate" class="mt_btn_radio">
													<input type="radio" class="no-jcf" id="intermediate" name="experience" value="intermediate">
													<span class="ui button basic mt_btn_radio_js_study_level">Intermediate</span>
												</label>
												<label for="alevel" class="mt_btn_radio">
													<input type="radio" class="no-jcf" id="alevel" name="experience" value="alevel">
													<span class="ui button basic mt_btn_radio_js_study_level">A-Levels</span>
												</label>
											</div>
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10 mt-3">
													GRADE
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one grade-fields-wrapper grade-data">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel w-40">
													<select class="js-example-basic-single" name="grade_select">
														<option class="item" disabled selected>Select Grade</option>
														<option class="item" value="cgpa">CGPA</option>
														<option class="item" value="percentage">Percentage</option>
													</select>
												</div>
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel w-60">
													<input class="multisteps-form__input form-control" type="text" placeholder="Score">
												</div>
											</div>
										</div>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													WORK EXPERIENCE
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel">
													<label for="no-exp" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="no-exp" name="experience" value="no-exp">
														<span class="ui button basic mt_btn_radio_js_study_level">No Experience</span>
													</label>
													<label for="<1" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="<1" name="experience" value="<1">
														<span class="ui button basic mt_btn_radio_js_study_level">< 1</span>
													</label>
													<label for="1-2" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="1-2" name="experience" value="1-2">
														<span class="ui button basic mt_btn_radio_js_study_level">1 - 2</span>
													</label>
													<label for="2-3" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="2-3" name="experience" value="2-3">
														<span class="ui button basic mt_btn_radio_js_study_level">2 - 3</span>
													</label>
													<label for="3-4" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="3-4" name="experience" value="3-4">
														<span class="ui button basic mt_btn_radio_js_study_level">3 - 4</span>
													</label>
													<label for=">4" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id=">4" name="experience" value=">4">
														<span class="ui button basic mt_btn_radio_js_study_level">> 4</span>
													</label>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="button-row d-flex mt-4 col-12">
												<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
												<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6 m-auto">
					          			<div class="img-sticky">
					          				<picture>
					          					<img class="" src="./images/group-24.svg" alt="userpreference_img1">
					          				</picture>
					          			</div>
					          		</div>
								</div>
							</div>
							<!--single form panel-->
							<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="fadeIn">
								<div class="row">
									<div class="col-12 col-lg-6 m-auto">
					          			<h2 class="form-section-heading">Tell us what matters to you most</h2>
					          			<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													SELECT LOCATION
													<a data-toggle="tooltip" data-placement="top" title="Use the sliding scales to tell us what sort of University or School you want to go to. We use the largest student survey in the world to find the best matches for you."><i class="fas fa-info-circle tooltip-ui"></i></a>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one previous-level">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel">
													<label for="nazimabad" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="nazimabad" name="location" value="nazimabad">
														<span class="ui button basic mt_btn_radio_js_study_level">Nazimabad</span>
													</label>
													<label for="johar" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="johar" name="location" value="johar">
														<span class="ui button basic mt_btn_radio_js_study_level">Johar</span>
													</label>
													<label for="gulshan" class="mt_btn_radio">
														<input type="checkbox" class="no-jcf" id="gulshan" name="location" value="gulshan">
														<span class="ui button basic mt_btn_radio_js_study_level">Gulshan</span>
													</label>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													FEE STRUCTURE
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel">
													<div class="row">
														<div class="col-sm-12">
														  	<div id="slider-range"></div>
														</div>
													</div>
													<div class="row slider-labels">
														<div class="col-lg-6 caption">
														  	<strong>Min:</strong> <span id="slider-range-value1"></span>
														</div>
														<div class="col-lg-6 text-right caption">
														  	<strong>Max:</strong> <span id="slider-range-value2"></span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<form>
																<input type="hidden" name="min-value" value="">
																<input type="hidden" name="max-value" value="">
															</form>
														</div>
													</div>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="multisteps-form__single-panel">
											<div class="accordion">
												<h2 class="_mt_acc_title _mb-10">
													SCHOLARSHIP
													<i class="fas fa-info-circle tooltip-ui"></i>
												</h2>
											</div>
											<div class="_mt_oneComplequestionsdv _mt_hidethis_if_one">
												<div class="_mt_qustionoptions _mt_qustionoptions_studyelevel">
													<label for="yes" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="yes" name="scholarship" value="yes">
														<span class="ui button basic mt_btn_radio_js_study_level">Yes</span>
													</label>
													<label for="no" class="mt_btn_radio">
														<input type="radio" class="no-jcf" id="no" name="scholarship" value="no">
														<span class="ui button basic mt_btn_radio_js_study_level">No</span>
													</label>
												</div>
												<div class="_mt_profiling_pref_label _mt_error_btns _mt_study_level_err">
													<span class="_mt_error_text_small"></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="button-row d-flex mt-4 col-12">
												<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
												<a href="result.php" class="btn btn-success ml-auto" type="button" title="Send">Send</a>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6 m-auto">
					          			<div class="img-sticky">
					          				<picture>
					          					<img class="" src="./images/group-25.svg" alt="userpreference_img1">
					          				</picture>
					          			</div>
					          		</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
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
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="js/nouislider.js"></script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

	<script src="js/document.js"></script>

</body>
</html>