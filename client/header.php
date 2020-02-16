<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="author" content="Muhammad Rizky Aly" />
  <meta name="description" content="Various HTML and JavaScript projects." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <?php 
  include ("../assets/linkCss.php");
  ?>
</head>
<body>
  <nav class="bg-dark navbar navbar-dark navbar-expand-lg" >
    <img id="img" src="../assets/img/logo.jpg"  class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#">Lab Bahasa Pemrograman</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><b>Home </b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><b>Informasi</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>Tutorial</b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Tutorial HTML</a>
            <a class="dropdown-item" href="#">Tutorial CSS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
          </div>
        </li>
      </ul>
      <a href="#" class="btn btn-primary" style="margin-left: 10px" id="btn">Join Now</a>
    </div>
  </nav>