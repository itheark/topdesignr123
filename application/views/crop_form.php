<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- 
@author : PHP Ecosystem
@author URL : www.phpecosystem.com
@license: PUBLIC

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <title>PHP Ecosystem - CodeIgniter, &amp; Image upload &amp; Crop</title>
    <script src="<?php echo base_url();?>public/javascript/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/javascript/jquery.imgareaselect.min.js" type="text/javascript"></script>
    
    <?php if($large_photo_exists && $thumb_photo_exists == NULL):?>
    <script src="<?php echo base_url();?>public/javascript/jquery.imgpreview.js" type="text/javascript"></script>
    <script type="text/javascript">
    // <![CDATA[
        var thumb_width    = <?php echo $thumb_width ;?> ;
        var thumb_height   = <?php echo $thumb_height ;?> ;
        var image_width    = <?php echo $img['image_width'] ;?> ;
        var image_height   = <?php echo $img['image_height'] ;?> ;
    // ]]>
    </script>
    <?php endif ;?>
    
    <style type="text/css">
    
.btn-primary { 
	text-shadow: 0px -1px 0px rgba(0,0,0,.5);
	color: #ffffff;
	background-color: #263849; 
	background-image: -moz-linear-gradient(top, #3C4C5B, #263849); 
	background-image: -ms-linear-gradient(top, #3C4C5B, #263849); 
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#3C4C5B), to(#263849)); 
	background-image: -webkit-linear-gradient(top, #3C4C5B, #263849); 
	background-image: -o-linear-gradient(top, #3C4C5B, #263849); 
	background-image: linear-gradient(top, #3C4C5B, #263849); 
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3C4C5B', endColorstr='#263849', GradientType=0); 
	border-color: #684682 #263849 #263849 #684682; 
	border-color: rgba(0, 0, 0, 0.25) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.35) rgba(0, 0, 0, 0.25); 
}
    
    </style>
</head>
<body style="color: rgb(37, 105, 135);font-family: Tahoma;">
<h2 style="font-family: Tahoma; padding-bottom: 4px; border-bottom: 5px solid rgb(184, 235, 247);">PHP Ecosystem</h2>
<h3>CodeIgniter Image Upload and Crop</h3>
<?php if($error) :?>
    <ul><li><strong>Error uploading an Image!</strong></li><li><?php echo $error ;?></li></ul>
<?php endif ;?>

<?php if($large_photo_exists && $thumb_photo_exists) :?>
	<?php echo $large_photo_exists."&nbsp;".$thumb_photo_exists; ?>
	<p><a href="<?php echo $_SERVER["PHP_SELF"];?>">Add another</a></p>

<?php elseif($large_photo_exists && $thumb_photo_exists == NULL) :?>

<h2>Generate Thumbnail</h2>
<div align="center">
        <img src="<?php echo base_url() . $upload_path.$img['file_name'];?>" style="float: left; margin-right: 10px;" id="thumbnail" alt="Create Thumbnail" />
        <div style="border:1px #e5e5e5 solid; float:left; position:relative; overflow:hidden; width:<?php echo $thumb_width;?>px; height:<?php echo $thumb_height;?>px;">
                <img src="<?php echo base_url() . $upload_path.$img['file_name'];?>" style="position: relative;" alt="Thumbnail Preview" />
        </div>
        <br style="clear:both;"/>
        <form name="thumbnail" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <input type="hidden" name="x1" value="" id="x1" />
                <input type="hidden" name="y1" value="" id="y1" />
                <input type="hidden" name="x2" value="" id="x2" />
                <input type="hidden" name="y2" value="" id="y2" />
                <input type="hidden" name="file_name" value="<?php echo $img['file_name'] ;?>" />
                <input type="submit" name="upload_thumbnail" class="btn-primary" value="Save Thumbnail" id="save_thumb" />
        </form>
</div>

<hr />
<?php 	else : ?>

<h2>Upload Image</h2>
<form name="photo" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Select Image <input type="file" name="image" size="30"/> <input type="submit" name="upload" class="btn-primary" value="Upload" />
</form>
<?php 	endif ?>

</body>
</html>
