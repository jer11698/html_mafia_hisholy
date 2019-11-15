<?php require_once('../../config.php');
include(ROOT_PATH . '/database/topics.php');
?>
<?php include ROOT_PATH . '/includes/header.php'?>
<title>Mafia Blog - Topics</title>
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
        <h2 class="page-title">Manage Topics</h2>
        <table>
          <thead>
            <th>No</th>
            <th>Name</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <?php foreach ($topics as $key => $topic):?>
            <tr>
              <td><?php echo $key + 1 ?></td>
              <td><?php echo $topic['name']; ?></td>
              <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
              <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
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
