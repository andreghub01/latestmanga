<div class="col-md-12 col-6" style="border: 1px solid rgba(215,215,215,0.6); margin-bottom:20px; border-radius:5px; padding:0 1rem">
    <div class="row">
        <div class="col-md-2 align-middle text-center">
            <?php the_post_thumbnail('medium',['class' => 'rounded shadow', 'style'=> 'max-width:60%;height:auto;margin:1em auto;','alt' => $post->post_title,'itemprop' => "image"]); ?>
        </div>
        <div class="col-md-6 pt-4">
            <p><b class="f-20"><?= $no++ < 9 ? '0'.$no : $no ?>. </b><a itemprop="title" href="<?= $post->guid ?>" class="f-16 fw-600" title="<?= $post->post_title ?>"><?= $post->post_title ?></a></p>
            <small class="f-12" itemprop="lastUpdate">Latest Release <?= get_lastUpdate($post->ID) ?></small>
        </div>
        <div class="col-md-4"  style="margin: 2em auto;">
            <div class="row text-center fw-600">
                <div class="col-4" itemprop="lastChapter1"><a href="https://<?= get_post_meta($post->ID, 'url_list_1', true) ?>" class="text-dark" target="_blank" title="last chapter"><?= get_post_meta($post->ID, 'list_1', true) ?></a></div>
                <div class="col-4" itemprop="lastChapter2"><a href="https://<?= get_post_meta($post->ID, 'url_list_2', true) ?>" class="text-dark" target="_blank" title="last chapter"><?= get_post_meta($post->ID, 'list_2', true) ?></a></div>
                <div class="col-4" itemprop="lastChapter3"><a href="https://<?= get_post_meta($post->ID, 'url_list_3', true) ?>" class="text-dark" target="_blank" title="last chapter"><?= get_post_meta($post->ID, 'list_3', true) ?></a></div>
            </div>
        </div>
    </div>
</div>