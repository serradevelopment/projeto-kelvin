<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width:850px;">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1">Registro de <b>Professor</b></a>
    </div>
    <div class="card-body">

      <form action="../../index.html" method="post">
        <div class="row email-and-password">
          <div class="input-group mb-3 col-lg-6">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3 col-lg-3">
            <input type="password" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3 col-lg-3">
            <input type="password" class="form-control" placeholder="Repetir Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row cargo-professor">
          <div class="input-group mb-3 col-8">
            <input type="text" class="form-control" placeholder="Nome Completo">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3 col-4">
            <input type="text" class="form-control" placeholder="Cargo">
          </div>
        </div>
        <div class="row address-estagiario">
          <div class="input-group mb-3 col-lg-8">
            <input type="text" class="form-control" placeholder="Endereço">
          </div>
          <div class="input-group mb-3 col-lg-4">
            <input type="text" class="form-control" placeholder="Bairro">
          </div>
          <div class="input-group mb-3 col-lg-4">
            <input type="text" class="form-control" placeholder="CEP">
          </div>
          <div class="input-group mb-3 col-lg-3">
            <input type="text" class="form-control" placeholder="Cidade">
          </div>
          <div class="input-group mb-3 col-lg-3">
            <input type="text" class="form-control" placeholder="Telefone">
          </div>
          <div class="input-group mb-3 col-lg-2">
            <input type="text" class="form-control" placeholder="UF">
          </div>
        </div>
        <div class="row">
          <div class="col-3">
          </div>
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <div class="col-3">
          </div>
        </div>
      </form>
      <a href="/login" class="text-center">Realizar Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
