<?php
$genres_shorting = false;
if (isset($_GET['genres'])) {
    if ($_GET['genres']) {
        $genres_shorting = "&genres=".$_GET['genres'];
    }
}
?>
<h5 class="d-inline"><b><?= $header_comic ?></b></h5>
<p class="d-inline float-right f-12 mb-3">Filter by : 
    <a href="?filter=<?=$genres_shorting?>" class="<?= $filter == false ? false : 'text-dark';?>">All</a> &nbsp/&nbsp 
    <a href="?filter=manga<?=$genres_shorting?>" class="<?= $filter == "manga"? false : 'text-dark';?>">Manga</a> &nbsp/&nbsp 
    <a href="?filter=manhua<?=$genres_shorting?>" class="<?= $filter == "manhua"? false : 'text-dark';?>">Manhua</a> &nbsp/&nbsp 
    <a href="?filter=manhwa<?=$genres_shorting?>" class="<?= $filter == "manhwa"? false : 'text-dark';?>">Manhwa</a></p>
<hr class="mt-3"/>