<?php
/*
Template Name: Comic Request Page
*/
$title= "Comic Request Here!";
?>
<?php include_once(get_template_directory() . '/header.php'); ?>


<div class="container mt-5">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">Comic Title</label>
    <input type="text" class="form-control" id="" aria-describedby="comicHelp" placeholder="Enter comic">
  </div>
  <div class="form-group">
    <label for="">Type</label>
    <input type="text" class="form-control" id="" aria-describedby="typeHelp" placeholder="Enter type">
  </div>
  <div class="form-group">
    <label for="">Language</label>
    <input type="text" class="form-control" id="" aria-describedby="languageHelp" placeholder="Enter language">
  </div>
  <div class="form-group">
    <label for="">Genres</label>
    <input type="text" class="form-control" id="" aria-describedby="genresHelp" placeholder="Enter genres">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include_once(get_template_directory() . '/footer.php'); ?>
