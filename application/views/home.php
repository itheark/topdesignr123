<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | TopDesignr</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>images/ico/apple-touch-icon-72-precomposed.png">
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

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo site_url('main/home')?>">Home</a></li>                 
                        <li><a href="<?php echo site_url('main/explore')?>">Explore</a>
                        </li>
                        <li ><a href="<?php echo site_url('main/compete') ?>">Compete</a>
                        </li> 
                         <li class="dropdown"><a href="blog.html"><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('main/profile') ?>"><i class="fa fa-user"></i>    Profile</a></li>
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


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Design Dreams do come true </h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->
    
    <section id="blog" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="masonery_area">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                 <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                  <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                   
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>14 Feb</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="exploredetails.html"><img src="<?php echo base_url();?>/images/blog/masonary/y.jpg" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <ul class="nav nav-justified post-nav">
                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                </ul>
                                <h2 class="post-title bold"><a href="exploredetails.html">Urban Work Wear Design</a></h2>
                                <h3 class="post-author"><a href="#">Posted by UserXyz</a></h3>
                                <p>Duis autem vel eum iriure dolor in hendrerit in blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                <a href="#" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
    <script type="text/javascript" src="<?php echo base_url();?>/js/audio.min.js"></script>
    <script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/masonry.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script>    
</body>
</html>
