<?php

$title = "Latest Manga!";

$genres = isset($_GET['genres']) && $_GET['genres'] ? $_GET['genres'] : false;

$manga = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'manga',
    'posts_per_page' => 6,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$manga = new WP_Query( $manga );

$manhua = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'manhua',
    'posts_per_page' => 6,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$manhua = new WP_Query( $manhua );

$manhwa = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'manhwa',
    'posts_per_page' => 6,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$manhwa = new WP_Query( $manhwa );

$genres1 = "Action";
$genres2 = "Sports";

$list_genres1 = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'tag' => $genres1,
    'posts_per_page' => 3,
    'meta_key' => 'views',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$list_genres1 = new WP_Query( $list_genres1 );

$list_genres2 = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'tag' => $genres2,
    'posts_per_page' => 3,
    'meta_key' => 'views',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$list_genres2 = new WP_Query( $list_genres2 );


?>


<?php include_once(get_template_directory() . '/header.php'); ?>
<?php include_once('components/jumbotron.php'); ?>


<div class="container">
    <div class="card card-content mb-3 card-rounded">
        <div class="">
            <div class="row p-4">
                <div class="col-md-9" itemscope itemtype="<?=url_schema('ComicSeries')?>">
                    <h3 class="f-16"><b>TOP 12 MANGA</b></h3>
                    <!-- <h3 class="float-right f-16 pr-5 d-none d-md-block"><b>Latest Chapters</b></h3> -->
                    <hr class="mb-2">
                    <p class="f-12">Find the latesst release of the best manga on the planet. Here we give you the top 12 most popular with the most number of views. Click on the title and click on the chapter number to read it at your favorite manga platform.</p>
                    <p class="f-12">Don't see your favorite manga? <a href="<?=home_url('comic-request')?>"><b>Submit your favorite manga here</b></a></p>
                    <div class="row">
                        <?php $no = 0 ; $items = get_topComic(334,12);
                        foreach ($items as $item) : 
                        $post = get_post($item);
                        ?>
                            <div class="col-md-3 col-6 min-h-comic" itemprop="hasPart" itemscope itemtype="<?=url_schema('ComicIssue')?>">
                                <?php include('components/comics_latest.php') ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="f-16"><b>Manga by genres</b></h3>
                    <?php include_once('components/list_genres4.php') ?>
                    <hr class="grey">
                    <div class="row mt-4">
                        <div class="col-3">
                            <button class="btn btn-outline-warning">
                                &#10029;
                            </button>
                        </div>
                        <div class="col-8">
                            <h4 class="f-14">
                                <b>Didn't find your favorite manga?</b>
                            </h4>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="f-12" style="color:grey">Let us know, we'll add it</p>
                        </div>
                    </div>
                    <hr class="grey">
                    <div itemscope itemtype="<?=url_schema("ComicSeries") ?>">
                        <?php $top_genres = $genres1; $list_genres = $list_genres1; ?>
                        <?php include('components/top_genres_small.php') ?>
                    </div>
                    <div itemscope itemtype="<?=url_schema("ComicSeries") ?>">
                        <?php $top_genres = $genres2; $list_genres = $list_genres2; ?>
                        <?php include('components/top_genres_small.php') ?>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>

    <div class="mt-5" itemscope itemtype="<?=url_schema('ComicSeries')?>">
        <?php $header_comic = "Manga Release";$url_header_comic = home_url('/top-genres?filter=manga'); ?>
        <?php include('components/header_comic.php')?>
        <div class="row pl-3">
            <?php if ( $manga->have_posts() ) :
 
                    while ( $manga->have_posts() ) :
                        $manga->the_post();
                        ?> 


            <div class="col-md-4 p-1 mt-3">
                <?php $category = "MANGA" ?>
                <?php include('components/comics_release.php')?>
            </div>
            <?php
    endwhile;
endif; ?>
        </div>
    </div>

    <div class="mt-5" itemscope itemtype="<?=url_schema('ComicSeries')?>">
        <?php $header_comic = "Manhua Release";$url_header_comic = home_url('/top-genres?filter=manhua'); ?>
        <?php include('components/header_comic.php')?>
        <div class="row pl-3">
        <?php if ( $manhua->have_posts() ) :
            while ( $manhua->have_posts() ) :
                $manhua->the_post();
                ?> 
                <div class="col-md-4 p-1 mt-3">
                    <?php $category = "MANHUA" ?>
                    <?php include('components/comics_release.php')?>
                </div>
                <?php
                endwhile;
        endif; ?>
        </div>
    </div>

    <div class="mt-5" itemscope itemtype="<?=url_schema('ComicSeries')?>">
        <?php $header_comic = "Manhwa Release";$url_header_comic = home_url('/top-genres?filter=manhwa'); ?>
        <?php include('components/header_comic.php')?>
        <div class="row pl-3">
        <?php if ( $manhwa->have_posts() ) :
 
 while ( $manhwa->have_posts() ) :
     $manhwa->the_post();
     ?> 
            <div class="col-md-4 p-1 mt-3">
                <?php $category = "MANHWA" ?>
                <?php include('components/comics_release.php')?>
            </div>
            <?php
    endwhile;
endif; ?>
        </div>
    </div>
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>
