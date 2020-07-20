<?php
/*
Template Name: Top Page
*/
$page = $wp_query->post;
$tags = get_tags();
$genres = isset($_GET['genres']) && $_GET['genres'] ? $_GET['genres'] : false;

$title = "Top Comics";
?>

<?php include_once(get_template_directory() . '/header.php'); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID), 'thumbnail' ); ?>
<div class="jumbotron text-center bannerHome" style="background-image: url('<?= $url ?>');">
  <h1 class="display-4 font-weight-bold"><?= $page->post_title ?></h1>
  <p><?= $page->post_content ?></p>
</div>

<div class="container">
    <div class="card card-content mb-3 card-rounded">
        <div class="card-body">
            <div class="row konten p-30">
                <div class="col-md-9">
                    <div class="top">
                        <table class="table table-responsive-sm">
                            <thead>
                                <th colspan="3" class="text-left">TOP 10 MANGA</th>
                                <th colspan="3" class="text-center">Latest Chapters</th>
                            </thead>
                            <tbody class="text-center">
                                <?php $items = get_topComic(335,10);
                                foreach ($items as $item) : 
                                $post = get_post($item);
                                ?>
                                    <?php include('components/top_comics.php') ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="mt-5">
                        <table class="table table-responsive-sm">
                            <thead>
                                <th colspan="3" class="text-left">TOP 10 MANHUA</th>
                                <th colspan="3" class="text-center">Latest Chapters</th>
                            </thead>
                            <tbody class="text-center">
                            <?php $items = get_topComic(336,10);
                            foreach ($items as $item) : 
                            $post = get_post($item);
                            ?>
                                 <?php include('components/top_comics.php') ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        </div>


                        <div class="mt-5">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <th colspan="3" class="text-left">TOP 10 MANHWA</th>
                                    <th colspan="3" class="text-center">Latest Chapters</th>
                                </thead>
                                <tbody class="text-center">
                                <?php $items = get_topComic(335,10);
                                foreach ($items as $item) : 
                                $post = get_post($item);
                                ?>
                                    <?php include('components/top_comics.php') ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="activity listGenres">
                        <h5 class="d-inline f-16"><b>Genres</b></h5>
                        <a href="" class="d-inline float-right f-12">View All</a>
                        <?php include_once('components/list_genres3.php') ?>
                        <?php include_once('components/list_genres2.php') ?>
                    </div>
                    <?php include_once('components/activity.php') ?>
                    <div class="mt-5">
                        <?php include_once('components/latest_discussions.php') ?>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>
