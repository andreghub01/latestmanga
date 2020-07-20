<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US" itemscope="itemscope" itemtype="<?=url_schema('WebPage')?>">
	<head profile="https://gmpg.org/xfn/11">
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width" />
		<link rel="canonical" href="<?php echo get_site_url(); ?>" />
		<link rel="alternate" href="<?php echo get_site_url(); ?>" hreflang="x-default" />
		<link rel="alternate" href="<?php echo get_site_url(); ?>" hreflang="en" />
		<meta name="robots" content="noodp">
		<title>Mangafast - Read Manga Online</title>
		<meta name="description" content="Mangafast is a platform to read manga online from various genre. The most complete manga, manhwa, and manhua library in english and it's absolutely free!" />
		<meta name="keywords" itemprop="keywords" content="Read Manga, Read Manhua, Read Manhwa, Manga Online, Free Manga, Manga English, Read Manga Online, Mangafast" />
		<meta name="copyright" content="Copyright © 2020 Mangafast" />
		<meta property="og:url"           content="https://mangafast.net/" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="Mangafast - Read Manga Online in English for Free" />
		<meta property="og:description"   content="The best website to read manga online for free. You can also reading manhua and manhwa in English at Mangafast." />
		<meta property="og:image"         content="https://mangafast.net/wp-content/uploads/2020/04/Mangafast-Watermark.png" />
        <link rel="dns-prefetch" href="https://i0.wp.com/">
        <meta content='general' name='rating' />
        <meta content='usa' name='geo.country' />
        <!-- <meta name="google-site-verification" content="iclar2KFnQNAwkAzUq52-H9d0VEVzPhqav-wNHXBv5Q" /> -->
        <meta name="theme-color" content="#444">
        <!-- <script src="https://kit.fontawesome.com/c44a2d3aa1.js" crossorigin="anonymous"></script> -->
        <!-- Bootstrap CSS -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <!-- <link rel="stylesheet" href="bootstrap.css"> -->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">


        <title><?=$title ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" itemscope itemtype="<?=url_schema('WPHeader')?>" role="banner">
	    <meta itemprop="name" content="<?php if ( is_single()){the_title();}else{echo "Mangafast - Read Manga Online for Free";}; ?>">
      <div class="container">
        <a class="navbar-brand" title="Mangafast" href="<?= home_url() ?>">Logo
            <!-- <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" itemscope itemtype="<?=url_schema('SiteNavigationElement')?>" role="navigation">
            <ul class="navbar-nav mr-auto">
                <li itemprop="name" class="nav-item active">
                    <a itemprop="url" title="Home" class="nav-link" href="<?= home_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li itemprop="name" class="nav-item">
                    <a itemprop="url" title="Latest Manga Release" class="nav-link" href="<?= home_url('/genre') ?>">Latest Manga Release</a>
                </li>
                <!-- <li itemprop="name" class="nav-item">
                    <a itemprop="url" title="" class="nav-link" href="<?= home_url('/top-comics') ?>">Top Comics</a>
                </li> -->
                <!-- <li itemprop="name" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <li itemprop="name" class="nav-item">
                    <a itemprop="url" title="Genres" class="nav-link" href="<?= home_url('/top-genres') ?>">Genre</a>
                </li>
            </ul>
            <form action="<?= home_url('/search')?>" class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                        <?= search_icon() ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </nav>
 