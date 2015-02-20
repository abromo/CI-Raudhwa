<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $app_title?> | <?php if(isset($title) and $title){echo $title;}else{ echo "Karibu";}?></title>
    <?php if (check_if_online()){?><link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800' rel='stylesheet' type='text/css'><?php }?>
    <link  href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link  href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link  href="<?php echo base_url()?>assets/css/bootstrap-social.css" rel="stylesheet" type="text/css">
    <link  href="<?php echo base_url()?>assets/css/rau-menu.css" rel="stylesheet" type="text/css">
    <link  href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link  href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="Shortcut Icon" type="image/png" href="<?php echo base_url();?>assets/img/icon.png" />

</head>

<body>
<div id="wrapper">