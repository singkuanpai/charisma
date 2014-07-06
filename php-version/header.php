<!DOCTYPE html>
<html lang="en">
<head>
	<!--
	    ===
	    This comment CANNOT be removed.

		Charisma v2.0.0

		Copyright 2014 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
		===
	-->
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>

	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
        <div class="navbar navbar-default" role="navigation">

            <div class="navbar-inner">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>

                <!-- theme selector starts -->
                <div class="btn-group pull-right theme-container" >
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" id="themes">
                        <li><a data-value="classic" href="#"><i class="glyphicon glyphicon-blank"></i> Classic</a></li>
                        <li><a data-value="cerulean" href="#"><i class="glyphicon glyphicon-blank"></i> Cerulean</a></li>
                        <li><a data-value="cyborg" href="#"><i class="glyphicon glyphicon-blank"></i> Cyborg</a></li>
                        <li><a data-value="redy" href="#"><i class="glyphicon glyphicon-blank"></i> Redy</a></li>
                        <li><a data-value="journal" href="#"><i class="glyphicon glyphicon-blank"></i> Journal</a></li>
                        <li><a data-value="simplex" href="#"><i class="glyphicon glyphicon-blank"></i> Simplex</a></li>
                        <li><a data-value="slate" href="#"><i class="glyphicon glyphicon-blank"></i> Slate</a></li>
                        <li><a data-value="spacelab" href="#"><i class="glyphicon glyphicon-blank"></i> Spacelab</a></li>
                        <li><a data-value="united" href="#"><i class="glyphicon glyphicon-blank"></i> United</a></li>
                    </ul>
                </div>
                <!-- theme selector ends -->

                <!-- user dropdown starts -->
                <div class="btn-group pull-right" >
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-phone"> admin</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->
                    <ul class="collapse navbar-collapse nav navbar-nav">
                        <li><a href="#">Visit Site</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Sample Menu</a></li>
                        <li>
                            <form class="navbar-search pull-left">
                                <input placeholder="Search" class="search-query form-control col-md-12" name="query" type="text">
                            </form>
                        </li>
                    </ul>

            </div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="ch-container">
		<div class="row">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="col-md-2">
				<div class="sidebar-nav collapse navbar-collapse">
					<ul class="nav nav-pills nav-stacked main-menu">
						<li class="nav-header hidden-md">Main</li>
						<li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
						<li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a></li>
						<li><a class="ajax-link" href="form.html"><i class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
						<li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a></li>
						<li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a></li>
						<li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a></li>
						<li class="nav-header hidden-md">Sample Section</li>
						<li><a class="ajax-link" href="table.html"><i class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
						<li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="glyphicon glyphicon-folder-open"></i><span> File Manager</span></a></li>
						<li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
						<li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a></li>
						<li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-md" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block col-md-12">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="col-md-10">
			<!-- content starts -->
			<?php } ?>
