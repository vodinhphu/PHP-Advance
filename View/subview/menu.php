<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        
        <?php
          if (isset($_SESSION['user_login']))
          {
            ?>
            <li><a href="">Hello: <?php echo $_SESSION['user_login']['name'] ?></a></li>
            <li><a href="index.php?controller=Login&action=index">LOGOUT </a></li>
            <?php
          }
          else
          {
            ?>
            <li><a href="index.php?controller=Login&action=index">LOGIN</a></li>
            <li><a href="#">SIGNUP</a></li>
            <?php
          }
        ?>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cart</button></li>
      </ul>
    </div>
  </div>
</nav> 