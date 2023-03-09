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
   
  </header>

  <main>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #191970;">
        <a class="navbar-brand" href="#">PARKIR WK</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
      form{
        text-align:center;
      }
    </style>
              <form action="<?=base_url()?>index.php/Login/auto" method="post">
<input type="text" name="username" id="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="password" id="password"><br>
<input type="submit" value="Login">
</form>
                </div>
            </div>
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