<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Explore | TopDesignr</title>
    <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/lightbox.css" rel="stylesheet">  
    <link href="<?php echo base_url();?>/css/animate.min.css" rel="stylesheet"> 
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

                    <a class="navbar-brand" href="<?php echo site_url('main/home')?>">
                    	<h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('main/home')?>">Home</a></li>                 
                        <li  class="active"><a href="<?php echo site_url('main/explore')?>">Explore</a>
                        </li>
                        <li ><a href="<?php echo site_url('main/compete')?>">Compete</a>
                        </li>
                        <?php if($this->session->userdata('logged_in')){?> 
                        <li class="dropdown"><a><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('main/profile/'.$this->session->userdata('uname')) ?>"><i class="fa fa-user"></i>    Profile</a></li>
                                <li><a href="<?php echo site_url('main/post_upload') ?>"><i class="fa fa-upload "></i> Upload</a></li>
                                <li><a href=""><i class="fa fa-gear"></i>    Settings</a></li>
                                <li><a href="<?php echo site_url('main/logout') ?>"><i class="fa fa-sign-out"></i>    Log out</a></li>
                              
                            </ul>
                        </li>  
                        <?php }?>                      
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


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Explore. Dream. Discover</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <!--<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".branded">Branded</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".design">Design</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".folio">Folio</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos">Logos</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mobile">Mobile</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mockup">Mockup</a></li>-->
                </ul><!--/#portfolio-filter-->
                    
                <div class="portfolio-items">
                    <?php foreach ($post as $row){?>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="post-thumb">
                                    <img style="margin: 0 auto; align:center;"src="<?php echo base_url();?>/uploads/post/thumb/<?php echo $row->post_image?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>"><i class="fa fa-link"></i></a></li>
                                        
                                        <li><a href="<?php echo base_url();?>/uploads/post/<?php echo $row->post_image?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                         
                                    </ul>
                              
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>"><h2><?php $string = strip_tags($row->post_title);
                                if (strlen($string) > 35) {
                                $stringCut = substr($string, 0, 35);
                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'[...]'; }echo $string;?></h2></a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
               
            </div>
        </div>
    </section>
    <!--/#portfolio-->

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
    <script type="text/javascript" src=<"?php echo base_url();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script>    
</body>
</html>
