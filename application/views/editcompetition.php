<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Competition | TopDesignr</title>
    <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>/css/lightbox.css" rel="stylesheet"> 
	
    <link href="<?php echo base_url();?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/login.css" rel="stylesheet">
       
    <link rel="shortcut icon" href="<?php echo base_url();?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/images/ico/apple-touch-icon-57-precomposed.png">
     <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <link rel="stylesheet" href="<?php echo base_url();?>/css/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head><!--/head-->
    
  <body>

   <a href="<?php echo site_url('admin/home') ?>">
<h3><img class="mainlogo" src="<?php echo base_url();?>/images/logo.png" alt="logo"></h3></a>
       
      <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
								<a href="#" class="active" id="register-form-link">Edit Competition</a>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                <span><?php echo $error;?><?php echo validation_errors();?></span>
                                <?php echo form_open('admin/edit');?>
                                <?php foreach ($comp as $row ) {?>
                                  
                                
								<form id="register-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="c_title" id="c_title" tabindex="1" class="form-control" placeholder="Competition Title" value="<?php echo set_value('c_title', isset($row->c_title) ? $row->c_title : '');?>">
									</div>
                                    <div class="form-group">
                                        <input type="text" name="c_des" id="c_des" tabindex="1" class="form-control" placeholder="Add a description" value="<?php echo set_value('c_des', isset($row->c_des) ? $row->c_des : '');?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="c_host" id="c_host" tabindex="1" class="form-control" placeholder="Competition conducted by.." value="<?php echo set_value('c_host', isset($row->c_host) ? $row->c_host : '');?>">    
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="c_lastdate" id="datepicker" tabindex="1" class="form-control" placeholder="Last Date for Submission" value="<?php echo set_value('c_lastdate', isset($row->c_lastdate) ? date("m/d/Y",strtotime($row->c_lastdate)) : '');?>">    
                                    </div>
								    
                                    <div class="form-group">
                                        <input type="text" name="c_prize" id="c_prize" tabindex="1" class="form-control" placeholder="Prize" value="<?php echo set_value('c_prize', isset($row->c_prize) ? $row->c_prize : '');?>">
                                    </div>
                                    <div class="form-group">
                                       <select name="c_category" id="c_category" tabindex="1" class="form-control" placeholder= "Select Category" value="<?php echo set_value('c_category', isset($row->c_category) ? $row->c_category : '');?>">
                                        <option  value="<?php echo set_value('c_category', isset($row->c_category) ? $row->c_category : '');?>" selected disabled>Select Category</option>
                                        <option  value="cat1" <?php echo set_select('myselect', 'cat1', ($row->c_category== 'cat1')); ?>>cat1</option>
                                        <option  value="cat2" <?php echo set_select('myselect', 'cat2', ($row->c_category== 'cat2')); ?>>cat2</option>
                                        <option  value="cat3" <?php echo set_select('myselect', 'cat3', ($row->c_category== 'cat3')); ?>>cat3</option>
                                        <option  value="cat4" <?php echo set_select('myselect', 'cat4', ($row->c_category== 'cat4')); ?>>cat4</option>
                                      </select> 
       +                           
                                    </div>	
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-register" value="submit">
											</div>
										</div>
									</div>
								</form>
                <?php }?>
                                <?php echo form_close();?>
							</div>
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
    </body>  
    
    
</html>