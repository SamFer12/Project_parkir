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
                    <a class="nav-link active" href="<?=base_url()?>index.php/Home" aria-current="page">Dashboard <span class="visually-hidden">(current)</span></a>
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
            <form class="d-flex my-2 my-lg-0" action="<?=base_url()?>index.php/DataCustomer" method="GET">
                <input class="form-control me-sm-2" type="text" placeholder="Search Data Customer" name="query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
  </header>
  <main class="container">
        <h3>Data Customer
            <div class="text-right" style="float: right"><button type="button" class="btn btn-primary" onclick="print()">Print</button></div>
        </h3>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Plat Nomor</th>
                        
                        <th scope="col">
                            <a name="" id="" class="btn btn-primary" href="<?=base_url()?>index.php/DataCustomer/tambah" role="button">Tambah data</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->db->get('member')->result() as $key => $value) {
                    ?>
                    <tr class="">
                        <td scope="row"><?=$value->id_member?></td>
                        <td><?=$value->no_pol?></td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="<?=base_url()?>index.php/DataCustomer/edit/<?=$value->id_member?>" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger" href="<?=base_url()?>index.php/DataCustomer/hapus/<?=$value->id_member?>" role="button">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?=base_url()?>assets/js/bootstrap.min.js">
  </script>
</body>

</html>