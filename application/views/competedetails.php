<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Competition Details | Triangle</title>
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
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'bottom',
        container : 'body',
        trigger : 'hover'
    });
});
</script>
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

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                    <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="<?php echo site_url('main/home')?>">Home</a></li>                 
                        <li><a href="<?php echo site_url('main/explore')?>">Explore</a>
                        </li>
                        <li class="active"><a href="<?php echo site_url('main/compete')?>">Compete</a>
                        </li>                         
                        <?php if($this->session->userdata('logged_in')){?> 
                        <li class="dropdown"><a ><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
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

<?php foreach($query as $row){?>
  
    <!--/#page-breadcrumb-->

    <section id="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-10 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href=""><?php echo $row->c_title?></a></h2>
                                    <h3 class="post-author"><a href="#">By <?php echo $row->c_host?></a></h3>
                                    <p><?php echo $row->c_des?></p>
                                    <br><br>
                                    <?php if($submitted==FALSE){?>
                                       <a href="<?php echo site_url('main/submission/'.$row->c_id)?>" class="btn btn-common">SUBMIT YOUR ENTRIES</a>
                                    <?php } else{?>
                                        <h3 class="post-author" style="color:#1bad6b"><b><li><i class="fa fa-check-circle"></i> You've already submitted your entry.<br></b></h2>
                                        <a href="<?php echo site_url('main/submission/'.$row->c_id)?>" class="btn btn-common">SUBMIT MORE ENTRIES</a>
                                        <?php }?>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#" data-toggle="popover" title="Last Date" data-content="<?php $date= strtotime($row->c_lastdate); echo date('d',$date);echo ' ';echo date('M',$date);echo ', ';echo date('Y',$date);?>"><i class="fa fa-clock-o"></i><?php $date= strtotime($row->c_lastdate); echo date('d',$date);echo ' ';echo date('M',$date);echo ', ';echo date('Y',$date);?></a></li>
                                            <li><a href="#" data-toggle="popover" title="Prize" data-content="<?php echo $row->c_prize?>"><i class="fa fa-trophy"></i><?php echo $row->c_prize?></a></li>
                                            <li><a href="#" data-toggle="popover" title="Registrants" data-content="<?php echo $row->c_registrants?>"><i class="fa fa-group"></i><?php echo $row->c_registrants?></a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="<?php echo base_url();?>/images/blogdetails/1.png" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>ABC Company</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                                <span>Website:<a href="#"> www.abccompany.com</a></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="response-area">
                                    <h2 class="bold">Comments</h2>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="<?php echo base_url();?>/images/blogdetails/2.png" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="parrent">
                                                <ul class="media-list">
                                                    <li class="post-comment reply">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" src="<?php echo base_url();?>/images/blogdetails/3.png" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="<?php echo base_url();?>/images/blogdetails/4.png" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>                   
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item categories">
<!--                            <h3>Categories</h3>-->
                            <ul class="nav navbar-stacked">
                                <li class="active"><a href="#">Details<span class="pull-right"></span></a></li>
                                <li><a href="#">Registrants<span class="pull-right"></span></a></li>
                                <li><a href="#">Submissions<span class="pull-right"></span></a></li>
                                <li><a href="#">Results<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Product</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>/images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php } ?>
    <!--/#blog-->
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
