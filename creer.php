<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/global.css" rel="stylesheet">
  <link href="css/dynamic_content.css" rel="stylesheet">
  <link href="css/creer.css" rel="stylesheet">

  <script src="js/navbar.js"></script>
</head>

<body>
  <nav-bar></nav-bar>
  <main id="main-content">
    <article class="recap">
      <h1 class="title">Vous pouvez ajouter<span>une question</span> à un parcours</h1>
      <div class="cartes-terminee">Choissisez un parcours</div>
    </article>
    <section class="cards">
        <div class="container" style="background-image: url('assets/img/doggos/asie.jpg');">
            <div class="bg-text">Les pays d'asie</div>
            <div class="middle">
              <div class="text"> <a href="#" class="button focus-grow">Ajouter</a></div>
            </div>
        </div>
        <div class="container" style="background-image: url('assets/img/doggos/arc-de-triomphe.jpg');">
            <div class="bg-text">Les monuments de France</div>
            <div class="middle">
              <div class="text"> <a href="#" class="button focus-grow">Ajouter</a></div>
            </div>
        </div>
        <div class="container" style="background-image: url('assets/img/doggos/afrique.jpg');">
            <div class="bg-text">Les Pays d'affrique</div>
            <div class="middle">
              <div class="text"> <a href="#" class="button focus-grow">Ajouter</a></div>
            </div>
        </div>
        <div class="container" style="background-image: url('assets/img/tmp-logo.png');">
            <div class="bg-text">Creer un nouveau parcours</div>
            <div class="middle">
              <div class="text"> <a href="#" class="button focus-grow">Nouveau</a></div>
            </div>
        </div>

    </section>
  </main>
</body>

</html>