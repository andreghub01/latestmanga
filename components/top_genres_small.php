<h3 class="f-16 mb-3 mt-3"><b>
    <?php if ($top_genres) : ?>
        <a href="<?= home_url('\top-genres?genres='.$top_genres) ?>" class="text-dark"> Top <?=$top_genres ?> Manga </a>
    <?php else: ?>
        Latest Manga Release
    <?endif?>
</b></h3>
<?php if ( $list_genres->have_posts() ) :
while ( $list_genres->have_posts() ) :
    $list_genres->the_post();
    ?> 
<div class="row mb-3">
        <div class="col-4">
            <?php the_post_thumbnail('thumbnail',['class' => 'rounded shadow thumbnail-w100','alt' => $post->post_title, 'itemprop' => "image"]); ?>
        </div>
        <div class="col-8">
            <div class="f-12">Latest Release</div>
            <div class="f-14">
                <a href="<?= the_permalink() ?>"><b itemprop="name"><?php the_title(); ?></b></a>
            </div>
            <div>
                <div class="d-inline text-warning">&#10029;</div>
                <div class="d-inline text-warning">&#10029;</div>
                <div class="d-inline text-warning">&#10029;</div>
                <div class="d-inline text-warning">&#10029;</div>
                <div class="d-inline">&#10029;</div>
            </div>
        </div>
</div>
    <?php
        endwhile;
endif; ?>