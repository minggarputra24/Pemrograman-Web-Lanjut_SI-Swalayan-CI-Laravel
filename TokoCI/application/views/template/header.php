<!doctype html>
<html lang="en">
  <head>

  <style>
  .badge{
    margin-left:3px;
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?= base_url(); ?>home"> Home <span class="sr-only">[current]</span></a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>dataUser">Data User</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>kasir">Kasir</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>barang">Data Barang</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>penjualan">Data Transaksi</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>about">about</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
    </div>
  </div>
  </div>
</nav>