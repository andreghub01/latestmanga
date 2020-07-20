<ul class="mt-3 list-group">
<?php if (!$genres):?>
    <li class="list-group-item"><a href="?genres=" class="mr-2 text-dark"><b>All</b></a></li>
<?php else: ?>
    <li class="list-group-item"><a href="?genres=" class="mr-2 text-dark">All</a></li>
<?php endif; ?>
<?php foreach ( $tags as $tag ) : ?>
    <?php if (strtolower($tag->slug) == $genres):?>
        <li class="list-group-item"><a href="?genres=<?= $tag->slug ?>" class="text-dark"><b><?= $tag->name ?></b></a></li>
    <?php else: ?>
        <li class="list-group-item"><a href="?genres=<?= $tag->slug ?>" class="text-dark"><?= $tag->name ?></a></li>
    <?php endif; ?>
<?php endforeach ;?>
</ul>