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
<style>
	.logo span{
		color: black;
		font-family: 'Poppins', sans-serif;
		padding-left: 10px;
		text-decoration: none;
	}
</style>
	</head>		
				<nav class="main-nav stick-fixed">
				<div class="container">
					<div class="full-wrapper relative clearfix">
					
						<!-- Logo -->
						<div class="header-logo-wrap">
							<a href="<?php echo site_url();?>" style="text-decoration: none"class="logo">
								<img src="<?php echo base_url().'theme/images/'.$logo;?>" width="40" height="4	0" alt="" />
								 <span> RUMAH BAGHI </span>
							</a>
						</div>
						<!-- Mobile nav bars -->
						<div class="mobile-nav">
							<i class="fa fa-bars"></i>
						</div>
						
						<!-- Main Menu -->
						<div class="nav-wrapper large-nav">
							<ul class="clearlist local-scroll">
								
								<!-- Multiple column menu example -->
								<?php 
									$query = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => 0));
									if($query->num_rows() > 0):
								?>	
								<?php foreach ($query->result() as $row):?>
									<?php 
										$nav_id=$row->navbar_id;
										$query2 = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => $nav_id));
									?>
									<?php if($query2->num_rows() > 0):?>
									<li>
										<a style="cursor:pointer;" class="menu-down"><?php echo $row->navbar_name;?> <i class="fa fa-angle-down"></i></a>
					
										<!-- Sub -->
										<ul class="nav-sub">
											<?php foreach ($query2->result() as $row2):?>
											<li>
												<a href="<?php echo site_url($row2->navbar_slug);?>"><?php echo $row2->navbar_name;?></a>	
											</li>
											<?php endforeach;?>
											
										</ul>
										<!-- End Sub -->
										
									</li>
									<?php else:?>
									<li>
										<a href="<?php echo site_url($row->navbar_slug);?>"><?php echo $row->navbar_name;?></a>	
									</li>
									<?php endif;?>
								<?php endforeach;?>
								<?php else:?>
								<li>
									<a href="#">Belum ada menu</a>		
								</li>
								<?php endif;?>
								<!-- End Multiple column menu example -->
								</ul>
						</div>
						<!-- End Main Menu -->			
						
						
					</div>
				</div>
			</nav>