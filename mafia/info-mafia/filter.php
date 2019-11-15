<?php require_once('../config.php');
include(ROOT_PATH . '/database/posts.php');
?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
    $posts = getPublishedPostsByTopic($topic_id);
    dd($posts);
	}
?>
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
  <h1>Sorry.. Not available now.</h1>
    <!--<div class="col-blog">
      <div>
        <h1>กลุ่มมาเฟียแต่ละกลุ่ม</h1>
      </div>
      <hr>
      <div>
        <?php foreach ($posts as $key => $post) :?>
          <div class="post">
          <img src="<?php echo BASE_URL . 'static/img/' . $post['image'] ?>" class="post_image">
          <a href="post.php?post-slug=<?php echo $post['slug']; ?>">
          <h3><?php echo $post['title'] ?></h3>
            <div>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor...</span>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-index">
      <div>
        <h1>หมวดหมู่</h1>
      </div>
      <hr>
      <ul>
        <li><a href="<?php echo BASE_URL . 'info-mafia' ?>">ทั้งหมด</a></li>
        <?php foreach ($topics as $key => $topic):?>
          <li><a href="<?php echo BASE_URL . 'info-mafia/filter.php?topic=' . $topic['id'] ?>"><?php echo $topic['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>-->
  </div>
  <?php include ROOT_PATH . '/includes/script.php'?>
  <?php include ROOT_PATH . '/includes/footer.php'?>