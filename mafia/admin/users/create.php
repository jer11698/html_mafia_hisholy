<?php require_once('../../config.php');
include(ROOT_PATH . '/database/db.php');
?>
<?php include ROOT_PATH . '/includes/header.php'?>
  <link type="text/css" rel="stylesheet" href="<?php  echo BASE_URL . 'static/stylesheet/dashboard.css' ?>">
</head>

<body>
  <?php include(ROOT_PATH . '/includes/navbarboard.php') ?>
    <div class="content-dashboard" id="content-dashboard">
      <div class="buttom-group">
        <a href="<?php  echo BASE_URL . 'admin/topics/create.php' ?>">Add User</a>
        <a href="<?php echo BASE_URL . 'admin/topics/'?>">Manage Users</a>
      </div>
      <div class="content">
        <h2 class="page-title">Manage Users</h2>
        <form action="create.html" method="POST">
          <div>
            <label>Username</label>
            <input type="text" name="username" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Email</label>
            <input type="text" name="email" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Password</label>
            <input type="password" name="password" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Password Confirmation</label>
            <input type="password" name="passwordConf" class="text-input" autocomplete="off">
          </div>
          <div>
            <label>Role</label>
            <select name="topics" class="text-input">
              <option value="Author">Author</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <div>
            <button>Add User</button>
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