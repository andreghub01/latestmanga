
<?php
/*
Template Name: Latest Page
*/

$title = "Latest Manga Release Update";
$tags = get_tags(array(
            'hide_empty' => false
        ));

$genres = isset($_GET['genres']) && $_GET['genres'] ? $_GET['genres'] : false;

$manga = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6*3,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);

// $manhua = array(
//     'post_type' => 'post',
//     'post_status' => 'publish',
//     'category_name' => 'manhua',
//     'tag' => $genres,
//     'posts_per_page' => 6
// );

// $manhwa = array(
//     'post_type' => 'post',
//     'post_status' => 'publish',
//     'category_name' => 'manhwa',
//     'tag' => $genres,
//     'posts_per_page' => 6
// );

// if ($genres) {
//     if ($genres == "manhua") {
//         $manhua = array(
//             'post_type' => 'post',
//             'post_status' => 'publish',
//             'category_name' => 'manhua',
//             'posts_per_page' => 6
//         );
//     }
//     elseif ($genres == "manhwa") {
//         $manhwa = array(
//             'post_type' => 'post',
//             'post_status' => 'publish',
//             'category_name' => 'manhwa',
//             'posts_per_page' => 6
//         );
//     }
// }

$manga = new WP_Query( $manga );
// $manhua = new WP_Query( $manhua );
// $manhwa = new WP_Query( $manhwa );

?>
<?php include_once(get_template_directory() . '/header.php'); ?>



<div class="container">
    <div aria-label="breadcrumb" class="mt-30">
        <ol class="breadcrumb" itemscope itemtype="<?= url_schema('BreadcrumbList')?>" id="Breadcrumb">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                <a itemtype="<?=url_schema('Thing')?>" itemprop="item" href="<?= home_url() ?>">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                <a itemtype="<?=url_schema('Thing')?>" itemprop="item">
                    <span itemprop="name">Genre</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>

    <?php include_once('components/list_genres.php') ?>
    <div class="p-3">

        <h5 class="d-inline"><b>Find the latest manga release update</b></h5>
        <hr/>
        <p>All the latest manga release of your favorite titles all in one place. If you do not find the latest manga release of your favorite update,
        <a href="<?=home_url('/comic-request')?>" ><b>submite favorite manga here</b></a></p>
        <div class="row mt-4" itemscope itemtype="<?= url_schema('ComicSeries')?>">
            <?php if ( $manga->have_posts() ) :
                            while ( $manga->have_posts() ) :
                                $manga->the_post();
                                ?> 
                <div class="col-md-2 col-6 min-h-comic" itemprop="hasPart" itemscope itemtype="<?=url_schema('ComicIssue')?>">
                    <?php include('components/comics_latest.php') ?>
        
                </div>
            <?php
                        endwhile;
                    endif; ?>
        </div>
    
        <!-- <div class="">
            <ul class="list-group">
                <li class="list-group-item bg-transparent">
                        <?php $header_comic = "Latest Manga" ?>
                        <?php include('components/header_comic.php')?>
                        <div class="row">
                        <?php if ( $manga->have_posts() ) :
                            while ( $manga->have_posts() ) :
                                $manga->the_post();
                                ?> 
     
                            <div class="col-md-2 mt-3 min-h-comic">
                                <?php include('components/comics_latest.php') ?>
                            </div>
                            <?php
                        endwhile;
                    endif; ?>
                        </div>
                </li>
            </ul>
        </div> -->
    </div>

    
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>

