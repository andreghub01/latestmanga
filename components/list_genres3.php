<div id="genres" class="mt-3">
    <?php if (!$genres):?>
        <a href="?genres=" class="mr-1 active f-14">All</a>
    <?php else: ?>
        <a href="?genres=" class="mr-1 text-dark f-14">All</a>
    <?php endif; ?>
    <?php foreach ( $tags as $tag ) : ?>
        <?php if (strtolower($tag->slug) == $genres):?>
            <a href="?genres=<?= $tag->slug ?>" class="mr-1 active f-14"><?= $tag->name ?></a>
            <?php else: ?>
            <a href="?genres=<?= $tag->slug ?>" class="mr-1 text-dark f-14"><?= $tag->name ?></a>
        <?php endif; ?>
    <?php endforeach ;?>
</div>