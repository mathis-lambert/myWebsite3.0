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

<body id="top">
  <?php include 'assets/include/header.php'; ?>
  <div class="menu">
    <div class="menu__container">
      <div class="menu__container__item">
        <a href="index#top" class="menu__container__item__link">
          <svg viewBox="0 0 24 24" height="48" width="48" focusable="false" role="img" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke="#000" stroke-linejoin="round" stroke-width="2" d="m3 12 2-2m0 0 7-7 7 7M5 10v10a1 1 0 0 0 1 1h3m10-11 2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6"></path>
          </svg>
        </a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">
          <svg viewBox="0 0 16 16" height="48" width="48" focusable="false" role="img" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"></path>
            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"></path>
          </svg></a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">
          <svg viewBox="0 0 512 512" height="48" width="48" focusable="false" role="img" fill="black" xmlns="http://www.w3.org/2000/svg">
            <rect width="448" height="320" x="32" y="128" fill="none" stroke="black" stroke-linejoin="round" stroke-width="32" rx="48" ry="48"></rect>
            <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M144 128V96a32 32 0 0 1 32-32h160a32 32 0 0 1 32 32v32m112 112H32m288 0v24a8 8 0 0 1-8 8H200a8 8 0 0 1-8-8v-24"></path>
          </svg>
        </a>
      </div>
      <div class="menu__container__item">
        <a href="index.php" class="menu__container__item__link">
          <svg viewBox="0 0 24 24" height="48" width="48" focusable="false" role="img" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path>
          </svg></a>
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
            <p class="home-card-text">a creative Full-Stack developper based in france !</p>
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