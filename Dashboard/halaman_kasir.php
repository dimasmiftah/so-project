<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']!="kasir"){
		header("location:../index.php?pesan=gagal");
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
    <title>So-ping</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">So-ping!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div> Hi! Kasir </div>
        <div class="logout"><a href="../Auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a><
          </form>
        </div>
      </nav>
      <section id="form-cashier">
        <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Nama Barang</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
                <div class="col-4">
                <button class="btn btn-outline-secondary btn-tambah-data-cashier" type="button" id="button-addon2"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                      <label for="exampleInputPassword1">id Barang</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
                <div class="col-4">
                <button class="btn btn-outline-secondary btn-tambah-data-cashier" type="button" id="button-addon2"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                      <label for="exampleInputPassword1"> Qty</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
                <div class="col-4">
                <button class="btn btn-outline-secondary btn-tambah-data-cashier" type="button" id="button-addon2"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <table class="table"style="margin-top:20px;">
          <thead class=""style="background:#007BFF;color:#fff;">
            <tr>
              <th scope="col">No.id Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Qty</th>
              <th scope="col">Harga</th>
              <th scope="col">Sub Total</th>
              <th scope="col"><center>opsi</center></th>
            </tr>
           </thead>
            <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Taro</td>
                  <td>2</td>
                  <td>5000</td>
                  <td>10.000</td>
                  <td>
                    <center>
                       <button class="btn btn-primary"data-toggle="modal" data-target="#edit"aria-hidden="true" type="button"><i class="fas fa-pen"></i> </button>
                       <button class="btn btn-primary"style="background:red;border:none;"> <i class="fas fa-trash"></i> </button>
                    </center>
                   </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Taro</td>
                  <td>2</td>
                  <td>5000</td>
                  <td>10.000</td>
                  <td>
                    <center>
                       <button class="btn btn-primary"data-toggle="modal" data-target="#edit"aria-hidden="true" type="button"><i class="fas fa-pen"></i> </button>
                       <button class="btn btn-primary"style="background:red;border:none;"> <i class="fas fa-trash"></i> </button>
                    </center>
                   </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Grand Total</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Bayar</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="wrapper-input-transaksi">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                      <label for="exampleInputPassword1"> Kembali</label>
                      <input type="text"class="form-control">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-simpan-data-kasir"style="margin:auto!important;">
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../Asset/js/bootstrap.min.js"></script>
  </body>
</html>
