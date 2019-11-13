<?php require_once('../config.php')?>
<?php include ROOT_PATH . '/includes/header.php'?>
<title>Document</title>
</head>
<body>
  <?php include ROOT_PATH . '/includes/navbar.php'?>
  <header>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header.png' ?>" style="width:100%; height: 50vh;">
      </div>

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header1.png' ?>" style="width:100%; height: 50vh;">
      </div>

      <div class="mySlides fade">
        <img src="<?php echo BASE_URL . 'static/img/Header.png' ?>" style="width:100%; height: 50vh;">
      </div>
      <div class="dis-blog">
        <h1>กลุ่มมาเฟีย</h1>
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
  <div class="container-blog">
    <div class="col-blog">
      <div>
        <h1>กลุ่มมาเฟียแต่ละกลุ่ม</h1>
      </div>
      <hr>
      <div>
        <div class="post">
          <img src="<?php echo BASE_URL . 'static/img/logo-almightn.jpg' ?>" class="post_image">
          <a href="#">
          <h3>Almighty Black P. Stone Nation</h3>
            <div>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor...</span>
            </div>
          </a>
        </div>
        <div class="post">
          <img src="<?php echo BASE_URL . 'static/img/logo-almightn.jpg' ?>" class="post_image">
          <a href="#">
            <h3>Almighty Black P. Stone Nation</h3>
            <div>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor...</span>
            </div>
          </a>
        </div>
        <div class="post">
          <img src="<?php echo BASE_URL . 'static/img/logo-almightn.jpg' ?>" class="post_image">
          <a href="#">
          <h3>Almighty Black P. Stone Nation</h3>
            <div>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor...</span>
            </div>
          </a>
        </div>
        <div class="post">
          <img src="<?php echo BASE_URL . 'static/img/logo-almightn.jpg' ?>" class="post_image">
          <a href="#">
          <h3>Almighty Black P. Stone Nation</h3>
            <div>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor...</span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-index">
      <div>
        <h1>หมวดหมู่</h1>
      </div>
      <hr>
      <ul>
        <li><a href="#">ทั้งหมด</a></li>
        <li><a href="#">อังกฤษ</a></li>
        <li><a href="#">อเมริกา</a></li>
        <li><a href="#">รัสเซีย</a></li>
        <li><a href="#">ญี่ปุ่น</a></li>
        <li><a href="#">จีน</a></li>
      </ul>
    </div>
  </div>
  <?php include ROOT_PATH . '/includes/script.php'?>
  <?php include ROOT_PATH . '/includes/footer.php'?>