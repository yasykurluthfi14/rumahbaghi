<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>Developer</title>
		
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
		<!-- Datatables -->
		<link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables_themeroller.css'?>" rel="stylesheet" type="text/css"/>	
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		
		<style>
			table {
				background-color: lightblue !important;
				border : 1px solid white !important;
			}
		</style>
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

			<div data-background="theme/images/bglahat.jpeg" style="background-image: url(&quot;theme/images/bglahat.jpeg&quot;); background-size: cover; height: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-100">
                            <h2 style="font-size:2.5vw; color:white;"> Data Developer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

				<div class="container text-center form">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
							<table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Developer</th>
                                                <th>No.Telp</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
                                                $no=0;
                                                foreach ($developer->result() as $row):
                                                    $no++;
                                            ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->nama_developer ?></td>
                                                <td><?php echo $row->telepon ?></td>
                                                <td><?php echo $row->alamat ?></td>
                                                
                                               
                                            </tr>
											<?php endforeach;?>
                                        </tbody>
                                       </table>  
							</div>
							
						</div>
					</div>
				</div>
				
				<!-- SECTION ABOUT
				================================================== 	-->	
				<!-- <section class="page-section small-section">				
					<div class="shadow-title shadow-gray unselectable parallax-1">About</div>
					<div class="container relative">
						<div class="row">														
							<div class="col-md-6 col-md-offset-3 mb-10 mb-sm-40 text-center">
								<h2 class="font-face1 section-heading fw800 mt-0 text-center">Tentang</h2>
							</div>							
						</div>	
						<div class="row">
							<div class="col-md-4 col-md-offset-1">
								<div class="blog-item clearfix">						
									
									<img src="<?php echo base_url().'theme/images/'.$about_img;?>">
									
								</div>
							
							</div>

							<div class="col-md-6">
								<div class="blog-item clearfix">	
									<?php echo $about_desc;?>
								</div>
							
							</div>
						</div>
					</div>					
				</section>								 -->
				
				<!-- SECTION SUBSCRIBE
				================================================== -->
				<!-- <section  class="page-section subscribe-section small-section">
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
												<input type="hidden" name="url" value="<?php echo site_url('about');?>" required>
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
				</section> -->
				
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
		<script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#mytable').DataTable();
                $('.dropify').dropify({
                    defaultFile: '',
                    messages: {
                        default: 'Drag atau drop untuk memilih Photo',
                        replace: 'Ganti',
                        remove:  'Hapus',
                        error:   'error'
                    }
                });

                $('.delete').on('click',function(){
                    var userid=$(this).data('userid');
                    $('#ModalDelete').modal('show');
                    $('[name="kode"]').val(userid);
                });
            });
        </script>
		
	</body>
</html>