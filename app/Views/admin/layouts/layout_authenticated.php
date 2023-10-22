<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vertical Navbar - Mazer Admin Dashboard</title>

  <?= $this->include('admin/layouts/partial/style.php') ?>
</head>

<body>
  <script src="assets/static/js/initTheme.js"></script>
  <div id="app">
    <?= $this->include('admin/layouts/partial/sidebar.php') ?>
    <div id="main" class='layout-navbar navbar-fixed'>
      <?= $this->include('admin/layouts/partial/navbar.php') ?>
      <div id="main-content">

        <div class="page-heading">
          <?= $this->renderSection('content') ?>
        </div>

      </div>
      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2023 &copy; Mazer</p>
          </div>
          <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
              by <a href="https://saugi.me">Saugi</a></p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?= $this->include('admin/layouts/partial/script.php') ?>


</body>

</html>