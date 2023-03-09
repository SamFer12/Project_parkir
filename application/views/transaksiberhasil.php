<!doctype html>
<html lang="en">

<head>
  <title>Parkir SWK</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark " style="background-color: #191970;">
        
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=base_url()?>index.php/home" aria-current="page">Dashboard <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataParkir">Data Parkir</a>
                </li>
                <?php if ($this->session->userdata("userdata")->role == "admin"){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataCustomer">Data Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataAdmin">Data Admin</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/Login">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>
  </header>
  <main class="container">
  <h4>PARKIR SEKOLAH PANGERAN WIJAYA KUSUMA</h4>
  <p>Jam Masuk = <?=$data->jam_masuk?></p>
  <p>Jam Keluar = <?=$data->jam_keluar?></p>
  <p>Uang Customer = <?=$uang_customer?></p>
  <p>Harga = <?=$harga?></p>
<p>Kembalian = <?=$total_harga?></p>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?=base_url()?>assets/js/bootstrap.min.js">
  </script>
</body>

</html>