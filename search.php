<?php 
/**
 * Template Name: Search Page
 */
$comics = false;
$search = isset($_GET['search'])?$_GET['search']:false;
if ($search) {
    global $wpdb;
    // $comics = array(
    //     'post_type' => 'post',
    //     'post_status' => 'publish',
    //     's' => $_GET['search'],
    //     'posts_per_page' => -1,
    //     'orderby' => 'title',
	//     'order' => 'ASC'
    // );
    // $comics = new WP_Query( $comics );
    $comics = $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_title LIKE '%s' AND post_type='post' AND post_status='publish'", '%'. $wpdb->esc_like( $search ) .'%') );

$title = "Result ". $search;
}
?> 
<?php include_once(get_template_directory() . '/header.php'); ?>
<div class="container">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb" itemscope itemtype="<?= url_schema('BreadcrumbList')?>" id="Breadcrumb">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                <a itemtype="<?=url_schema('Thing')?>" itemprop="item" href="<?= home_url() ?>">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="<?=url_schema('ListItem')?>">
                <a itemtype="<?=url_schema('Thing')?>" itemprop="item">
                    <span itemprop="name">Search</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
    <small class="ml-3">Search Result for “<?= $search ? $search : "" ?>”</small>
    <div itemscope itemtype="<?= url_schema('SearchList')?>">

        <?php 
    
        foreach ( $comics as $comic ):
                $post = get_post( $comic )
            ?> 

            <div class="row mt-5 mb-5" itemscope itemtype="<?= url_schema('Result')?>" itemprop="SearchResult">
                <div class="col-md-3 text-center offset-2">
                    <?php the_post_thumbnail('medium',['class' => 'rounded shadow thumbnail-w100','alt' => $post->post_title, 'itemprop' => "image"]); ?>
                </div>
                <div class="col-md-5">
                    <a itemprop="title" href="<?= the_permalink() ?>" class="titleSearch"><?php the_title(); ?></a>
                    <div itemprop="lastUpdate" class="mt-2 mb-4"><small>Last Update <?= get_lastUpdate($post->ID) ?></small></div>
                    <p itemprop="sipnosis" class="sipnosis"><?php $pos=strpos($post->post_content, ' ', 100);
                                                echo substr($post->post_content,0,$pos );?>...</p>
        
                <div class="mt-15">
                    <?= get_rating($post->ID) ?>
                </div>
        
                    <a href="http://<?= get_post_meta($post->ID, 'url_list_1', true) ?>" class="btn btn-info mt-2 elips" target="_blank">Read Chapter <span itemprop="lastChapter"><?= get_post_meta($post->ID, 'list_1', true) ?></span></a>
                </div>
        
            </div>
                <?php
            endforeach; ?>
    </div>

</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>

