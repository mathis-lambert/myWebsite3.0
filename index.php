<?php
//nocache
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <title>Portfolio | Mathis Lambert</title>

  <!-- import css -->
  <link rel="stylesheet" href="assets/style/style.css" />

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
</head>

<body>
  <?php include 'assets/include/header.php'; ?>
  <div class="menu">
    <div class="menu__container">
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">O</a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">O</a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">O</a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">O</a>
      </div>
    </div>
  </div>
  <div class="panel-container">
    <div class="home-card panel">
      <div class="home-card-content">
        <div class="home-card-container">
          <div class="top">
            <img src="./assets/img/png/memoji.png" alt="Memoji of me !">
          </div>
          <div class="bottom">
            <h1 class="home-card-title">Hi ! I'M MATHIS</h1>
            <p class="home-card-text">a creative web developper based in france !</p>
            <a href="assets/pdf/cv.pdf" class="home-card-button" download="cv-mathis-lambert">Télécharger mon CV</a>
            <br>
            <a href="#">more of my works</a>
          </div>
        </div>
      </div>
    </div>
    <div class="home-content">
      <div class="home-content-text">
        <h1 class="home-content-title">MORE ABOUT ME</h1>
        <p class="home-content-subtitle">I’m Mathis Lambert, a junior front-end developper but i also like back-end :)Based in the south of france i’m studying in IUT MMI (Toulon, 83) .</p>
      </div>
    </div>
  </div>
  <!-- Javascript import files -->
  <script src="./assets/app/app.js"></script>
</body>

</html>