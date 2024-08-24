<div class="col-lg-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-3 border mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x']=='beranda') || !isset($_GET['x'])) ? 'active link-light': 'link-dark' ; ?> " aria-current="page" href="index.php?x=beranda"><i class="bi bi-house"></i> Dashbord</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='booking') ? 'active link-light': 'link-dark' ; ?> " href="booking"><i class="bi bi-cart4"></i> Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='room') ? 'active link-light': 'link-dark' ; ?> " href="room"><i class="bi bi-person-video3"></i> Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='tentang') ? 'active link-light': 'link-dark' ; ?> " href="tentang">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='kontak') ? 'active link-light': 'link-dark' ; ?> " href="kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
        </div>