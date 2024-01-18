<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Perumahan</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
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
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables_themeroller.css'?>" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url().'assets/plugins/bootstrap-datepicker/css/datepicker3.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/select2/css/select2.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.css'?>" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="<?php echo base_url().'assets/css/modern.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/themes/green.css'?>" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/dropify.min.css'?>" rel="stylesheet" type="text/css">

        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/modernizr.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'?>"></script>
        
       
    </head>
    <style>
        .modal {
  overflow-y:auto;
}
    </style>

    <body class="page-header-fixed  compact-menu  pace-done page-sidebar-fixed">
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
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
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
                        <li><a href="<?php echo site_url('backend/dashboard');?>" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a></li>
                       
                        <li><a href="<?php echo site_url('backend/inbox');?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span><p>Inbox</p></a></li>
                        
                        <li class="droplink"><a href="<?php echo site_url('backend/perumahan');?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span><p>Data</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <li><a href="<?php echo site_url('backend/backlog');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Backlog</p></a></li>
                            <li><a href="<?php echo site_url('backend/developer');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Developer</p></a></li>
                            <li class="active"><a href="<?php echo site_url('backend/perumahan');?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span><p>Perumahan</p></a></li>
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
                
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                
                                <div class="panel-body">
                                <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Perumahan</button>
                                  
                                    <table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Developer</th>
                                                <th>Nama Perumahan</th>
                                                <th>Alamat</th>
                                                <th>Kecamatan</th>
                                                <th>Tipe</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no=0;
                                                foreach ($data->result() as $row):
                                                    $no++;
                                            ?>
                                            <tr>
                                                <td style="vertical-align: middle;"><?php echo $no;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->developer;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->nama_perumahan;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->alamat;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->kecamatan;?></td>
                                                <td style="vertical-align: middle;"><?php echo $row->tipe;?></td>
                                                <td style="vertical-align: middle;">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#ModalEdit<?php echo $row->id_perumahan;?>"><span class="icon-pencil"></span> Edit</a></li>
                                                            <li><a href="javascript:void(0);" class="delete" data-userid="<?php echo $row->id_perumahan;?>"><span class="icon-trash"></span> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                </div>
                            </div>
                                   
                            
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s"><?php echo date('Y');?> &copy; Powered by Injectech.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        
        <div class="cd-overlay"></div>

        <!-- Modal -->
        <form id="add-row-form" action="<?php echo base_url().'backend/perumahan/insert'?>" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Perumahan</h4>
                    </div>
                    <div class="modal-body">
                            
                    <table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                            <div class="row">
                               
                                <tr>
                                    <th>Developer</th>
                                    <td><input type="text" name="developer" class="form-control"  required></td>
                                    </div>
                                </tr>
                                <tr>
                                    <th>Nama Perumahan</th>
                                    <td><input type="text" name="nama_perumahan" class="form-control"  required></td>
                                    </div>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><input type="text" name="alamat" class="form-control"  required></td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td><input type="text" name="kecamatan" class="form-control"  required></td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td><input type="text" name="tipe" class="form-control"  required></td>
                                </tr>
                                <input type="hidden" name="count" class="form-control" value="1"  required>
                                </div>
                            </div>
                    </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Next</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Add Perumahan</h4>
                    </div>
                    <div class="modal-body">
                            
                    <table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                            <div class="row">

                               
                                <tr>
                                    <th>Foto perumahan 1</th>
                                    <td> 
                                        <input type="file" name="foto1" class="form-control" required >
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 2</th>
                                    <td> 
                                        <input type="file" name="foto2"  class="form-control" required>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 3</th>
                                    <td> 
                                        <input type="file" name="foto3" class="form-control" required >
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 4</th>
                                    <td> 
                                        <input type="file" name="foto4" class="form-control" required >
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 5</th>
                                    <td> 
                                        <input type="file" name="foto5" class="form-control" required >
                                    </td>
                                    
                                </tr>
                                
                               
                              
                            </div>
                    </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Prev</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div> 
        </div>





        </form>

        <?php 
            foreach ($data->result() as $row):
        ?>
        <!-- Modal -->
        <form id="add-row-form" action="<?php echo base_url().'backend/perumahan/update'?>" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="ModalEdit<?php echo $row->id_perumahan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Perumahan</h4>
                    </div>
                    <div class="modal-body">
                            
                    <table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                            <div class="row">
                               
                                <tr>
                                    <th>Developer</th>
                                    <td><input type="text" value="<?php echo $row->developer ?>" name="developer" class="form-control"  required></td>
                                    </div>
                                </tr>
                                <tr>
                                    <th>Nama Perumahan</th>
                                    <td><input type="text" value="<?php echo $row->nama_perumahan ?>" name="nama_perumahan" class="form-control"  required></td>
                                    </div>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><input type="text" value="<?php echo $row->alamat ?>" name="alamat" class="form-control"  required></td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td><input type="text" value="<?php echo $row->kecamatan ?>" name="kecamatan" class="form-control"  required></td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td><input type="text" value="<?php echo $row->tipe ?>" name="tipe" class="form-control"  required></td>
                                </tr>
                                    
                                </div>
                            </div>
                    </table>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_perumahan" value="<?php echo $row->id_perumahan;?>" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit2<?php echo $row->id_perumahan;?>"  data-dismiss="modal">Next</button>
                       
                    </div>
                </div>
            </div>
        </div>







        <div class="modal fade" id="ModalEdit2<?php echo $row->id_perumahan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Perumahan</h4>
                    </div>
                    <div class="modal-body">
                            
                    <table id="mytable" class="display table" style="width: 100%; cellspacing: 0;">
                            <div class="row">
                               
                            <tr>
                                    <th>Foto perumahan 1</th>
                                    <td> 
                                        <input type="file" name="foto1" class="form-control" required >
                                        <img src="<?php echo base_url().'theme/foto_perumahan/'.$row->image1;?>" class="thumbnail">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 2</th>
                                    <td> 
                                        <input type="file" name="foto2"  class="form-control" required>
                                        <img src="<?php echo base_url().'theme/foto_perumahan/'.$row->image2;?>" class="thumbnail">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 3</th>
                                    <td> 
                                        <input type="file" name="foto3" class="form-control" required >
                                        <img src="<?php echo base_url().'theme/foto_perumahan/'.$row->image3;?>" class="thumbnail">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 4</th>
                                    <td> 
                                        <input type="file" name="foto4" class="form-control" required >
                                        <img src="<?php echo base_url().'theme/foto_perumahan/'.$row->image4;?>" class="thumbnail">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>Foto perumahan 5</th>
                                    <td> 
                                        <input type="file" name="foto5" class="form-control" required >
                                        <img src="<?php echo base_url().'theme/foto_perumahan/'.$row->image5;?>" class="thumbnail">
                                    </td>
                                    
                                </tr>
                                    
                                </div>
                            
                    </table>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_perumahan" value="<?php echo $row->id_perumahan;?>" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>







        </form>
	   <?php endforeach;?>

       <!-- Modal hapus-->
        <form id="add-row-form" action="<?php echo base_url().'backend/perumahan/delete'?>" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Perumahan</h4>
                    </div>
                    <div class="modal-body">
                            <strong>Anda yakin mau menghapus perumahan ini?</strong>
                            <div class="form-group">
                                <input type="hidden" id="txt_kode" name="kode" class="form-control" placeholder="Id_Perumahan" required>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="add-row" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <!-- Javascripts -->
        <script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/select2/js/select2.min.js'?>" type="text/javascript"></script>
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
        <script src="<?php echo base_url().'assets/plugins/jquery-mockjax-master/jquery.mockjax.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/moment/moment.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/modern.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>

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

                $(document).on('click','.delete',function(e){
                    e.preventDefault();
                    var userid=$(this).data('userid');
                    $('#ModalDelete').modal('show');
                    $('[name="kode"]').val(userid);
                });
            });
        </script>


        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='error'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password and Confirm Password doesn't match.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-email'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Email already taken.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-img'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Image Upload Error.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "New User Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='info'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Info',
                        text: "User updated!",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#00C9E6'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "User Deleted!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

    </body>
</html>