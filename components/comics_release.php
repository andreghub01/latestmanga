<?php 
if ($category == "MANGA") {
    $btn = "btn-danger";
} elseif ($category == "MANHUA") {
    $btn = "btn-warning";
} else {
    $btn = "btn-success";
}


?>
<div class="">
    <div class="">
        <div class="row">
            <div class="col-6" >
                <?php the_post_thumbnail('medium',['class' => 'rounded shadow thumbnail-w100','alt' => $post->post_title, 'itemprop' => "image"]); ?>
            </div>
            <div class="col-6">
                <a itemprop="genre" href="<?=$url_header_comic ?>" class="btn <?= $btn?> category"><b><?=$category ?></b></a>
                <p class="titleManga mt-15" itemprop="name">
                    <a itemprop="url" href="<?= the_permalink() ?>" title="<?= $post->post_title ?>"><?php the_title(); ?></a> 
                </p>
                <div class="lastChapter">
                    <div class="d-inline" itemprop="headline"><a href="http://<?=get_post_meta($post->ID, 'url_list_1', true) ?>" target="_blank" class="text-dark" title="last chapter"><?=get_post_meta($post->ID, 'list_1', true) ?></a></div>
                    <div class="d-inline" itemprop="headline"><a href="http://<?=get_post_meta($post->ID, 'url_list_2', true) ?>" target="_blank" class="text-dark" title="last chapter"><?=get_post_meta($post->ID, 'list_2', true) ?></a></div>
                    <div class="d-inline" itemprop="headline"><a href="http://<?=get_post_meta($post->ID, 'url_list_3', true) ?>" target="_blank" class="text-dark" title="last chapter"><?=get_post_meta($post->ID, 'list_3', true) ?></a></div>
                </div>
                <div class="mt-15">
                    <?= get_rating($post->ID) ?>
                </div>
                <p class="lastUpdate" itemprop="dateModified">Updated <?= get_lastUpdate($post->ID) ?></p>
            </div>
        </div>
    </div>
</div>