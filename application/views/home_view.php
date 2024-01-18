<!DOCTYPE html>
<html lang="en">
<head>

		<!-- Page Title -->
		<title><?php echo $site_title;?></title>
		
		<!-- Page header -->
		<meta charset="utf-8"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- CSS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Raleway:wght@800&family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css')?>"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<!-- SEO Tag -->
	    <meta name="description" content="<?php echo $site_desc;?>"/>
	    <link rel="canonical" href="<?php echo site_url();?>" />
	    <meta property="og:locale" content="id_ID" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="<?php echo $site_title;?>" />
	    <meta property="og:description" content="<?php echo $site_desc;?>" />
	    <meta property="og:url" content="<?php echo site_url();?>" />
	    <meta property="og:site_name" content="<?php echo $site_name;?>" />
	    <meta property="og:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:width" content="560" />
	    <meta property="og:image:height" content="315" />
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:description" content="<?php echo $site_desc;?>" />
	    <meta name="twitter:title" content="<?php echo $site_title;?>" />
	    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
	    <meta name="twitter:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

		<style>
		.carousel-item .content {
		position: absolute;
		bottom: 0;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, 0.2);
		color: #f1f1f1;
		width: 100%;
		padding: 20px;
		}
		.carousel-item img {
		max-height: 650px;
		}
		.carousel-item .content h1{
		font-size : 3.5vw;
		font-family: 'Poppins', sans-serif;
		text-transform : none;
		}
		.carousel-item .content p {
		font-size : 2vw;
		font-family: 'Roboto', sans-serif;
		text-transform : none;
		}

		.counter {
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}
		</style>
		<!-- End SEO Tag. -->
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
			<main class="cd-main-content">

				
				
				<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="theme/images/slider.jpeg" class="d-block w-100" alt="gambar">
        
			<div class="content">
				<h1>Foto Bersama Tim Perumahan Dinas Perkimtan dengan Bupati Lahat</h1>
         	 	
			</div>
          
      </div>
      <div class="carousel-item">
        <img src="theme/images/slider1.jpeg" class="d-block w-100" alt="gambar">
        <div class="content">
          <h1>Groundbreaking Relokasi Rumah Rawan Bencana</h1>
        
        </div>
      </div>
      <div class="carousel-item">
        <img src="theme/images/slider5.jpeg" class="d-block w-100" alt="gambar">
        <div class="content">
          <h1>Peletakan Batu Pertama Pembangunan Rumah Korban Bencana</h1>
        </div>
      </div>
	  <div class="carousel-item">
        <img src="theme/images/slider3.jpeg" class="d-block w-100" alt="gambar">
        <div class="content">
          <h1>Sambutan Groundbreaking dari Kepala Dinas Perkimtan Bapak Limra Naupan, S.T., M.T</h1></div>
      </div>
	  <div class="carousel-item">
        <img src="theme/images/slider4.jpeg" class="d-block w-100" alt="gambar">
        <div class="content">
          <h1>Pembangunan Rumah Relokasi Kelurahan Pasar Bawah</h1>
        </div>
      </div>
	  
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<br>
	<!-- SECTION CONTENT
				================================================== -->

				<section class="features-icons bg-light ">
            <div class="container">
			
                <div class="row">
					
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-house m-auto text-primary"></i></div>
                            <center><h3>Data RTLH</h3></center>
							<br>
							<div class="counter">
      							<h2 class="timer count-title count-number" data-to="<?php echo number_format($all_rtlh);?>" data-speed="1500"></h2>
							</div>
							
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
						<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-file-earmark-text m-auto text-primary"></i></div>
                            <center><h3>Data Backlog</h3></center>
							<br>
							<?php 
							$sum = 0;
							foreach ($all_backlog->result() as $total){
								 $sum+=$total->backlog;
							}
							?>
							<div class="counter">
      							<h2 class="timer count-title count-number" data-to="<?php echo $sum?>" data-speed="1500"></h2>
							</div>
							
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-bar-chart-line m-auto text-primary"></i></div>
                            <center><h3>Data Pengembang</h3></center>
							<br>
							<div class="counter">
      							<h2 class="timer count-title count-number" data-to="<?php echo number_format($all_developer);?>" data-speed="1500"></h2>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
			<!-- SECTION SOP -->
		<section class="features-icons bg-light ">
            <div class="container">
			
                <div class="row">
					
				<img src="theme/images/SOP.jpeg" width="80%" height="80%" class="d-block w-100" alt="gambar">
                    
                    
                </div>
            </div>
        </section>
				
				
				
				
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


		<script>
			(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
		</script>
	</body>
</html>