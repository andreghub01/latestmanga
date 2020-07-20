<?php
 $post = $wp_query->post;
 $title = $post->post_title ." Details";
 
 ?>
<?php include_once(get_template_directory() . '/header.php'); ?>
<div class="jumbotron text-center bannerDetail" style="background-image: url('<?= home_url('/wp-content/uploads/2020/07/bannerDetail.jpg')?>');">
</div>
<!-- <?php include_once('components/jumbotron.php'); ?> -->


<div class="container card-content-detail" itemscope itemtype="<?= url_schema('ComicSeries')?>">
    <h1 class="titleDetail">Latest <?= $post->post_title.' '.get_firstCategoryName() ?> Release</h1>
    <div class="card mb-3 card-rounded">
        <div class="card-body">
            <p class="breadcrumb"><a href="<?= home_url() ?>">Home</a> &nbsp/&nbsp  <a href="<?= home_url('/top-genres?filter='.get_firstCategoryName()) ?>"><?= get_firstCategoryName() ?></a>  &nbsp/&nbsp  Read <?= $post->post_title.' '.get_firstCategoryName() ?></p>
            <div class="row">
                <div class="col-md-3 text-center">
                <?php the_post_thumbnail('medium',['class' => 'rounded shadow thumbnail-100%','style'=>'max-width:100%;height:auto;' ,'alt' => $post->post_title, 'itemprop' => "image"]); ?>
                    <div class="row mt-3 mb-3">
                        <div class="col-4 offset-1 text-right text-muted"><i class="fas fa-user-circle fa-3x"></i>
                        <svg class="" viewBox="0 0 20 20" style="width: 2em;height: 2em; stroke: black; margin: auto;">
							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
						</svg>
                        </div>
                        <div class="col-7 text-left"><?= get_post_meta($post->ID, 'author', true) ?>
                            <br>
                            <small>30 Manga</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <p itemprop="description" class="sipnosis"><b><?= $post->post_title ?></b>  is a <?= get_CountryCategory(get_firstCategoryName()) ?> Comic created by <?= get_post_meta($post->ID, 'author', true) ?> and was first published on Apr 25 2019. Make sure you are more than 17 years old before Read <?= $post->post_title ?> because it has <?= get_genres(get_post_meta($post->ID, 'genres', true)) ?> genres. <br>
                        <b> Synopsis <?= $post->post_title ?></b> <br>
                        <?= $post->post_content ?>.</p>
                        <h2 class="titleSearch">Read the latest <?= $post->post_title.' '.get_firstCategoryName() ?> Release</h2>
                        <p class="mt-3 mb-4">Last Update <?= get_post_meta($post->ID, 'last_update', true) ?></p>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="text-primary btnLastChapter elips text-center">
                                    <span class="mr-2">Chapter</span>
                                    <b class="mr-2" itemprop="lastChapter1"><a href="http://<?= get_post_meta($post->ID, 'url_list_1', true) ?>" target="_blank"><?= get_post_meta($post->ID, 'list_1', true) ?></a></b>
                                    <b class="mr-2" itemprop="lastChapter2"><a href="http://<?= get_post_meta($post->ID, 'url_list_2', true) ?>" target="_blank"><?= get_post_meta($post->ID, 'list_2', true) ?></a></b>
                                    <b itemprop="lastChapter3"><a href="http://<?= get_post_meta($post->ID, 'url_list_3', true) ?>" target="_blank"><?= get_post_meta($post->ID, 'list_3', true) ?></a></b>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 text-md-left text-center mt-1">
                                <div class="d-inline rating"><?= get_post_meta($post->ID, 'rating', true) ?></div>
                                <div class="d-inline text-warning icon-star"><i class="fas fa-star"></i>&#10029;</div>
                                <div class="d-inline">Rating</div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Tittle</div>
                                    <div class="col-8 text-primary" itemprop="title"><b><?= $post->post_title ?></b> </div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Alternative</div>
                                    <div class="col-8" itemprop="alternative"><?= get_post_meta($post->ID, 'alternative', true) ?></div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Type</div>
                                    <div class="col-8" itemprop="type"><?= get_firstCategoryName() ?></div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Author</div>
                                    <div class="col-8" itemprop="author"><?= get_post_meta($post->ID, 'author', true) ?></div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Language</div>
                                    <div class="col-8" itemprop="language"><?= get_post_meta($post->ID, 'language', true) ?></div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Status</div>
                                    <div class="col-8" itemprop="status"><?= get_post_meta($post->ID, 'status', true) ?></div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-detail mb-3">
                                <div class="row">
                                    <div class="col-4">Genres</div>
                                    <div class="col-8" itemprop="genres"><b><?= get_genres(get_post_meta($post->ID, 'genres', true)) ?></b> </div>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>