<!-- <div id="genres" class="p-4">
    <b class="mr-2">Genres</b>
    <?php if (!$genres):?>
        <a href="?genres=" class="mr-2 active">All</a>
    <?php else: ?>
        <a href="?genres=" class="mr-2 text-dark">All</a>
    <?php endif; ?>
    <?php foreach ( $tags as $tag ) : ?>
        <?php if (strtolower($tag->slug) == $genres):?>
            <a href="?genres=<?= $tag->slug ?>" class="mr-2 active pr-3"><?= $tag->name ?></a>
            <?php else: ?>
            <a href="?genres=<?= $tag->slug ?>" class="mr-2 text-dark pr-3"><?= $tag->name ?></a>
        <?php endif; ?>
    <?php endforeach ;?>
</div> -->

<div id="genres" class="p-4 text-justify" itemscope itemtype="<?=url_schema('Genres')?>">
    <b class="mr-2">Genres</b>
    <a href="<?= home_url('/top-genres')?>" class="mr-2 active">All</a>
    <?php foreach ( $tags as $tag ) : ?>
        <a href="<?= home_url('/top-genres?genres='.$tag->slug)?>" class="mr-2 text-dark pr-3"><span itemprop="genresName"><?= $tag->name ?></span></a>
    <?php endforeach ;?>
</div>