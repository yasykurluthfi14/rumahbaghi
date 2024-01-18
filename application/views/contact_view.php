<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>Contact</title>
		
		<!-- Page header -->
		<meta charset="utf-8"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width"/>
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		
	</head>
	<body class="content-animate">

		<!-- PRELOADER
		==================================================-->	
		<div class="page-loader">
			<div class="loader-area"></div>
			<div class="loader font-face1">loading...	
			</div>
		</div>   
		
		<!-- PAGE
		==================================================-->	
		<div id="top" class="page">
			
			<!-- Navigation panel
			================================================== -->		
			<?php echo $header;?>
				<!-- End Navigation panel -->
		
			<!-- Main Content
			==================================================-->		
			<main class="cd-main-content mt-100">

				
				
				<!-- SECTION ABOUT
				================================================== 	-->	
				<section class="page-section small-section">				
					<div class="container relative">
						
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<!-- SECTION BLOG ITEM
								================================================== -->
								<div class="blog-item clearfix">						
									
									
									<!--POST LEAVE COMMENT-->
									<div class="comments-heading text-center mb-30">
										<hgroup>
											<h2 class="font-face1 section-heading">Contact</h2>
										</hgroup>									
									</div>
									<?php echo $this->session->flashdata('msg');?>
									<form method="post" action="<?php echo site_url('contact/send');?>" role="form" class="form">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													 <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">										
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" name="email" class="full_width" placeholder="Email *" maxlength="100" required="">									
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" name="subject" class="full_width" placeholder="Subject *" maxlength="100" required="">									
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="full_width" rows="6" placeholder="Comment *" maxlength="400" required></textarea>										
												</div>
											</div>
											<div class="col-md-12 center-xs">
												<button type="submit" class="btn bg-black white-color">
													Submit
												</button>
											</div>	
										</div>		
									</form>
									<!--END POST LEAVE COMMENT-->
									
								</div>
							
							</div>
						</div>
					</div>					
				</section>								
				
				<!-- SECTION SUBSCRIBE
				================================================== -->
				<section  class="page-section subscribe-section small-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">	
								<div class="form-subscribe mb-50 mb-sm-0">
									<div class="col-sm-6 mb-sm-40">
										<h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0" >Newsletter.</h2>
									</div>
									<div class="col-sm-6">										
										<form class="form-inline" action="<?php echo site_url('subscribe');?>" method="post">
											<div class="form-group">
												<input type="hidden" name="url" value="<?php echo site_url('contact');?>" required>
												<input type="email" name="email" required placeholder="Your Email..." class="form-control">
												<button type="submit" class="btn btn-subscribe">Subscribe</button>
											</div>
										</form>										
									</div>
								</div>
								<div><?php echo $this->session->flashdata('message');?></div>									
							</div>
						</div>
					</div>
				</section>
				
				
				<hr class="nomargin nopadding"/>
				
				<!-- FOOTER
				================================================== -->	
				<?php echo $footer;?>
				
				</main>		
	
		</div>
			
		<!-- Modal Search-->
		<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">	
		      	<form action="<?php echo site_url('search');?>" method="GET">
		        	<div class="input-group">
		              <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
				      </span>
				    </div>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
		
		<!-- JAVASCRIPT
		==================================================-->
		<script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.easing.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/waypoints.min.js')?>"></script>		
		<script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.localScroll.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.viewport.mini.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.sticky.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.fitvids.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js')?>"></script>
		<script src="<?php echo base_url('theme/js/isotope.pkgd.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js')?>"></script> 
		<script src="<?php echo base_url('theme/js/masonry.pkgd.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.counterup.min.js')?>"></script>					
		<script src="<?php echo base_url('theme/js/slick.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/wow.min.js')?>"></script>		
		<script src="<?php echo base_url('theme/js/script.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jssocials.min.js')?>"></script>	
		
	</body>
</html>