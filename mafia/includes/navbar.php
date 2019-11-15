<nav id="nav">
  <label for="drop" class="toggle" align="center">Menu</label>
  <input type="checkbox" id="drop" />
  <ul class="menu">
    <?php if(isset($_SESSION['id'])): ?>
      <li class="dropbox">
        <a href="<?php echo BASE_URL . 'news'?>">
          <?php echo $_SESSION['username']; ?>
        </a>
        <ul class="dropdown-content">
          <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . 'admin/post'?>">Dashboard</a></li>
          <?php endif; ?>
          <li><a href="<?php echo BASE_URL . 'logout.php'?>" class="logout">Logout</a></li>
        </ul>
      </li>
    <?php else: ?>
      <li><a href="<?php echo BASE_URL . 'login.php'?>">Login</a></li>
    <?php endif; ?>
    <li><a href="<?php echo BASE_URL . 'member.html'?>">ผู้จัดทำ</a></li>
    <li><a href="<?php echo BASE_URL . 'info-mafia'?>">กลุ่มมาเฟีย</a></li>
    <li><a href="<?php echo BASE_URL . 'history'?>">ประวัติ</a></li>
    <li><a href="<?php echo BASE_URL?>">หน้าแรก</a></li>
  </ul>
</nav>
