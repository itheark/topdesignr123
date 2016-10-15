<html>
<head>
<title>Upload</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>/css/uploadstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="content">
<h1>Change Picture</h1><br>
<h4 id="loading" style="display: none;">loading...</h4>
<div id="message"><?php echo "<font color='red'>$error</font>";?> <!-- Error Message will show up here --></div>
<hr><hr id="line"> 
	<div id="selectImage">
		<label>Select Your Image or File</label><br>
		<?php echo form_open_multipart('upload/do_upload');?> 
		<?php echo "<input type='file' name='userfile' size='20' id='file'/>"; ?>
		<?php echo "<input type='submit' name='submit' value='Upload' class='submit'/> ";?>
	</div>
<?php echo "</form>"?>
</div>
</body>
</html>


