<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:../index.php?pesan=gagal");
	}

	?>
<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Asset/css/base.css">
    <link rel="stylesheet" href="../Asset/css/mobile.css">
    <link rel="stylesheet" href="../Asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Aplikasi Sembako</title>
  </head>
  <body style="background:#f9f9f9;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">So-ping!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div> Hi! Admin </div>
            <div class="logout"><a href="../Auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></div>
          </form>
        </div>
      </nav>
      <header>
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills navigation-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="profile-user">
                  <div class="image-user">
                    <i class="fas fa-user"></i>
                  </div>
                  <p> <?php echo $_SESSION['nama'] ?></p>
                </div>
                <a class="nav-link active sidebar" href="#" role="tab" aria-selected="true"> <i class="fas fa-th-large"></i> Dashboard</a>
                <a class="nav-link sidebar" href="Barang.php" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="fas fa-box-open"></i> Barang</a>
                <a class="nav-link sidebar" href="transaksi.php"role="tab" aria-selected="false"><i class="fas fa-shopping-cart"></i> Transaksi</a>
                <a class="nav-link sidebar"href="pengguna.php"role="tab" aria-selected="false"><i class="fas fa-users"></i> Pengguna</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="container">
                    <section id="data-toko">
                      <div class="row">
                        <div class="col-4">
                          <div class="wrapper-card-dashbord" style="background:#E94B35">
                            <div class="row">
                              <div class="col-6">
                                <div class="avatar-wrapper-card-dashbord">
                                  <i class="fas fa-box-open"></i>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="data-wrapper-card-dashbord">
                                  <h4> Data<br>Barang </h4>
                                  <P> 16 item </P>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="wrapper-card-dashbord" style="background:#F3C501;">
                            <div class="row">
                              <div class="col-6">
                                <div class="avatar-wrapper-card-dashbord">
                                  <i class="fas fa-shopping-cart"></i>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="data-wrapper-card-dashbord">
                                  <h4> Data<br>Transaksi </h4>
                                  <P> 16 Kali </P>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="wrapper-card-dashbord"style="background:#19AF5D;">
                            <div class="row">
                              <div class="col-6">
                                <div class="avatar-wrapper-card-dashbord">
                                <i class="fas fa-shopping-basket"></i>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="data-wrapper-card-dashbord">
                                  <h4> Data</br>Pembelian </h4>
                                  <P> 16 item </P>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">                    <section class="data-table">
                  <section class="Data Tables">
                    <div class="container">
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Opsi</th>
                          </tr>
                         </thead>
                          <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                  <a href=""></a>
                                </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </section>
               </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
              </div>
            </div>
          </div>
      </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../Asset/js/bootstrap.min.js"></script>
  </body>
</html>
=======
<html>
<head>
	<title>ini admin</title>
</head>
<body>
	<marquee>ini admin</marquee>
	<h1>HAiii <?php echo $_SESSION['nama'] ?></h1>
	<a href="../User_Management/index.php">User Management</a><br>
	<a href="../Auth/logout.php">LOGOUT</a>
</body>
</html>
>>>>>>> af256953d0d30dfe88215dc170fb5a9d66f83425
