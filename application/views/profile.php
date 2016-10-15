    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Profile | Topdesignr</title>
        <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/lightbox.css" rel="stylesheet">  
        <link href="<?php echo base_url();?>/css/animate.min.css" rel="stylesheet">    
        <link href="<?php echo base_url();?>/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/button.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->   
        
     <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script> 
    <script type="text/javascript">
        
    $(document).ready(function(){

    $("#button").click(function(){
        if($(this).attr('data-following') == 'false'){
            $(this).attr('data-following', 'true');
            $(this).text('Following');
        }else if($(this).attr('data-following') == 'true'){
            $(this).attr('data-following', 'false');
            $(this).text('Follow');
        }
    });
    });

        </script>

      

        
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
                             <li class="dropdown"><a href=""><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo site_url('main/profile') ?>"><i class="fa fa-user"></i>    Profile</a></li>
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

    <div class="container">
        <div>
            <center>
                
            <div class="hovereffect">
            <img class="img-responsive img-circle" style="display: block;
        margin-left: auto;
        margin-right: auto" src="<?php echo base_url();?>/images/profile.jpg" width ="200" height="200"  alt="">
            <div class="overlay">
                    
                    <p class="set1">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </p>
                    
                    <p class="set2">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </p>
                </div>
        </div>


    <section class="buttons1">
        <div class="buttons1 container">
            <?php foreach ($user as $row) {?>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class=" btn btn-1" style="outline:none"><h3>Nidhi Om Subhash</h3></a>    
             <!--<h3><a href="#" class="btn btn-1" ><i class="fa fa-user-plus "></i> Follow</a></h3>!-->
             <br>
             <h2 class="label label-info">@<?php echo $row->uname;?></h2>
             <h3>
                <?php if($this->session->userdata('user_id')==$row->user_id){?>
             <a href="" class="btn btn-1" style="outline:none" ><i class="fa fa-edit "></i> Edit</a></h3>
             <?php } else{ ?>
             <?php if($following==TRUE) { ?>
              <a href="<?php echo site_url('main/unfollow/'.$row->user_id);?>" class="btn btn-1" style="outline:none" id="button" data-following="<?php echo $following;?>"><i class="fa fa-user-plus"></i>
            <?php echo "Following";} ?></a> <?php if($following==FALSE) {?>
              <a href="<?php echo site_url('main/follow/'.$row->user_id);?>" class="btn btn-1" style="outline:none" id="button" data-following="<?php echo $following;?>"><i class="fa fa-user-plus"></i>
              <?php 
                echo "Follow";
              }?></a></h3>
              

             <?php } ?>
             <h3 class="btn btn-common " >1098 Followers</h3>
             <h3 class="btn btn-common " >530 Posts</h3>
             <h3 class="btn btn-common " >400 Following</h3>
             <?php }?>
             </div>
    </section>

            </center>

        </div>
        <!-- Modal For About Information-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">About</h4>
                        </div>
                    <div class="modal-body">
                        <center>
                        <img src="<?php echo base_url();?>/images/profile.jpg" width="140" height="140" border="0" class="img-circle"></a>
                        <h3 class="media-heading">Nidhi Om  Subhash<small>USA</small></h3>
                        <span><strong>Skills: </strong></span>
                            <span class="label label-warning">HTML5/CSS</span>
                            <span class="label label-info">Adobe CS 5.5</span>
                            <span class="label label-info">Microsoft Office</span>
                            <span class="label label-success">Windows XP, Vista, 7</span>
                        </center>
                        <hr>
                        <center>
                        <p class="text-left"><strong>Bio: </strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                        <br>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
       

    <section id="blog" class="padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="timeline-blog overflow padding-top">
                        <div class="timeline-date text-center">
                            <a href="#" class="btn btn-common uppercase">November 2013</a>
                        </div>
                        <div class="timeline-divider overflow padding-bottom">
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img src="<?php echo base_url();?>/images/blog/timeline/1.jpg" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                        <a href="#" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <span class="post-date pull-left">February 11, 2014</span>
                                            <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img src="<?php echo base_url();?>/images/blog/timeline/2.jpg" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html#">Advanced business cards design</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                        <a href="#" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <span class="post-date pull-left">February 11, 2014</span>
                                            <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <iframe src="https://player.vimeo.com/video/95995577"></iframe>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                        <a href="#" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <span class="post-date pull-left">February 11, 2014</span>
                                            <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-blog overflow">
                        <div class="timeline-date text-center">
                            <a href="" class="btn btn-common uppercase">September 2013</a>
                        </div>
                        <div class="timeline-divider overflow padding-bottom">
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img src="<?php echo base_url();?>/images/blog/timeline/3.jpg" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                        <a href="#" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <span class="post-date pull-left">February 11, 2014</span>
                                            <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img src="<?php echo base_url();?>/images/blog/timeline/4.jpg" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                        <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                        <a href="#" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            <span class="post-date pull-left">February 11, 2014</span>
                                            <span class="comments-number pull-right"><a href="#">3 comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date text-center">
                            <a href="#" class="btn btn-common">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

      
    </body>
       
    </html>
