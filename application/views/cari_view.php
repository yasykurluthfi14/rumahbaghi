<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>Cari Perumahan</title>
		
		<!-- Page header -->
		<meta charset="utf-8"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width"/>
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css')?>"/>
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<!-- Library Leaflet -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>
		<link rel="stylesheet" href="<?php echo base_url() ?>leaflet-search/src/leaflet-search.css"/>
		<style>
			
			.bgimg{
				background-image:url('theme/images/bg.jpg');
				background-size:cover;
				background-repeat:no-repeat;
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
                            <h2 style="font-size:2.5vw; color:white;"> Cari Perumahan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			<br><br>
			<div class="bgimg">
				<div class="container text-center" >
					<div class="row" >
						<div class="col-md-12" >
							<div class="col-md-12">
						<br><br>	
						<div id="map" style="width: 100%; height: 500px;"></div>
						<br><br>	
					</div>
						
						</div>
					</div>
				</div>
			</div>
				
				
				<hr class="nomargin nopadding"/>
				
				<!-- FOOTER
				================================================== -->	
				<?php echo $footer;?>
				
				</main>		
	
		</div>
		
		
		
		<!-- JAVASCRIPT
		==================================================-->
		<script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.localScroll.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.viewport.mini.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.sticky.js')?>"></script>
		<script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js')?>"></script> 
		<script src="<?php echo base_url('theme/js/script.js')?>"></script>
		
		<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
		<script src="<?php echo base_url('leaflet-search/src/leaflet-search.js')?>"></script>
		<script>
			// data kecamatan dan koordinat
			var data = [
				<?php foreach ($listperumahan->result() as $value){?>
					{"koordinat":[<?php echo $value->koordinat?>],"nama_perumahan":"<?php echo $value->nama_perumahan?>","kecamatan":"<?php echo $value->kecamatan?>","developer":"<?php echo $value->developer?>","alamat":"<?php echo $value->alamat?>","id_perumahan":"<?php echo $value->id_perumahan?>" },

				<?php
				}
				?>
				
				
			];
			
			var map = new L.Map('map', {zoom: 12, center: new L.latLng(-3.7567981943580535, 103.53772624167658) });
			map.addLayer(new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 19,
				attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}));

			// control search function
			var markersLayer = new L.LayerGroup();	
			map.addLayer(markersLayer);
			var controlSearch = new L.Control.Search({
				position:'topright',		
				layer: markersLayer,
				initial: false,
				zoom: 13,
				marker: false
			});
			map.addControl(controlSearch);

			////////////populate map with markers from sample data
			for(i in data) {
				var nama_perumahan = data[i].nama_perumahan;	//value searched
				var koordinat = data[i].koordinat;	//position found
				var kecamatan = data[i].kecamatan;	//popup kecamatan
				var developer = data[i].developer;	//popup developer
				var id_perumahan = data[i].id_perumahan;	//popup id_perumahan
				var alamat = data[i].alamat;	//popup alamat
				var marker = new L.Marker(new L.latLng(koordinat), {title: kecamatan} );//se property searched
				marker.bindPopup("<b>Nama Perumahan:</b> "+ nama_perumahan +
				"<br><b>Developer:</b>"+ developer+
				"<br><b>Alamat:</b>"+ alamat+
				"<br><b>Kecamatan:</b>"+ kecamatan+
				"<br><a href='<?php echo base_url('cari/detail/')?>"+id_perumahan+"' class='btn btn-default smalll'>Lihat Detail</a> "
				).openPopup();
				markersLayer.addLayer(marker);
			}
		</script>
		
	</body>
</html>