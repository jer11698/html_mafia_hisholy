<?php require_once('config.php')?>
<?php include(ROOT_PATH . '/database/users.php');?>
<?php include ROOT_PATH . '/includes/header.php'?>
<title>Document</title>
</head>
<body style="background: black;">
  <?php include ROOT_PATH . '/includes/navbar.php'?>
    <div class="content-login">
      <h1>Sorry.. Not available now.</h1>
      <!-- <form action="register.php" method="post">
        <h2>Register</h2>
        <?php include ROOT_PATH . '/database/helper/formError.php'?>
        <div>
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username ?>" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $email ?>" class="text-input">
        </div>
        <div>
          <label>Passwords</label>
          <input type="password" name="password" value="<?php echo $password ?>" class="text-input">
        </div>
        <div>
          <label>Passwords Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $passwordConf ?>" class="text-input">
        </div>
        <div>
          <button type="submit" name="register-btn">Register</button>
        </div>
        <p>Or<a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>
      </form>-->
    </div>

  <?php include ROOT_PATH . '/includes/script.php'?>
  <?php include ROOT_PATH . '/includes/footer.php'?>
