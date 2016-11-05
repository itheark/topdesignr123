<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | TopDesignr</title>
    <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>/css/lightbox.css" rel="stylesheet"> 
	<link href="<?php echo base_url();?>/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/images/ico/apple-touch-icon-57-precomposed.png">
     

  <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/audio.min.js"></script>
    <script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/masonry.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script> 
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head><!--/head-->

<body>
	<header id="header">      

        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo site_url('admin/home')?>">
                      <h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo site_url('admin/home')?>">Home</a></li>                 
                        <li><a href="<?php echo site_url('main/explore')?>">Explore</a>
                        </li>
                        <li ><a href="<?php echo site_url('main/compete') ?>">Compete</a>
                        </li> 
                         <li class="dropdown"><a href=""><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('main/profile/'.$this->session->userdata('uname')) ?>"><i class="fa fa-user"></i>    Profile</a></li>
                                <li><a href="<?php echo site_url('main/post_upload') ?>"><i class="fa fa-upload "></i> Upload</a></li>
                                <li><a href=""><i class="fa fa-gear"></i>    Settings</a></li>
                                <li><a href="<?php echo site_url('main/logout') ?>"><i class="fa fa-sign-out"></i>    Log out</a></li>
                              
                            </ul>
                        </li>
                       <!-- <li><a href="shortcodes.html ">Shortcodes</a></li> -->                   
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->



<div class="container-fluid">
  <div class="row content">
    
 
    
    <div class="col-sm-9 col-xs-offset-2">
      <div class="well" >
        <center> <h2 class="slide-text"> Competition</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
          <center> <a href="<?php echo site_url('admin/add_competition') ?>" class="btn btn-common"><h4>Add Competition</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <center> <a href="<?php echo site_url('admin/delete_competition') ?>" class="btn btn-common"><h4>Delete Competition</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <center> <a href="<?php echo site_url('admin/edit_competition') ?>" class="btn btn-common"><h4>Edit Competition</h4></a></center>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="well">
            <center> <a href="<?php echo site_url('admin/results') ?>" class="btn btn-common"><h4>Publish Results</h4></a></center>
          </div>
        </div>
      </div>
      <div class="well" >
        <center> <h2 class="slide-text">Users</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('admin/admin_register') ?>" class="btn btn-common"><h4>Add New Admin</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('admin/user_register') ?>" class="btn btn-common"><h4>Add New user</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('admin/suspend') ?>" class="btn btn-common"><h4>Suspend Users</h4></a></center> 
          </div>
        </div>
      </div>
      <div class="well" >
        <center> <h2 class="slide-text">Posts</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
             <center> <a href="<?php echo site_url('admin/post_upload') ?>" class="btn btn-common"><h4>Add Post</h4></a></center>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
             <center> <a href="<?php echo site_url('admin/delete_post') ?>" class="btn btn-common"><h4>Delete Post</h4></a></center>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</div>





    <footer id="footer">
        <div class="container">
            <div class="row">
                
               
               
                   
      <div class="collapse navbar-collapse copyright-text">
                    <ul class="nav navbar-nav navbar-center">
                        <li class="active"><a href="index.html">About Us</a></li>
                         <li class="active"><a href="index.html">Contact Us</a></li>
                    </ul>
            <div class="container">
            <div class="row">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
          </div>
                </div> 
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; TopDesignr 2016. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

       
</body>
</html>
