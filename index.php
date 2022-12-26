<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    require_once("view/ViewIndex.php");
    include("header.php");
    include('admin/db_connect.php');
    $controller = "";
    $model = "";
    $view = new ViewIndex($controller, $model);
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    foreach ($query as $key => $value) {
      if (!is_numeric($key))
        $_SESSION['setting_' . $key] = $value;
    }
    ?>
<body id="page-top">
  <?php echo $view->output(); 
   echo $view->modal();?>
  <?php if (isset($_SESSION['login_user_id'])): ?>
  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin/ajax.php?action=logout2"><?php echo "Welcome " . $_SESSION['login_first_name'] . ' ' . $_SESSION['login_last_name'] ?> <i class="fa fa-power-off"></i></a></li>
  <?php else: ?>
  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
  <?php endif; ?>
  </ul>
  <?php
        $page = isset($_GET['page']) ? $_GET['page'] : "home";
        include $page . '.php';
 
        ?>
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">follow for more</div>
    </div>
  </footer>
  <style>
  header.masthead {
    background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    
  }
</style>

  <?php include('footer.php') ?>
</body>

<?php $conn->close() ?>

</html>