<?php  
    $pageName = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">RYSA Enterprise</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $pageName == 'index.php' ? "active":null ?>" aria-current="page" href="./index.php?pageno=1">Home</a>
        </li>
        <?php if(!isset($_SESSION['uinfo'])){ ?>
        <li class="nav-item">
          <a class="nav-link <?= $pageName == 'login.php' ? "active":null ?>" href="./login.php">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $pageName == 'signup.php' ? "active":null ?>" href="./signup.php">Sign up</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Log Out</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>