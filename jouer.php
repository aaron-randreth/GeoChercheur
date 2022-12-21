<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/global.css" rel="stylesheet">
  <link href="css/dynamic_content.css" rel="stylesheet">
  <link href="css/jouer.css" rel="stylesheet">

  <script src="js/navbar.js"></script>
  <script src="js/dynamic_content.js"></script>
</head>

<body>
  <nav-bar></nav-bar>
  <main id="main-content">
    <article class="recap">
      <h1 class="title">allons à la recherche<span>de l'aventure</span></h1>
      <div class="cartes-terminee">Vous n'avez finit aucune carte</div>
    </article>
    <section id="dynamic-section" class="section-parcours searchable-section">
    </section>
  </main>
</body>

</html>