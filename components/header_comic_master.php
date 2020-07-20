<table class="table borderless table-responsive-sm">
    <thead>
        <th colspan="3" class="text-left">Top 10</th>
        <th colspan="3" class="text-center">Latest Chapters</th>
    </thead>
    <tbody class="text-center">
        <?php $no = 0 ; $items = get_topComic(334,10);
        foreach ($items as $item) : 
        $post = get_post($item);
        ?>
        <tr>
            <td class="align-middle"><?= $no++ < 9 ? '0'.$no : $no ?></td>
            <td class="align-middle">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?= $url ?>" class="rounded shadow" style="max-height: 70px" alt="<?= $post->post_name.'.jpg'?>"/>
                <!-- <img class="rounded shadow" src="assets/img/comics.jpg" alt=""> -->
            </td>
            <td class="text-left align-middle">
                <p><a href="<?= $post->guid ?>" class="text-dark"><?= $post->post_title ?></a></p>
                <small>Latest Release <?= get_lastUpdate($post->ID) ?></small>
            </td>
            <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_1', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_1', true) ?></a></td>
            <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_2', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_2', true) ?></a></td>
            <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_3', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_3', true) ?></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>