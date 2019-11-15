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
        <a href="<?php echo BASE_URL . 'admin/post'?>">Manage Posts</a>
      </div>
      <div class="content">
        <h2 class="page-title">Manage Posts</h2>
        <table>
          <thead>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
            <?php foreach ($posts as $key => $post) :?>
              <tr>
              <td><?php echo $key + 1 ?></td>
              <td><?php echo $post['title'] ?></td>
              <td>admin</td>
              <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
              <td><a href="index.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
              <?php if ($post['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'];?>" class="publish">unpublish</a></td>
              <?php else: ?>
                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'];?>" class="publish">publish</a></td>
              <?php endif; ?>
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
