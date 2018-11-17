@extends('layout.app')


@section('stylesheets')
	<style>
		#parentdiv {
		position: relative;
		width: 150px;
		height: 150px;
		background-color: #ac5;
		border-radius: 150px;
		margin: 150px;
		}

		.div2 {
		position: absolute;
		width: 40px;
		height: 40px;
		background-color: #ac5;
		border-radius: 100px;
		}
	</style>
@endsection

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-white text-uppercase">
								Create, manage and enjoy your event				
							</h1>
							<p class="text-white">
								as we've got you covered from lights to everything.
							</p>
						</div>											
					</div>
				</div>
			</section>
<!-- End banner Area -->				
	
			<!-- Start feature Area -->
			<section class="feature-area relative" id="feature">
				<div class="container">				
					<div class="row align-items-center">
											<div class="col-sm-12 text-center">
												<h1>Our Mission</h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
											</div>	
											
											<div class="col-sm-12 text-center">
												<h1>Our Vision</h1>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
											</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			<!-- Start quote Area -->
			<section>
				<div class="container" style="height:50vh!important;">
					<div class="row align-items-center">
						<div class="col-sm-6" id="circle-container">
							<div id="circle">
							</div>

							<script>
									var div = 360 / 8;
									var radius = 150;
									var parentdiv = document.getElementById('circle');
									var offsetToParentCenter = parseInt(parentdiv.offsetWidth / 2); //assumes parent is square
									var offsetToChildCenter = 20;
									var totalOffset = offsetToParentCenter - offsetToChildCenter;
									for (var i = 1; i <= 8; ++i) {
										var childdiv = document.createElement('div');
										childdiv.className = 'div2';
										childdiv.style.position = 'absolute';
										childdiv.id = "circle"+i;
										
										var y = Math.sin((div * i) * (Math.PI / 180)) * radius;
										var x = Math.cos((div * i) * (Math.PI / 180)) * radius;

										childdiv.style.top = (y + totalOffset).toString() + "px";
										childdiv.style.left = (x + totalOffset).toString() + "px";
										parentdiv.appendChild(childdiv);
									}
							</script>

						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col"></div>
							</div>

							<div class="row">
								<div class="col"></div>
							</div>

							<div class="row">
								<div class="col"></div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End quote Area -->		
				
			<!-- Start counter Area -->
			<section class="counter-area section-gap" id="counter">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">2536</h1>
								<p>Happy Clients</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">6784</h1>
								<p>Total Projects</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">1059</h1>
								<p>Cups Coffee</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">12239</h1>
								<p>Tickets Submitted</p>								
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end counter Area -->	

			<!-- Start video Area -->
			<section class="video-area pb-100" id="video">
				<div class="container">
					<div class="row justify-content-center">
						<div class="video-section section-gap col-lg-12">
							<div class="text-wrap">
								<h1 class="text-white">Explore ourself in a new way</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<div class="play-btn-wrap">
									<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="play-btn">
									
									<img src="img/play-btn.png" alt=""> Watch Video
									</a>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End video Area -->
															
			<!-- Start callto-action-area Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9">
							<h1 class="text-white">Got Impressed to our features</h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="primary-btn" href="#">Get a free Quote</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto-action-area Area -->


			<!-- Start testomial Area -->
			<section class="testomial-area section-gap" id="testimonail">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">What our Client’s Say about us</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-tstimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>															
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->			

			<!-- Start contact Area -->
			<section class="contact-area" id="contact">
				<div class="container">
					<div class="contact-section">
						<div class="row align-items-center">
							<div class="col-lg-4 contact-left">
								<div style=" width:100%;height: 545px;" id="map"></div>
							</div>
							<div class="col-lg-7 contact-right">
								<form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
									<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
									<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
									<textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
									<div class="alert-msg">
									</div>
								</form>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact Area -->
			
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> Re-distributed by <a target="_blank" href="www.Themewagon.com">Themewagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	
@endsection