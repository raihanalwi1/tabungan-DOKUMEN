<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basmal Kas</title>

    <!-- Bootstrap -->
    <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="plugins/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
    

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <!-- <h2 style="font-size: 25px; font-weight: 600;color: #26b99a;">SITASA</h2> -->
          <h2 style="font-size: 18px; font-weight: 200; color: #26b99a;">BASMAL KAS</h2>
            <form action="cek_login.php" method="post">
              <p>Masukkan Username dan Password</p>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="Masukkan Username" autocomplete="off" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="off" />
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-sm btn-block">Masuk</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
            

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Hanwiz © 2018</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>