<li itemprop="comic" itemscope itemtype="<?=url_schema('ComicDetail')?>">
    <div class="card-body" style="position: relative; min-height:450px;">
        <?php the_post_thumbnail('medium',['class' => 'rounded shadow thumbnail-latest','alt' => $post->post_title, 'itemprop' => "image"]); ?>
        <p itemprop="title" class="titleManga mt-2"><a href="<?= the_permalink() ?>"><?php the_title(); ?></a> </p>
        <div class="bottom-content">
            <p itemprop="lastUpdate" class="lastUpdate">Updated <?= get_lastUpdate($post->ID) ?></p>
            <div class="lastChapter" style="font-size: 14px;">
                <div class="d-inline">Chapter</div>
                <?= get_lastChapter($post->ID) ?>
            </div>
            <hr class="grey">
            <div class="mt-15">
                <?= get_rating($post->ID) ?>
            </div>
        </div>
    </div>
</li>