<?php require_once('../config.php')?>
<?php include ROOT_PATH . '/includes/header.php'?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL . '/static/stylesheet/style-timeline.css' ?>">
<title>History</title>
</head>
<body>
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
        <h1>ประวัติมาเฟีย</h1>
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
  <?php include ROOT_PATH . '/includes/navbar.php'?>

  <div class="timeline-container" id="timeline-1">
    <div class="timeline-header">
      <h2 class="timeline-header__title">ต้นกำเนิดของมาเฟีย</h2>
      <h3 class="timeline-header__subtitle">เรียงตามลำดับเหตุการณ์</h3>
    </div>
    <div class="timeline">
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/4-lucky-luciano-slim-aarons.jpg" />
          <h2 class="timeline__content-title">1860</h2>
          <p class="timeline__content-desc">มาเฟียอิตาลีมีต้นกำเนิดมาจากเกาะเล็กๆ ของซิซิลี
            ฝูงชนถูกสร้างขึ้นเพื่อปกป้องผู้คนในซิซิลีจากผู้รุกรานจากต่างประเทศ
            และในยุค 1870 เจ้าหน้าที่โรมันขอให้พวกมาเฟียช่วยพวกเขาจับพวกอาชญากร
            มาเฟียเริ่มเติบโตและขยายตัวอย่างรวดเร็วไปยังส่วนต่างๆของโลกเช่นเดียวกับสหรัฐอเมริกาในช่วงต้นทศวรรษ 1900
          </p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://wearepalermo.com/wp-content/uploads/2016/01/joe-masseria-200x300.png" />
          <h2 class="timeline__content-title">1928</h2>
          <p class="timeline__content-desc">Joseph Masseria หรือ Joe the Boss ผู้ก่อตั้งกลุ่ม Genovese
            ซึ่งเป็นหนึ่งในห้าครอบครัว ของมาเฟียในนิวยอร์กตั้งแต่ปี 1922 ถึงปี 1931
            ได้เปิดตัวสงครามนองเลือดเพื่อควบคุมอาชญากรรมที่เกิดขึ้นทั่วประเทศ
            และสงครามนี้ในที่สุดก็กลายเป็นที่รู้จักในฐานะสงคราม Castellammarese
            ซึ่งสงครามประกอบด้วยหลายกลุ่มของมาเฟียอิตาลี</p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="http://tonsoffacts.com/wp-content/uploads/2019/01/lucky-luciano-mini-biography-1180x664.jpg" />
          <h2 class="timeline__content-title">1931</h2>
          <p class="timeline__content-desc">Charles “Lucky” Luciano ผู้ก่อตั้ง The Commission
            หรือสภาของมาเฟียอิตาเลียนซิซิเลียนของสหรัฐอเมริกา สังหาร Masseria เพื่อยุติสงครามม็อบ และ Salvatore Marazano
            ได้กลายมาเป็นผู้นำอันดับต้นๆ ในกลุ่มมาเฟีย เขาสร้างระบบอาชญากรรมองค์กรทั้งหมดในเมืองนิวยอร์ก ต่อมา Luciano
            ได้สังหาร Maranzano และกลายเป็นนักเลงที่มีอำนาจมากที่สุดในเมืองนิวยอร์ก
          </p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://www.retronews.fr/sites/default/files/file_covers/luckyluciano.jpg" />
          <h2 class="timeline__content-title">1936</h2>
          <p class="timeline__content-desc">Charles Luciano ถูกส่งตัวเข้าคุกด้วยจำนวน 62 คดีที่ได้รับคำสั่ง
            และหลังจากรับใช้โทษ 10 ปี จาก 30-50 ปี Luciano ถูกส่งตัวกลับไปที่ประเทศอิตาลีจากสหรัฐอเมริกา</p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://upload.wikimedia.org/wikipedia/commons/1/1a/CommissionChart1963.jpg" />
          <h2 class="timeline__content-title">1951</h2>
          <p class="timeline__content-desc">กลุ่ม Genovese กลายเป็นกลุ่มที่ทรงพลังที่สุดในสหรัฐอเมริกา
            กลุ่มนี้มีอิทธิพลในการค้ายาเสพติดการพนัน การกรรโชกทรัพย์ การปล่อยเงินกู้นอกระบบและงานอื่นๆ อีกมากมาย</p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://sm.askmen.com/askmen_me/articlepage/s/style-icon-bugsy-siegel/style-icon-bugsy-siegel_bacm.jpg" />
          <h2 class="timeline__content-title">1959</h2>
          <p class="timeline__content-desc">Vito Genovese ถูกจำคุกเป็นเวลา 15 ปีในข้อหาสมรู้ร่วมคิดด้านยาเสพติด
            แต่ไม่ว่าจะถูกจำคุก เขายังคงควบคุมกลุ่มของเขาจากห้องขังในแอตแลนตา</p>
        </div>
      </div>
      <div class="timeline-item" data-text="Sicily">
        <div class="timeline__content"><img class="timeline__img"
            src="https://idsb.tmgrup.com.tr/2015/11/23/HaberDetay/1448272553162.jpg" />
          <h2 class="timeline__content-title">1960</h2>
          <p class="timeline__content-desc">ในปี 1960 ผู้นำหลายคนของมาเฟียเริ่มถูกจับกุม มีการต่อต้านภายในกลุ่ม
            แม้ในทุกวันนี้จะยังมีมาเฟียยังอยู่ แต่ก็ไม่แรงเท่าในศตวรรษที่ 20
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="demo-footer"><a href="https://en.wikipedia.org/wiki/Mafia" target="_blank">Source</a></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

  <script src="<?php echo BASE_URL . '/static/script/js-timeline.js' ?>"></script>

  <?php include ROOT_PATH . '/includes/script.php'?>
  <?php include ROOT_PATH . '/includes/footer.php'?>
