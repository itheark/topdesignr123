    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Details | Topdesignr</title>
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
                            <li class="active"><a href="<?php echo site_url('main/home')?>">Home</a></li>                 
                            <li><a href="<?php echo site_url('main/explore')?>">Explore</a>
                            </li>
                            <li ><a href="<?php echo site_url('main/compete') ?>">Compete</a>
                            </li> 
                             <li class="dropdown"><a><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
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

    <?php foreach ($post as $row){?>
        <!-- <section id="page-breadcrumb">
            <div class="vertical-center sun">
                 <div class="container">
                    <div class="row">
                        <div class="action">
                            <div class="col-sm-12">
                                <h1 class="title"><?php echo $row->post_title?></h1>
                            </div>                                                                                
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--/#page-breadcrumb-->

        <section id="blog-details" >
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-7">
                        <div class="row">
                             <div class="col-md-12 col-sm-12">
                                <div class="single-blog blog-details two-column">
                                    <div class="post-content overflow">
                                
                                        <h2 class="post-title bold"><a><?php echo $row->post_title?></a></h2>
                                        <h3 class="post-author"><a href="<?php echo site_url('main/profile/'.$row->uname)?>">Posted by <?php echo $row->uname; echo ' ';?>on<?php echo ' '; $date= strtotime($row->post_date); echo date('d',$date);echo ' ';echo date('M',$date);echo ', ';echo date('Y',$date);?></a></h3>
                                        <div class = "container">
                                        <div class = "row"> 
                                       
                        <img src="<?php echo base_url();?>/uploads/post/<?php echo $row->post_image?>" class="img-responsive" alt="">
                                          
                                            </div>
                                        </div>
                                        <br>
                                          <p><?php echo $row->post_des?> </p>
                                        
                                            <div class="post-bottom overflow">
                                            <ul class="nav navbar-nav post-nav">
                                                <li><a href="#" ><i class="fa fa-heart-o"></i>52 Likes</a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i><?php echo $row->no_comments?> Comments</a></li>
                                                <!-- <li><a href="#"><i class="fa fa-share"></i>12 Shares</a></li> -->
                                                <li><a href="#"><i class="fa fa-tag"></i>Nature Beauty</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-share">
                                            <span class='st_facebook_hcount'></span>
                                            <span class='st_twitter_hcount'></span>
                                            <span class='st_linkedin_hcount'></span>
                                            <span class='st_email_hcount'></span>
                                        </div>
                                        
                                        <div class="response-area">
                                        <h2 class="bold">Comments</h2>
                                        <ul class="media-list">
                                              <li class="media">
                                                <div class="post-comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="<?php echo base_url();?>/images/blogdetails/4.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <span><i class="fa fa-user"></i><a href="#">UserAbc</a></span>
                                                            <div class="form-group">
                                                                <label for="comment"></label>
                                                                <textarea class="form-control" rows="5" id="comment" placeholder="Write your comment here..."></textarea>
                                                            </div>
                                                        <ul class="nav navbar-nav post-nav">
                                                           <a href="#" class="btn btn-common">COMMENT</a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
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
                                <h3>You might like these too</h3>
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
        <!--/#blog-->
        <?php }?>
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
