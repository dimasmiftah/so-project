<!doctype html>
<?php
session_start();
  if($_SESSION['role']!="admin"){
   
      //var_dump($_SESSION['role']);
      header("location:../index.php?pesan=admin");
   
    
    }
?>
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
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <div class="profile-user">
                <div class="image-user">
                  <i class="fas fa-user"></i>
                </div>
              <p> Nama Pengguna</p>
              </div>
              <a class="nav-link  sidebar" href="halaman_admin.php" role="tab" aria-selected="true"> <i class="fas fa-th-large"></i> Dashboard</a>
              <a class="nav-link active sidebar"  href="Barang.php" role="tab" aria-selected="false"> <i class="fas fa-box-open"></i> Barang</a>
              <a class="nav-link sidebar" href="transaksi.php"role="tab" aria-selected="false"><i class="fas fa-shopping-cart"></i> Transaksi</a>
              <a class="nav-link sidebar" href="pengguna.php"role="tab" aria-selected="false"><i class="fas fa-users"></i> Pengguna</a>
            </div>
          </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="container">
                    <section class="data-table">
                      <div class="container">
                        <div class="row">
                          <div class="col-4">
                            <h3 class="title-table"> Daftar Barang </h3>
                          </div>
                          <div class="col-5">
                            <form class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                          </div>
                          <div class="col-3">
                            <button class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#Tambah"aria-hidden="true" type="button"> Tambah Data Barang</button>
                            <div id="Tambah" class="modal fade"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nama Barang</label>
                                          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Stok</label>
                                          <input type="number" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Harga</label>
                                          <input type="number" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <table class="table">
                          <thead class=""style="background:#007BFF;color:#fff;">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Stok</th>
                              <th scope="col">Harga</th>
                              <th scope="col"><center>opsi</center></th>
                            </tr>
                           </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                  <td>
                                    <center>
                                       <button class="btn btn-primary"data-toggle="modal" data-target="#edit"aria-hidden="true" type="button"><i class="fas fa-pen"></i> </button>
                                       <button class="btn btn-primary"style="background:red;border:none;"> <i class="fas fa-trash"></i> </button>
                                      </a>
                                    </center>
                                   </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="edit" class="modal fade"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Nama Barang</label>
                                      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Stok</label>
                                      <input type="number" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Harga</label>
                                      <input type="number" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../Asset/js/bootstrap.min.js"></script>
  </body>
</html>
