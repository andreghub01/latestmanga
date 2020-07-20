<tr>
    <td class="align-middle">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <img src="<?= $url ?>" class="rounded shadow" style="max-height: 80px" alt="<?= $post->post_name.'.jpg'?>"/>
    </td>
    <td class="text-left align-middle" width="35%">
        <p><a href="<?= $post->guid ?>"><?= $post->post_title ?></a></p>
        <small>Latest Release <?= get_lastUpdate($post->ID) ?></small>
    </td>
    <td class="align-middle">
        <div class="d-inline rating" style="font-size: 16px;"><?= get_post_meta($post->ID, 'rating', true) ?></div>
        <div class="d-inline text-warning icon-star"><i class="fas fa-star"></i>&#10029;</div>
        <div class="d-inline" style="font-size: 16px;">Rating</div>
    </td>
    <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_1', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_1', true) ?></a></td>
    <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_2', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_2', true) ?></a></td>
    <td class="align-middle"><a href="https://<?= get_post_meta($post->ID, 'url_list_3', true) ?>" class="text-dark" target="_blank"><?= get_post_meta($post->ID, 'list_3', true) ?></a></td>
</tr>