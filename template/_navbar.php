<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="beranda.php">
            <img src="assets/img/recipe-book.svg" alt="ResepKu" width="28" height="28" class="d-inline-block align-text-top">
            ResepKu
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-medium <?= ($page == "beranda") ? 'active' : ''; ?>" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?= ($page == "resep") ? 'active' : ''; ?>" href="resep-data.php">Resep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?= ($page == "pengunjung") ? 'active' : ''; ?>" href="pengunjung-data.php">Pengunjung</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End of navbar -->