<?php
	
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themeon.net/nifty/v3.0.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2023 08:28:51 GMT -->
<head>
    <meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
    <title>Dashboard 1 | Nifty - Admin Template</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="<?= $PATH_ASSET_CSS . "bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css" ?>">

    <!-- Nifty CSS [ REQUIRED ] -->
	<link rel="stylesheet" href="<?= $PATH_ASSET_CSS . "nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css" ?>">
</head>

<body class="jumping" data-theme="light">
	<!-- PAGE CONTAINER -->
    <div id="root" class="root mn--max hd--expanded">
        <?= $this->renderSection('content'); ?>

		<!-- HEADER -->
        <?= $this->include('layouts/header'); ?>
		<!-- END - HEADER -->

        <!-- MAIN NAVIGATION -->
        <?= $this->include('layouts/nav'); ?>
        <!-- END - MAIN NAVIGATION -->

        <!-- SIDEBAR -->
        <?= $this->include('layouts/sidebar'); ?>        
        <!-- END - SIDEBAR -->

    </div>
    <!-- END - PAGE CONTAINER -->

    <!-- SETTING LAYOUT-->
    <?= $this->include('layouts/components/settings_container'); ?>
    <!-- END - SETTING LAYOUT-->

    <!-- BOXED LAYOUT-->
    <?= $this->include('layouts/components/boxed_layout'); ?>
    <!-- END - BOXED LAYOUT-->

    <!-- OFFCANVAS-->
    <?= $this->include('layouts/components/offcanvas'); ?>
    <!-- END - OFFCANVAS-->

</body>
    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src='<?= $PATH_ASSET_JS . "bootstrap.min.js"?>' defer></script>
    <!-- Nifty JS [ OPTIONAL ] -->
    <script src='<?= $PATH_ASSET_JS . "nifty.min.js"?>' defer></script>
    <?= $this->renderSection('javascript'); ?>
</html>

