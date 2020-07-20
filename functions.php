<?php
add_theme_support( 'post-thumbnails' );

// ambil top comic
function get_topComic($id_post,$limit = 10)
{
    $a = [];
    for ($i=1; $i <= $limit; $i++) { 
        array_push($a, (int)get_post_meta($id_post, 'rank_'.$i, true));
    }
    return $a;
}

// ambil chapter terakhir
function get_lastChapter($id){
    return '
        <div itemprop="headline" class="d-inline"><a href="http://'.get_post_meta($id, 'url_list_1', true) .'" target="_blank" class="text-warning">'.get_post_meta($id, 'list_1', true) .'</a></div>
        <div itemprop="headline" class="d-inline"><a href="http://'.get_post_meta($id, 'url_list_2', true) .'" target="_blank" class="text-warning">'.get_post_meta($id, 'list_2', true) .'</a></div>
        <div itemprop="headline" class="d-inline"><a href="http://'.get_post_meta($id, 'url_list_3', true) .'" target="_blank" class="text-warning">'.get_post_meta($id, 'list_3', true) .'</a></div>
    ';
}


// ambil rating comic
function get_rating($id){
    return '
        <div itemprop="contentRating" class="d-inline rating">'. get_post_meta($id, 'rating', true) .'</div>
        <div class="d-inline text-warning icon-star"><i class="fas fa-star"></i>&#10029;</div>
        <div class="d-inline">Rating</div>
    ';
}

// Tanggal terakhir rilis
function get_lastUpdate($id){
    return get_post_meta($id,'last_update',true);
}

function get_genres($str)
{
    $str = preg_replace('/(?<!\d),|,(?!\d{3})/', ', ', $str);
    return $str;
}

function get_firstCategoryName()
{
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    return $firstCategory;
}

// jenis manga

function get_CountryCategory($str)
{
    $str = strtolower($str);
    if ($str == "manga") {
        $str = "Japanese";
    } elseif ($str == "manhua") {
        $str = "Chinese";
    } elseif ($str == "manhwa") {
        $str = "Korean";
    }
    return $str;
}

function search_icon()
{
    return '
    <svg class="svg-icon" viewBox="0 0 20 20">
							<path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
						</svg>';
}

function url_schema($str)
{
    return "https://schema.org/".$str;
}

function slice_title($str)
{
    $jumlah_karakter = strlen($str);
    if ($jumlah_karakter > 16) {
        $str = substr($str,0,15);
        $str .= "...";
    }
    return $str;
}