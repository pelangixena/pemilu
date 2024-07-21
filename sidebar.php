<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home' || $_GET['x'] == '') ? 'active link-light' : 'link-dark'; ?>"
                                aria-current="page" href="home">
                                <img src="gambar/beranda.jpg" class="card-img" alt="beranda"
                                    style="width: 32px; height: 32px;"> BERANDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'wilayah') ? 'active link-light' : 'link-dark'; ?>"
                                href="wilayah">
                                <img src="gambar/wilayah.jpg" class="card-img" alt="wilayah"
                                    style="width: 32px; height: 32px;"> WILAYAH
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'tps') ? 'active link-light' : 'link-dark'; ?>"
                                href="tps">
                                <img src="gambar/tps.jpg" class="card-img" alt="tps" style="width: 32px; height: 32px;">
                                TPS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pemilih') ? 'active link-light' : 'link-dark'; ?>"
                                href="pemilih">
                                <img src="gambar/pemilih.jpg" class="card-img" alt="pemilih"
                                    style="width: 32px; height: 32px;"> PEMILIH
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'kandidat') ? 'active link-light' : 'link-dark'; ?>"
                                href="kandidat">
                                <img src="gambar/kandidat.jpg" class="card-img" alt="kandidat"
                                    style="width: 32px; height: 32px;"> KANDIDAT
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'partai') ? 'active link-light' : 'link-dark'; ?>"
                                href="partai">
                                <img src="gambar/flag.jpg" class="card-img" alt="partai"
                                    style="width: 32px; height: 32px;"> PARTAI
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pemungutansuara') ? 'active link-light' : 'link-dark'; ?>"
                                href="pemungutansuara">
                                <img src="gambar/ikon.jpg" class="card-img" alt="pemungutan suara"
                                    style="width: 32px; height: 32px;"> PEMUNGUTAN SUARA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'hasilpemilu') ? 'active link-light' : 'link-dark'; ?>"
                                href="hasilpemilu">
                                <img src="gambar/grafik.jpg" class="card-img" alt="hasil pemilu"
                                    style="width: 32px; height: 32px;"> HASIL PEMILU
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>