<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="image/RGLogo5.jpg" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RoadmapGuider </title>
  
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">


 <style>
  .header{
        background-color:black;
    }
    .firstSubPage{
        box-shadow:4px 4px 4px 4px black;
    }
 </style>
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
</head>
<body >
<div class="row header">
<div class="col-lg-6">
<span class="logo" style=" color:white;"><a href="../index.html"><img src="image/RgLogo.png" alt="" style="width:65px;"></a>Roadmap Guider</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
include_once 'dbConnection.php';
session_start();
if ((!isset($_SESSION['username']))) {
    echo '<a href="#" class="pull-right logb btn btn-primary" data-toggle="modal" data-target="#myModal" style="position:relative; top:20px;"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold; ">LogIn</font></a>&nbsp;';
} else {
    echo '<a href="logout.php?q=feedback.php" class="pull-right logb btn btn-primary" style="style="position:relative; top:20px;"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Logout</font></a>&nbsp;';
}
?>

<a href="index.php" class="pull-right btn logb btn-primary" style="color:white; position:relative; top:20px;right:50px;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold; ">Home</font></a>&nbsp;
</div></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight:bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Enter your username-id" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
<div class="" style="min-height:630px; background-image:url(image/feedbackBgImage.jpg); background-size:cover; margin-top:30px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-4 panel p-0 m-0" style="background-color:none; height:50px; color:white; ">
<h2 align="center" style="color:white; margin-top:0px; padding-top:0px; position:relative; bottom:15px; color:black;">Feedback Form</h2>
<div style="font-size:14px;margin-top:0px"><br />
<?php
if (@$_GET['q'])
    echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
else {
    echo ' 

<form role="form"  method="post" action="feed.php?q=feedback.php" style="position:relative; bottom:20px;">
<div class="row">
<div class="col-md-3"><b style="font-size:20px; position:relative; top:5px;">Name:</b><br /><br /><br /><b  style="font-size:20px; position:relative; top:3px;">Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required><br />    
   <input id="name" name="subject" placeholder="Enter short description of your feedback" class="form-control input-md" type="text" required>    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b  style="font-size:20px; position:relative; top:5px;">E-Mail ID:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your e-mail" class="form-control input-md" type="email" required>    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here. Keep it clean and simple." required></textarea>
</div>
<div class="form-group" align="center" style="position:relative;top:14px">
<font style="font-size:12px;font-weight:bold; "><input type="submit" name="submit" value="Send My Feedback" class="btn btn-primary" /></font>
</div>
</form>';
}
?>
<div style="width:200px; position :relative;
bottom:70px;
right:320px;
rotate: -9deg;
color:black;
text-shadow:0.5px 0.5px 0.5px black;">
  <p style="font-size:20px;">“We all need people who will give us feedback. <br> That's how we improve.” <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>-Bill Gates</b></p>
</div>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>



  <!-- 2.Copyright section -->

  <div style="background-color:black;color:white; padding:10px 0px; margin-top:1px;width:110vw; position :relative; top:24px;"> 
      <h4 class="text-center copyrightLine">
     copyright&nbsp;<img src="image/copyrightIcon6.png" alt="" style="width:25px;"/>&nbsp;.&nbsp;Made with
     <img src="image/heartLogo.png" alt="" style="width:25px;" /> by vedant yeotikar.
     All rights reserved .
   </h4>
 </div>
</body>
</html>
