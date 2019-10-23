<?php
	session_start();
  if(isset($_SESSION['loggedin'])){
    header('Location: main.html');
  }else{
  }

  ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  
</head>

<body class="login">
  
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="ingresar.php" method="post">
            <h1>Iniciar sesión</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" name="user" required />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" name="password" required />
            </div>
            <div>
              <input class="btn btn-default submit" type="submit" value="Iniciar sesión"></input>
              <a class="reset_pass">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">¿Nuevo en el sitio?
                <a href="#signup" class="to_register"> Crear una cuenta </a>
              </p>

              <div class="clearfix"></div>
              <br />
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form action="crearCuenta.php" method="post">
            <h1>Crear una cuenta</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" name="user" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required name="password" />
            </div>
            <div>
              <input class="btn btn-default submit" type="submit" value="Crear cuenta"></input>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">
                <a href="#signin" class="to_register"> Iniciar sesión </a>
              </p>

              <div class="clearfix"></div>
              <br />
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>