<header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img
                  src="./assets/images/logosmk3.png"
                  style="margin-top: 19px"
                  alt=""
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="ppdb.php">PPDB</a></li>
                <li>
                  <?php 
                    if (isset($_SESSION["calon_siswa"]) || isset($_SESSION["admin"])) {
                  ?>
                    <a href="logout.php">Logout</a></li>
                  <?php 
                    } else {
                  ?>
                    <a href="login.php">Login</a></li>
                  <?php } ?>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>