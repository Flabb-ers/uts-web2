<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/mahasiswa') !== false ? 'active' : '' ?>" href="<?= base_url('/mahasiswa') ?>">
              <i class="fa fa-user-graduate"></i> 
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/jurusan') !== false ? 'active' : '' ?>" href="<?= base_url('/jurusan') ?>">
              <i class="fa fa-building"></i> 
              Jurusan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/mata-kuliah')?>">
              <i class="fa fa-book"></i> 
              Mata Kuliah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/nilai')?>">
            <i class="fa-solid fa-chart-simple"></i>
              Nilai
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
