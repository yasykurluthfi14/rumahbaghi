<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Dashboard</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Injectech" />
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">
        
        <!-- Styles -->
        <link href="<?php echo base_url().'assets/plugins/pace-master/themes/blue/pace-theme-flash.css'?>" rel="stylesheet"/>
        <link href="<?php echo base_url().'assets/plugins/uniform/css/uniform.default.min.css'?>" rel="stylesheet"/>
        <link href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/fontawesome/css/font-awesome.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/line-icons/simple-line-icons.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/waves/waves.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/switchery/switchery.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/3d-bold-navigation/css/style.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/slidepushmenus/css/component.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/weather-icons-master/css/weather-icons.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/metrojs/MetroJs.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/toastr/toastr.min.css'?>" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="<?php echo base_url().'assets/css/modern.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/themes/green.css'?>" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/modernizr.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'?>"></script>
        
        
    </head>
    <body class="page-header-fixed compact-menu pace-done page-sidebar-fixed">
        <div class="overlay"></div>
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="<?php echo site_url('backend/dashboard');?>" class="logo-text"><span>rumahbaghi</span></a>
                    </div><!-- Logo Box -->
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php 
                                    $count_inbox = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'));
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows();?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        
                                        <li><p class="drop-title">Anda memiliki <?php echo $count_inbox->num_rows();?> pesan baru !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <?php 
                                                    $query_msg = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'), 6);
                                                    foreach ($query_msg->result() as $row) :
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/inbox');?>">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>" alt=""></div>
                                                        <p class="msg-name"><?php echo $row->inbox_name;?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->inbox_message,5);?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->inbox_created_at));?></p>
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                                
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="<?php echo site_url('backend/inbox');?>" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <?php
                                    $count_comment = $this->db->get_where('tbl_comment', array('comment_status' => '0'));
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-comment"></i><span class="badge badge-success pull-right"><?php echo $count_comment->num_rows();?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">Anda memiliki <?php echo $count_comment->num_rows();?> komentar baru !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <?php 
                                                    $query_cmt = $this->db->get_where('tbl_comment', array('comment_status' => '0'), 6);
                                                    foreach ($query_cmt->result() as $row) :
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/comment/unpublish');?>">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>" alt=""></div>
                                                        <p class="msg-name"><?php echo $row->comment_name;?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->comment_message,5);?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->comment_date));?></p>
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                                
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="<?php echo site_url('backend/comment/unpublish');?>" class="text-center">All Comments</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo $this->session->userdata('name');?><i class="fa fa-angle-down"></i></span>
                                        <?php
                                            $user_id=$this->session->userdata('id');
                                            $query=$this->db->get_where('tbl_user', array('user_id' => $user_id));
                                            if($query->num_rows() > 0):
                                            $row = $query->row_array();
                                        ?>
                                        <img class="img-circle avatar" src="<?php echo base_url().'assets/images/'.$row['user_photo'];?>" width="40" height="40" alt="">
                                        <?php else:?>
                                        <img class="img-circle avatar" src="<?php echo base_url().'assets/images/user_blank.png';?>" width="40" height="40" alt="">
                                        <?php endif;?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="<?php echo site_url('backend/change_pass');?>"><i class="fa fa-key"></i>Change Password</a></li>
                                        <li role="presentation"><a href="<?php echo site_url('backend/comment/unpublish');?>"><i class="fa fa-comment"></i>Comments<span class="badge badge-success pull-right"><?php echo $count_comment->num_rows();?></span></a></li>
                                        <li role="presentation"><a href="<?php echo site_url('backend/inbox');?>"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows();?></span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="<?php echo site_url('logout');?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('logout');?>" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <?php
                                $user_id=$this->session->userdata('id');
                                $query=$this->db->get_where('tbl_user', array('user_id' => $user_id));
                                if($query->num_rows() > 0):
                                $row = $query->row_array();
                            ?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url().'assets/images/'.$row['user_photo'];?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name');?><br>
                                    <?php if($row['user_level']=='1'):?>
                                    <small>Administrator</small>
                                    <?php else:?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                                </div>
                            </a>
                            <?php else:?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url().'assets/images/user_blank.png';?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name');?><br>
                                    <?php if($row['user_level']=='1'):?>
                                    <small>Administrator</small>
                                    <?php else:?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                                </div>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="<?php echo site_url('backend/dashboard');?>" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a></li>
                       
                        <li><a href="<?php echo site_url('backend/inbox');?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span><p>Inbox</p></a></li>
                        
                        <li class="droplink"><a href="<?php echo site_url('backend/perumahan');?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span><p>Data</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <li><a href="<?php echo site_url('backend/backlog');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Backlog</p></a></li>
                            <li><a href="<?php echo site_url('backend/developer');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Developer</p></a></li>
                            <li><a href="<?php echo site_url('backend/perumahan');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Perumahan</p></a></li>
                            <li><a href="<?php echo site_url('backend/RTLH');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>RTLH</p></a></li>
                            </ul>
                        </li>
  
                        <?php if($this->session->userdata('access')=='1'):?>
                        <li><a href="<?php echo site_url('backend/users');?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Users</p></a></li>
                        <li class="droplink"><a href="<?php echo site_url('backend/settings');?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span><p>Settings</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/settings');?>">Basic</a></li>
                                  
                                <li><a href="<?php echo site_url('backend/navbar');?>">Navbar</a></li>
                            </ul>
                        </li>
                        <?php else:?>
                        <?php endif;?>
                        <li><a href="<?php echo site_url('logout');?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span><p>Log Out</p></a></li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($all_visitors);?></p>
                                        <span class="info-box-title">Unique Visitors</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($all_perumahan);?></p>
                                        <span class="info-box-title">Perumahan</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($all_comments);?></p>
                                        <span class="info-box-title">Comments Received</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-bubbles"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo number_format($all_rtlh);?></p>
                                        <span class="info-box-title">RTLH</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-home"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="visitors-chart">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Visitors This Month</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <canvas id="canvas"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="stats-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Browser Stats</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                    <li>Google Chrome<div class="text-success pull-right"><?php echo number_format($chrome_visitor,2);?>%</div></li>
                                                    <li>Firefox<div class="text-success pull-right"><?php echo number_format($firefox_visitor,2);?>%</div></li>
                                                    <li>Internet Explorer<div class="text-success pull-right"><?php echo number_format($explorer_visitor,2);?>%</div></li>
                                                    <li>Safari<div class="text-success pull-right"><?php echo number_format($safari_visitor,2);?>%</div></li>
                                                    <li>Opera<div class="text-success pull-right"><?php echo number_format($opera_visitor,2);?>%</div></li>
                                                    <li>Robots<div class="text-success pull-right"><?php echo number_format($robot_visitor,2);?>%</div></li>
                                                    <li>Others<div class="text-success pull-right"><?php echo number_format($other_visitor,2);?>%</div></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s"><?php echo date('Y');?> &copy; Powered by Injectech.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/pace-master/pace.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/switchery/switchery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/uniform/jquery.uniform.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/waves/waves.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/waypoints/jquery.waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-counterup/jquery.counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/toastr.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.time.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.symbol.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.resize.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.tooltip.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/chartsjs/Chart.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/modern.js'?>"></script>
        
        <script>
            $(document).ready(function(){
                // CounterUp Plugin
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                var myLine = document.getElementById("canvas").getContext("2d");
                var lineChartData = {
                    labels : <?php echo $month;?>,
                    datasets : [

                        {
                            fillColor: "rgba(34,186,160,0.2)",
                            strokeColor: "rgba(34,186,160,1)",
                            pointColor: "rgba(34,186,160,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(18,175,203,1)",
                            data : <?php echo $value;?>
                        }

                    ]

                }

                var canvas = new Chart(myLine).Line(lineChartData, {
                    scaleShowGridLines : true,
                    scaleGridLineColor : "rgba(0,0,0,.05)",
                    scaleGridLineWidth : 0,
                    scaleShowHorizontalLines: true,
                    scaleShowVerticalLines: true,
                    bezierCurve : true,
                    bezierCurveTension : 0.4,
                    pointDot : true,
                    pointDotRadius : 4,
                    pointDotStrokeWidth : 1,
                    pointHitDetectionRadius : 2,
                    datasetStroke : true,
                    tooltipCornerRadius: 2,
                    datasetStrokeWidth : 2,
                    datasetFill : true,
                    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                    responsive: true
                });
            });
            

        </script>

    </body>
</html>