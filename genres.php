<?php
/*
Template Name: Top Genres Page
*/
$tags = get_tags(array(
            'hide_empty' => false
        ));

$genres = isset($_GET['genres']) && $_GET['genres'] ? strtolower($_GET['genres']) : false;
$filter = isset($_GET['filter']) && $_GET['filter'] ? strtolower($_GET['filter']) : false;

$comic = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => $filter,
    'tag' => $genres,
    'posts_per_page' => 8,
    'meta_key' => 'views',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);


$comics = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => $filter,
    'tag' => $genres,
    'posts_per_page' => -1,
    'orderby'=> 'title', 'order' => 'ASC'
);

if ($genres) {
    if ($genres == "manhua" || $genres == "manhwa") {
        $comic = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => $genres,
            'posts_per_page' => 8,
            'meta_key' => 'views',
            'orderby' => 'meta_value',
            'order' => 'DESC'
        );
        $comics = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => $genres,
            'posts_per_page' => -1,
            'orderby'=> 'title', 'order' => 'ASC'
        );
    }
}

$comic = new WP_Query( $comic );
$comics = new WP_Query( $comics );

$genres_name = $genres ? ucfirst($genres) : "All";
$title = "Top ".$genres_name . " Manga";

$latest_manga_release = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$latest_manga_release = new WP_Query( $latest_manga_release );

?>

<?php include_once(get_template_directory() . '/header.php'); ?>
<?php include_once('components/jumbotron.php'); ?>


<div class="container">
    <div class="card card-content mb-3 card-rounded">
        <div class="card-body">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="<?= url_schema('BreadcrumbList')?>" id="Breadcrumb">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                        <a itemtype="<?=url_schema('Thing')?>" itemprop="item" href="<?= home_url() ?>">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                        <a itemtype="<?=url_schema('Thing')?>" itemprop="item" href="<?= home_url('/genre') ?>">
                            <span itemprop="name">Genre</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                        <a itemtype="<?=url_schema('Thing')?>" itemprop="item">
                            <span itemprop="name"><?= $genres_name ?></span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </div>
            <div class="row konten p-3">
                <div class="col-lg-9 col-md-12">
                    <div class="mb-5">
                        <?php $header_comic = "Top ".$genres_name." Manga 2020" ?>
                        <?php include('components/header_top_genre.php')?>
                        <p class="text-info f-12">Here's the top <?= $genres_name ?> manga 2020 that you asked for. These titles are sorted based on popularity. You can find the complete list of <?= $genres_name ?> manga by alphabetical order if you scroll down. If you do not find your favorite latest manga release please
                        <a href="<?=home_url('comic-request')?>"><b>submit your title to us</b></a> we will add it to our list</p>
                        <?php if ( $comic->have_posts() ) : ?>
                        <div id="listScrollHorizontal" itemscope itemtype="<?= url_schema('TopGenres')?>">
                            <ul style="width: <?= $comic->post_count*200 ?>px;">
                                <?php while ( $comic->have_posts() ) :
                                        $comic->the_post();?> 
                                    <?php include('components/top_genres.php') ?>
                                <?php endwhile; ?>        
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>

                    <h5 class="d-inline"><b><?= $genres_name ?> Manga</b></h5>
                    <hr/>
                    <div class="row mt-5" itemscope itemtype="<?= url_schema('AllTopGenres')?>">
                        <?php if ( $comics->have_posts() ) :
                                        while ( $comics->have_posts() ) :
                                            $comics->the_post();
                                            ?> 
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 min-h-comic" itemprop="comic" itemscope itemtype="<?=url_schema('comicDetail')?>">
                        <?php include('components/comics_latest.php') ?>
                
                        </div>
                        <?php
                            endwhile;
                        endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!-- <?php include_once('components/latest_discussions.php') ?> -->
                    <div class="">
                        <h5 class="f-16"><b>Manga by genres</b></h5>
                        <?php include_once('components/list_genres4.php') ?>
                    </div>
                    <hr class="grey">
                    <div class="mt-3">
                        <?php $top_genres = false; $list_genres = $latest_manga_release; ?>
                        <?php include('components/top_genres_small.php') ?>
                    </div>  
                </div>
            </div>  
        </div>
    </div>
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>
