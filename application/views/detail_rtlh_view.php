<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>Detail Rumah Tidak Layak Huni</title>
		
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
        <!-- Datatables -->
		<link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables_themeroller.css'?>" rel="stylesheet" type="text/css"/>	
		
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<!-- Library Leaflet -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>
		<link rel="stylesheet" href="<?php echo base_url() ?>leaflet-search/src/leaflet-search.css"/>
		<style>
			table{
                font-size: 15px;
                width: 100%;
            }
			.bgimg{
				background-image:url('theme/images/bg.jpg');
				background-size:cover;
				background-repeat:no-repeat;
			}
            h1{
                color: #4782DB !important;
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

		<div data-background="theme/images/bglahat.jpeg" style="background-image: url(&quot;<?php echo base_url('theme/images/bglahat.jpeg')?>&quot;);  background-size: cover; height: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-100">
                            <h2 style="font-size:2.5vw; color:white;"> Detail Rumah Tidak Layak Huni</h2>
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
							<div class="col-md-6">
						        <br><br>	
						            <div id="map" style="width: 100%; height: 850px;"></div>
						        <br><br>	
					        </div>
                            <div class="col-md-6">
                                <br><br>	
                                <a class="btn btn-warning smalls" href="<?php echo base_url('rtlh')?>"><i class="fa fa-reply"></i> Kembali Ke Data RTLH</a>
                                <br><br><br><br>
                                <table class="table">
                                    <thead>
                                        <?php foreach($list_rtlh->result() as $row){?>
                                        <tr>
                                            <th colspan="3"><h1>Detail RTLH</h1></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <th>:</th>
                                            <td><?php echo $row->nik?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pemilik</th>
                                            <th>:</th>
                                            <td><?php echo $row->nama?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <th>:</th>
                                            <td><?php echo $row->sex?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <td><?php echo $row->alamat?></td>
                                        </tr>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <th>:</th>
                                            <td><?php echo $row->kecamatan?></td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <th>:</th>
                                            <td><?php echo $row->pekerjaan?></td>
                                        </tr>
										<tr>
                                            <th>Penghasilan</th>
                                            <th>:</th>
                                            <td><?php echo $row->penghasilan?></td>
                                        </tr>
										<tr>
                                            <th>Atap</th>
                                            <th>:</th>
                                            <td><?php echo $row->atap?></td>
                                        </tr>
										<tr>
                                            <th>Lantai</th>
                                            <th>:</th>
                                            <td><?php echo $row->lantai?></td>
                                        </tr>
										<tr>
                                            <th>Dinding</th>
                                            <th>:</th>
                                            <td><?php echo $row->dinding?></td>
                                        </tr>
										<tr>
                                            <th>Pencahayaan</th>
                                            <th>:</th>
                                            <td><?php echo $row->pencahayaan?></td>
                                        </tr>
										<tr>
                                            <th>Kamar Mandi</th>
                                            <th>:</th>
                                            <td><?php echo $row->kamar_mandi?></td>
                                        </tr>
										<tr>
                                            <th>Sumber Air</th>
                                            <th>:</th>
                                            <td><?php echo $row->sumber_air?></td>
                                        </tr>
										<tr>
                                            <th>Jarak Sumber Air</th>
                                            <th>:</th>
                                            <td><?php echo $row->jarak_sumber_air?></td>
                                        </tr>
										<tr>
                                            <th>Sumber Listrik</th>
                                            <th>:</th>
                                            <td><?php echo $row->sumber_listrik?></td>
                                        </tr>
										
										<tr>
                                            <th>Luas Rumah</th>
                                            <th>:</th>
                                            <td><?php echo $row->luas_rumah?></td>
                                        </tr>
										<tr>
                                            <th>Jumlah Penghuni</th>
                                            <th>:</th>
                                            <td><?php echo $row->jumlah_penghuni?></td>
                                        </tr>
										<tr>
                                            <th>Status Tanah</th>
                                            <th>:</th>
                                            <td><?php echo $row->status_tanah?></td>
                                        </tr>
										<tr>
                                            <th>Status Rumah</th>
                                            <th>:</th>
                                            <td><?php echo $row->status_rumah?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </thead>
                                </table>
						        <br><br>	
					        </div>
                            
						</div>
                        <div class="col-md-12" >
                            <h1>Foto Rumah Tidak Layak Huni</h1>
                            <br><br>
                            <?php foreach($list_rtlh->result() as $img){ ?>
                                
                                <img style="display:inline; padding:20px" src="<?php echo base_url('theme/images/').$img->foto_rumah ?>" alt="Foto Rumah" class="src" width="350" height="350">
                                <img style="display:inline; padding:20px" src="<?php echo base_url('theme/images/').$img->foto_rumah2 ?>" alt="Foto Rumah" class="src" width="350" height="350">
                                <img style="display:inline; padding:20px" src="<?php echo base_url('theme/images/').$img->foto_rumah3 ?>" alt="Foto Rumah" class="src" width="350" height="350">
                                <img style="display:inline; padding:20px" src="<?php echo base_url('theme/images/').$img->foto_rumah4 ?>" alt="Foto Rumah" class="src" width="350" height="350">
                                <img style="display:inline; padding:20px" src="<?php echo base_url('theme/images/').$img->foto_rumah5 ?>" alt="Foto Rumah" class="src" width="350" height="350">
                               
                           <?php
                            }
                            ?>
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
        <script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
		
		<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
		<script src="<?php echo base_url('leaflet-search/src/leaflet-search.js')?>"></script>
		<script>
			// data kecamatan dan koordinat
			var data = [
				<?php foreach ($list_rtlh->result() as $value){?>
					{"lokasi_koordinat":[<?php echo $value->lokasi_koordinat?>],"nama":"<?php echo $value->nama?>" },

				<?php
				}
				?>
				
				
			];
			<?php foreach($list_rtlh->result() as $value){  ?>
			var map = new L.Map('map', {zoom: 15, center: new L.latLng(<?php echo $value->lokasi_koordinat?>) });
            <?php
            }
            ?>
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

			////////////populate map with markers from sample data
			for(i in data) {
				var nama = data[i].nama;	//value searched
				var lokasi_koordinat = data[i].lokasi_koordinat;	//position found
				var marker = new L.Marker(new L.latLng(lokasi_koordinat), {title: nama} );//se property searched
				marker.bindPopup("<b>Rumah Tidak Layak Huni :</b> "+ nama 
				).addTo(map).openPopup();
				markersLayer.addLayer(marker);
			}
		</script>
		
	</body>
</html>