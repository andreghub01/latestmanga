<div style="position: relative;">
    <?php the_post_thumbnail('medium',['class' => 'rounded shadow thumbnail-latest','alt' => $post->post_title, 'itemprop' => "image"]); ?>
    <div class="rating-badge">
        <b>
            <span itemprop="contentrating"><?= get_post_meta($post->ID, 'rating', true); ?></span> &#10029;
        </b>
    </div>
</div>
<p itemprop="name" class="titleManga mt-2">
    <a itemprop="url" href="<?= the_permalink() ?>">
        Latest <br>
        <?= slice_title($post->post_title); ?> <br>
        Release
    </a>
</p>
<div class="bottom-content">
    <div class="lastChapter f-14">
        <div class="d-inline">Chapter</div>
        <?= get_lastChapter($post->ID) ?>
    </div>
    <p itemprop="dateModified" class="lastUpdate">Updated <?= get_lastUpdate($post->ID) ?></p>
    <hr class="grey">
</div>
