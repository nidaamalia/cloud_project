<?php include 'route.php';?>

<?php 
$link = explode('/', $_SERVER['REQUEST_URI']);
$link = $link[2];
?>

<div class="navbar" style="background-color=white;">
    <a class="navbar-brand">MyApps</a>
    <div id="nav">        
        <?php if($link == "" || $link == "login.php") { ?>
        <a href="<?= $url; ?>"><button class="btn btn-outline-secondary btn-sm">Home</button></a>&nbsp;&nbsp;
        <a href="<?= $url; ?>register.php"><button class="btn btn-outline-secondary btn-sm">Register</button></a>
        <?php } else if($link == "register.php") { ?>
        <a href="<?= $url; ?>"><button class="btn btn-outline-secondary btn-sm">Home</button></a>&nbsp;&nbsp;
        <a href="<?= $url; ?>login.php"><button class="btn btn-outline-secondary btn-sm">Login</button></a>
        <?php } else { ?>
        <a href="#"><button class="btn btn-outline-secondary btn-sm">Account Setting</button></a>&nbsp;&nbsp;
        <a href="<?= $url; ?>"><button class="btn btn-outline-secondary btn-sm">Logout</button></a>
        <?php } ?>
    </div>
</div> 