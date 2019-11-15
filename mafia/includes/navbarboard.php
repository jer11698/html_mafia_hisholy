<nav id="nav" style="background : black;">
    <label for="drop" class="toggle" align="center">Menu</label>
    <input type="checkbox" id="drop" />
    <ul class="menu">
      <li class="dropbox">
        <a href="#">
          admin
        </a>
        <ul class="dropdown-content">
          <li><a href="<?php echo BASE_URL ?>">Back</a></li>
          <li><a href="<?php echo BASE_URL . 'logout.php'?>" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div class="wraper-dashboard" id="wraper">
    <div class="left-sidebar" id="left-sidebar">
      <ul>
        <li><a href="<?php echo BASE_URL . 'admin/post'?>">Manager Posts</a></li>
        <li><a href="<?php echo BASE_URL . 'admin/users'?>">Manager Users</a></li>
        <li><a href="<?php echo BASE_URL . 'admin/topics'?>">Manager Topics</a></li>
      </ul>
    </div>