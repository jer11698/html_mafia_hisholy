<?php require_once('../../config.php');
include(ROOT_PATH . '/database/posts.php');
?>
<?php include ROOT_PATH . '/includes/header.php'?>
  <link type="text/css" rel="stylesheet" href="<?php  echo BASE_URL . 'static/stylesheet/dashboard.css' ?>">
</head>

<body>
  <?php include(ROOT_PATH . '/includes/navbarboard.php') ?>
    <div class="content-dashboard" id="content-dashboard">
      <div class="buttom-group">
        <a href="<?php  echo BASE_URL . 'admin/post/create.php' ?>">Add Post</a>
        <a href="<?php echo BASE_URL . 'admin'?>">Manage Posts</a>
      </div>
      <div class="content">
        <h2 class="page-title">Manage Posts</h2>
        <?php include ROOT_PATH . '/database/helper/formError.php'?>
        <form action="create.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $title; ?>" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Body</label>
            <textarea name="body" id="editor"><?php echo $body; ?></textarea>
          </div>
          <div>
            <label>Topic</label>
            <select name="topic_id" class="text-input">
              <option value=""></option>
              <?php foreach ($topics as $key => $topic) :?>
                <?php if(!empty($topic_id) && $topic_id == $topic['id']) :?>
                  <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                <?php else: ?>
                  <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <label>Image</label>
            <input type="file" class="text-input" accept="image/*" name="image">
          </div> 
          <div>
            <label>
            <?php if($published): ?>
              <input checked type="checkbox" name="published">
              Publish
            <?php else: ?>
              <input type="checkbox" name="published">
              Publish
            <?php endif; ?>
            </label>
          </div>         
          <div>
            <button type="submit" name="add-post">Add Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<script src="<?php echo BASE_URL . 'static/script/config-ckeditor.js'?>"></script>
<script>
  var navHeight = document.getElementById('nav').offsetHeight;
  //var sideWidth = document.getElementById('left-sidebar').offsetWidth;
  var wraper = document.getElementById('wraper');
  //var content = document.getElementById('content-dashboard');
  wraper.style.height = "calc(100% - " + navHeight + "px)";
  //content.style.Width = sideWidth + "px";
</script>

</html>