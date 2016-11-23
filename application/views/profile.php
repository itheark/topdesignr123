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

                        <a class="navbar-brand" href="<?php echo site_url('main/home')?>">
                            <h1><img src="<?php echo base_url();?>/images/logo.png" alt="logo"></h1>
                        </a>
                        
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url('main/home')?>">Home</a></li>                 
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

    <div class="container">
        <div>
            <center>
              <?php foreach ($user as $row) {?>   
            <div class="hovereffect">
            <img class="img-responsive img-circle" style="display: block;
        margin-left: auto;
        margin-right: auto" src="<?php echo base_url();?>/uploads/profile/<?php echo $row->image?>" width ="200" height="200"  alt="">
            <div class="overlay">
                    
                    <p class="set1">
                        <?php if($this->session->userdata('user_id')==$row->user_id){?>
                            <a href=" <?php echo site_url('main/profile_pic');?>" style="outline:none," ><b><i class="fa fa-edit "></i></b></a>
                       <?php }?>
                    </p>
                    
                 
                </div>
        </div>


    <section class="buttons1">
        <div class="buttons1 container">
           
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class=" btn btn-1" style="outline:none"><h3>Nidhi Om Subhash</h3></a>    
             <!--<h3><a href="#" class="btn btn-1" ><i class="fa fa-user-plus "></i> Follow</a></h3>!-->
             <br>
             <h2 class="label label-info">@<?php echo $row->uname;?></h2>
             <h3>
                <?php if($this->session->userdata('user_id')==$row->user_id){?>
             <a href="" class="btn btn-1" style="outline:none" ><i class="fa fa-edit "></i> Edit</a></h3>
             <?php } else{ ?>
             <?php if($following==TRUE) { ?>
              <a href="<?php echo site_url('main/unfollow/'.$row->user_id);?>" class="btn btn-1" style="outline:none" id="button" data-following="<?php echo $following;?>"><i class="fa fa-check-circle-o"></i>
            <?php echo "Following";} ?></a> <?php if($following==FALSE) {?>
              <a href="<?php echo site_url('main/follow/'.$row->user_id);?>" class="btn btn-1" style="outline:none" id="button" data-following="<?php echo $following;?>"><i class="fa fa-user-plus"></i>
              <?php 
                echo "Follow";
              }?></a></h3>
              

             <?php } ?>
             <h3 class="btn btn-common " ><?php echo $row->followers;?> Followers</h3>
             <h3 class="btn btn-common " ><?php echo $row->no_posts;?> Posts</h3>
             <h3 class="btn btn-common " ><?php echo $row->following;?> Following</h3>
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
                            <a  class="btn btn-common uppercase">Timeline</a>
                        </div>
                        <div class="timeline-divider overflow padding-bottom">
                            <?php $count=0; foreach ($post as $row){ if($count%2==0){?>
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img style ="max-height:261px;max-width:269px;  margin: 0 auto; align:center;" src="<?php echo base_url();?>/uploads/post/thumb/<?php echo $row->post_image?>" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#"><?php $date= strtotime($row->post_date); echo date('d',$date);?><br><small><?php echo date('M',$date);?></small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>"><?php $string = strip_tags($row->post_title);
                                if (strlen($string) > 35) {
                                $stringCut = substr($string, 0, 35);
                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'[...]'; }echo $string;?></a></h2>
                                        <h3 class="post-author"><a href="<?php echo site_url('main/profile/'.$row->uname)?>">Posted by <?php echo $row->uname?></a></h3>
                                        <p><?php $string = strip_tags($row->post_des);
                                if (strlen($string) > 140) {
                                $stringCut = substr($string, 0, 140);
                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'[...]'; }echo $string;?></p>
                                        <a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                        
                                        <ul class="nav nav-justified post-nav">
                                        <li><center><a ><i class="fa fa-heart"></i>32 Likes</a></center></li>
                                        <li><center><a ><i class="fa fa-comments"></i>3 Comments</a></center></li>
                                        <li ><center><a href="#" style="color:#a91212;" onclick =""><i class="fa fa-trash-o"style="color:#a91212;"></i>Delete</a></center></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $count++;} else{?>
                            <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="post-thumb">
                                            <img style ="max-height:261px;max-width:269px;  margin: 0 auto; align:center;" src="<?php echo base_url();?>/uploads/post/thumb/<?php echo $row->post_image?>" class="img-responsive" alt="">
                                            <div class="post-overlay">
                                               <span class="uppercase"><a href="#"><?php $date= strtotime($row->post_date); echo date('d',$date);?><br><small><?php echo date('M',$date);?></small></a></span>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>"><?php $string = strip_tags($row->post_title);
                                if (strlen($string) > 35) {
                                $stringCut = substr($string, 0, 35);
                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'[...]'; }echo $string;?></a></h2>
                                        <h3 class="post-author"><a href="<?php echo site_url('main/profile/'.$row->uname)?>">Posted by <?php echo $row->uname?></a></h3>
                                        <p><?php $string = strip_tags($row->post_des);
                                if (strlen($string) > 140) {
                                $stringCut = substr($string, 0, 140);
                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'[...]'; }echo $string;?></p>
                                        <a href="<?php echo site_url('main/exploredetails/'.$row->post_id)?>" class="read-more">View More</a>
                                        <div class="post-bottom overflow">
                                            
                                           <ul class="nav nav-justified post-nav">
                                        <li><center><a href="#"><i class="fa fa-heart"></i>32 Likes</a></center></li>
                                        <li><center><a href="#"><i class="fa fa-comments"></i>3 Comments</a></center></li>
                                        <li ><center><a href="#" style="color:#a91212;" ><i class="fa fa-trash-o "style="color:#a91212;"></i>Delete</a></center></li>
                                    </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $count++;}}?>
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
