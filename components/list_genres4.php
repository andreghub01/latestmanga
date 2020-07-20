<?php
$tags = get_tags(array(
    'hide_empty' => false
));
$filter_shorting = false;
if (isset($_GET['filter'])) {
    if ($_GET['filter']) {
        $filter_shorting = "&filter=".$_GET['filter'];
    }
}
?>

<div id="genres" class="row mt-3 f-12" style="line-height: 23px;" itemscope itemtype="<?=url_schema('Genres')?>">
    <div class="col-6">
        <a href="" title="Latest">Latest</a>
    </div>
    <div class="col-6">
        <?php if (!$genres):?>
            <a href="<?=home_url('/top-genres?genres='.$filter_shorting)?>" class="active" title="All">All</a>
        <?php else: ?>
            <a href="<?=home_url('/top-genres?genres='.$filter_shorting)?>" class="text-dark" title="All">All</a>
        <?php endif; ?>
    </div>
    <?php foreach ( $tags as $tag ) : ?>
        <div class="col-6" itemprop="genresName">
            <?php if ($tag->slug == $genres):?>
                <a href="<?=home_url('/top-genres?genres='.$tag->slug.$filter_shorting)?>" class="active" title="<?= $tag->name ?>"><?= $tag->name ?></a>
            <?php else: ?>
                <a href="<?=home_url('/top-genres?genres='.$tag->slug.$filter_shorting)?>" class="text-dark" title="<?= $tag->name ?>"><?= $tag->name ?></a>
            <?php endif; ?>
        </div>
    <?php endforeach ;?>
</div>