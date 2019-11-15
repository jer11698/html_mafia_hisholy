<?php require_once('../../config.php');
include(ROOT_PATH . '/database/db.php');
?>
<?php include ROOT_PATH . '/includes/header.php'?>
  <link type="text/css" rel="stylesheet" href="<?php  echo BASE_URL . 'static/stylesheet/dashboard.css' ?>">
</head>

<body>
  <?php include(ROOT_PATH . '/includes/navbarboard.php') ?>
    <div class="content-dashboard" id="content-dashboard">
    <h1>Sorry.. Not available now.</h1>
      <!--<div class="buttom-group">
        <a href="<?php  echo BASE_URL . 'admin/users/create.php' ?>">Add User</a>
        <a href="<?php echo BASE_URL . 'admin/users/'?>">Manage Users</a>
      </div>
      <div class="content">
        <h2 class="page-title">Manage Users</h2>
        <table>
          <thead>
            <th>No</th>
            <th>User</th>
            <th>Role</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Poetry</td>
              <td>Admin</td>
              <td><a href="#" class="edit">edit</a></td>
              <td><a href="#" class="delete">delete</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Life Lesson</td>
              <td>Author</td>
              <td><a href="#" class="edit">edit</a></td>
              <td><a href="#" class="delete">delete</a></td>
            </tr>
          </tbody>
        </table>
      </div>-->
    </div>
  </div>
  <script>
  var navHeight = document.getElementById('nav').offsetHeight;
  //var sideWidth = document.getElementById('left-sidebar').offsetWidth;
  var wraper = document.getElementById('wraper');
  //var content = document.getElementById('content-dashboard');
  wraper.style.height = "calc(100% - " + navHeight + "px)";
  //content.style.Width = sideWidth + "px";
</script>
</body>
</html>
