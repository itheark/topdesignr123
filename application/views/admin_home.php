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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

                    <a class="navbar-brand" href="<?php echo site_url('main/home') ?>">
                    	<h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
               
               
            </div>
        </div>
    </header>
    <!--/#header-->

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well" >
        <center> <h2 class="slide-text"> Competition</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Add Competion</h4></a></center>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Delete Competion</h4></a></center>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Edit Competion</h4></a></center>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Publish Results</h4></a></center>
          </div>
        </div>
      </div>
      <div class="well" >
        <center> <h2 class="slide-text">Users</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Add New Admin</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Add New user</h4></a></center>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
             <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Suspend Users</h4></a></center> 
          </div>
        </div>
      </div>
      <div class="well" >
        <center> <h2 class="slide-text">Posts</h2></center>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
             <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Add Post</h4></a></center>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
             <center> <a href="<?php echo site_url('main/signup') ?>" class="btn btn-common"><h4>Delete Post</h4></a></center>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</div>

</body>



    <footer id="footer">
        <div class="container">
            <div class="row">
                
               
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?php echo base_url();?>/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                   
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

    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script>   
</body>
</html>
