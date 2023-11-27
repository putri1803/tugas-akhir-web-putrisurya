<?php
$page = "beranda";

include 'template/_header.php';

include 'template/_navbar.php';
?>

<main>
    <!-- Hero section -->
    <section id="heroSection" class="d-flex justify-content-center align-items-center w-100 bg-hero">
        <div class="container px-4 pb-4">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 order-items-1">
                    <div class="text-light mb-4">
                        <h1 class="fw-semibold">Selamat Datang di ResepKu</h1>
                        <h5 class="fw-medium">Menyediakan resep masakan dengan cita rasa dan bumbu yang khas</h5>
                    </div>

                    <a href="resep-data.php" class="btn btn-lg btn-light fw-medium mb-4">Lihat Resep</a>

                    <div class="d-flex gap-2">
                        <a href="https://twitter.com" class="btn btn-sm text-light border-0 fs-5"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://facebook.com" class="btn btn-sm text-light border-0 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" class="btn btn-sm text-light border-0 fs-5"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 order-items-2">
                    <img src="assets/img/recipe-book.svg" alt="ResepKu" class="h-100 w-100 img-section">
                </div>
            </div>
        </div>
    </section>
    <!-- End of hero section -->

    <!-- About section -->
    <section id="aboutSection">
        <div class="container px-4">
            <h2 class="fw-semibold text-center mb-4">Tentang Saya</h2>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="assets/img/putri.JPG" alt="Putri Surya" class="w-100 img-section img-about object-fit-cover rounded-custom shadow-sm">
                </div>
                <div class="col-md-8">
                    <h5 class="fw-medium mb-4">Hallo!!! Saya Purti Surya, menempuh pendidikan di Universitas Mataram</h5>

                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <tr>
                                <td>Fakultas</td>
                                <td>:</td>
                                <td>Keguruan dan Ilmu Pengetahuan</td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>:</td>
                                <td>Pendidikan Matematika</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td>:</td>
                                <td>5</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of about section -->

    <div class="container px-4">
        <div class="border border-primary-subtle"></div>
    </div>

    <!-- Contact section -->
    <section id="contactSection">
	<div class="container px-4">
		<h2 class="fw-semibold text-center mb-4">Kontak</h2>

		<div class="d-none d-md-block">
			<div class="row align-items-center">
				<div class="col-md-8 order-items-1">
					<div class="row">
						<div class="col-md-12 mb-4">
							<a class="btn btn-outline-primary w-100" href="https://goo.gl/maps/XALHknDNPxQA2QCdA?coh=178573&entry=tt" target="_blank">
								<div class="d-flex justify-content-center align-items-center">
									<i class="bi bi-geo-alt fs-3"></i>
									<span class="ms-2 d-none d-md-inline">Nusa Tenggara Barat</span>
								</div>
							</a>
						</div>
						<div class="col-md-12 mb-4">
							<a class="btn btn-outline-primary w-100" href="https://www.instagram.com/puttriiyyy_" target="_blank">
								<div class="d-flex justify-content-center align-items-center">
									<i class="bi bi-instagram fs-3"></i>
									<span class="ms-2 d-none d-md-inline">@puttriiyyy_</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 order-items-2">
					<img src="assets/img/contact-us.svg" alt="Kontak" class="w-100" height="300" />
				</div>
			</div>
		</div>
	</div>
</section>
    <!-- End of contact section -->
</main>

<!-- Footer -->
<footer class="text-bg-dark">
    <div class="container py-3 px-4">
        <div class="d-flex justify-content-between align-items-center fw-medium">
            &copy; <?= date('Y'); ?> Dibuat oleh Putri Surya
            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ke atas"><i class="bi bi-chevron-up"></i></a>
        </div>
    </div>
</footer>
<!-- End of footer -->

<?php include 'template/_footer.php'; ?>