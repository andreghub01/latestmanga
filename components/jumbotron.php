<?php
$comic_banner = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'meta_key' => 'last_update',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);
$comic_banner = new WP_Query( $comic_banner );
while ( $comic_banner->have_posts() ) {
    $comic_banner->the_post();
    $comic_banner_result['title']= $post->post_title;
    $comic_banner_result['last_chapter']=get_post_meta($post->ID, 'list_1', true);
    $comic_banner_result['last_update']=get_post_meta($post->ID, 'last_update', true);
}
?>
<div class="jumbotron text-center bannerHome" style="background-image: url('<?= home_url('/wp-content/uploads/2020/07/bannerHome.jpg')?>');">
  <h1 class="display-4 font-weight-bold">Latest Manga Release</h1>
  <h2 class="f-20">Latest Update : <?= $comic_banner_result['title']. " Ch ". $comic_banner_result['last_chapter'] ?></h2>
  <h2 class="f-20"><?=$comic_banner_result['last_update'] ?></h2>
</div>