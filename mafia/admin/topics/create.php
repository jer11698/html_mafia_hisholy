<?php require_once('../../config.php');
include(ROOT_PATH . '/database/topics.php');
?>
<?php include ROOT_PATH . '/includes/header.php'?>
<title>Mafia Blog - Create Topic</title>
  <link type="text/css" rel="stylesheet" href="<?php  echo BASE_URL . 'static/stylesheet/dashboard.css' ?>">
</head>

<body>
  <?php include(ROOT_PATH . '/includes/navbarboard.php') ?>
    <div class="content-dashboard" id="content-dashboard">
      <div class="buttom-group">
        <a href="<?php  echo BASE_URL . 'admin/topics/create.php' ?>">Add Topic</a>
        <a href="<?php echo BASE_URL . 'admin/topics/'?>">Manage Topics</a>
      </div>
      <div class="content">
        <h2 class="page-title">Create Topics</h2>
        <?php include ROOT_PATH . '/database/helper/formError.php'?>
        <form action="create.php" method="POST">
          <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Description</label>
            <textarea name="description" id="editor"><?php echo $description; ?></textarea>
          </div>
          <div>
            <button type="sumbit" name="add-topic">Add Topic</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<script src="<?php echo BASE_URL . 'static/script/config-ckeditor.js'?>"></script>
</body>
<script>
  var navHeight = document.getElementById('nav').offsetHeight;
  //var sideWidth = document.getElementById('left-sidebar').offsetWidth;
  var wraper = document.getElementById('wraper');
  //var content = document.getElementById('content-dashboard');
  wraper.style.height = "calc(100% - " + navHeight + "px)";
  //content.style.Width = sideWidth + "px";
</script>

</html>