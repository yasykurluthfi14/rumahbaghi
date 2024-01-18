<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title>Rekap Perumahan</title>
		
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

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		
		<style>
			table {
				background-color: lightblue !important;
				border : 1px solid white !important;
			}
		</style>
		<?php
		foreach($listkecamatan->result() as $data){
								$kcmtn[] = $data->kecamatan;
							}
		$a[]=[$count,$count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,
		$count9,$count10,$count11,$count12,$count13,$count14,$count15,$count16,$count17,$count18,
		$count19,$count20,$count21];
		?>
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
                            <h2 style="font-size:2.5vw; color:white;"> Rekap Perumahan dan Grafik </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

				<div class="container text-center form">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
							<table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Kecamatan</th>
                                                <th>Perumahan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td >GUMAY TALANG</td>
                                                <td ><?php echo $count?></td>
                                               
                                            </tr>
											
											<tr>
                                                <td >GUMAY ULU</td>
                                                <td ><?php echo $count1?></td>
                                               
                                            </tr>
											
											<tr>
                                                <td >JARAI</td>
                                                <td ><?php echo $count2?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >KIKIM BARAT</td>
                                                <td ><?php echo $count3?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >KIKIM SELATAN</td>
                                                <td ><?php echo $count4?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >KIKIM TENGAH</td>
                                                <td ><?php echo $count5?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >KIKIM TIMUR</td>
                                                <td ><?php echo $count6?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >KOTA AGUNG</td>
                                                <td ><?php echo $count7?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >LAHAT</td>
                                                <td ><?php echo $count8?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >MERAPI BARAT</td>
                                                <td ><?php echo $count9?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >MERAPI SELATAN</td>
                                                <td ><?php echo $count10?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >MERAPI TIMUR</td>
                                                <td ><?php echo $count11?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >MUARA PAYANG</td>
                                                <td ><?php echo $count12?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >MULAK ULU</td>
                                                <td ><?php echo $count13?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >PAGAR GUNUNG</td>
                                                <td ><?php echo $count14?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >PAJAR BULAN</td>
                                                <td ><?php echo $count15?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >PSEKSU</td>
                                                <td ><?php echo $count16?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >PULAU PINANG</td>
                                                <td ><?php echo $count17?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >TANJUNG SAKTI PUMI</td>
                                                <td ><?php echo $count18?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >TANJUNG SAKTI PUMU</td>
                                                <td ><?php echo $count19?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >TANJUNG TEBAT</td>
                                                <td ><?php echo $count20?></td>
                                               
                                            </tr>
											
											                                            <tr>
                                                <td >LAHAT SELATAN</td>
                                                <td ><?php echo $count21?></td>
                                               
                                            </tr>
											
											                                        </tbody>
                                       </table>  
							</div>
							<div class="col-md-6">
							<canvas id="bar-chart-horizontal" width="800" height="1200"></canvas>
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
		<script>
			new Chart(document.getElementById("bar-chart-horizontal"), {
			type: 'horizontalBar',
			data: {
			labels: <?php echo json_encode($kcmtn);?>,
			datasets: [
				{
				label: "Rekap Perumahan",
				backgroundColor: ['rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
                                'rgba(255, 159, 64)',
                                'rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
								'rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
                                'rgba(255, 159, 64)',
                                'rgba(255, 99, 132)',
                                'rgba(54, 162, 235)',
                                'rgba(255, 206, 86)',
                                'rgba(75, 192, 192)',
                                'rgba(153, 102, 255)',
                                'rgba(255, 159, 64)'
				],
				
							 
				data: <?php echo json_encode($a[0]);?>
				
				}
			]
			},
			options: {
			legend: { display: false },
			title: {
				display: true,
				text: 'Grafik Rekap Perumahan'
			}
			}
		});
		</script>
		
	</body>
</html>