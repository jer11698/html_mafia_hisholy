<?php require_once('config.php')?>
<?php include ROOT_PATH . '/includes/header.php'?>
<title>Document</title>
</head>
<body>
  <?php include ROOT_PATH . '/includes/navbar.php'?>
  
  <header>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header.png'?>" style="width:100%">
        <div class="dis">
          <h2>อยากรู้จักฉันให้มากกว่านี้ไหม?</h2>
          <h1>Mafia</h1>
        </div>
      </div>

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header1.png'?>" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header.png'?>" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="center" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
  </header>

  <main class="row manu">

    <div class="col-1 sol">
      <a href="<?php echo BASE_URL . 'history'?>">
        <img src="<?php echo BASE_URL . 'static/img/D6dh0azU0AMq995.jpg' ?>">
        <h2>ประวัติ</h2>
      </a>
    </div>

    <div class="col-1 sol">
      <a href="<?php echo BASE_URL . 'info-mafia'?>">
        <img src="<?php echo BASE_URL . 'static/img/2c4a32a5b1a0340f82ca95fb323f4cad.jpg' ?>">
        <h2>กลุ่มมาเฟีย</h2>
      </a>
    </div>

    <div class="col-1 sol">
      <a href="#3">
        <img src="<?php echo BASE_URL . 'static/img/190617-nadeau-our-godfather-hero_skgw7z.jpg' ?>">
        <h2>ข่าวสาร</h2>
      </a>

    </div>

  </main>

  <?php include ROOT_PATH . '/includes/script.php'?>
  <?php include ROOT_PATH . '/includes/footer.php'?>
