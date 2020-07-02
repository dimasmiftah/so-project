<!DOCTYPE html>
<html>
<head>
    <title>List Data User</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../Asset/SweetAlert/sweetalert2.min.css">
 

</head>
<body>
<h1>List Data User</h1>
<table id="tabel-data" class="table  table-bordered table-striped" >
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Roles</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include '../Auth/koneksi.php';
        $user = mysqli_query($koneksi,"select * from user");
        $i=1;
        while($row = mysqli_fetch_array($user))
        {

            echo "<tr>
            <td>".$i."</td>
            <td>".$row['nama']."</td>
            <td>".$row['username']."</td>
            <td>".$row['role']."</td>
            <td><button type='button' class='btn btn-primary' onclick='belumBisa()'><i class='material-icons'>edit</i></button><button type='button' class='btn btn-danger' onclick='belumBisa()'><i class='material-icons'>delete</i></button></td>
        </tr>";
        $i++;
        }
    ?>
    </tbody>

    

</table>
</body>
<script type="text/javascript" src="../Asset/SweetAlert/sweetalert2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
        
    });
    function belumBisa() {
        Swal.fire(
          'Warning!',
          'belum bisa',
          'warning'
        )
    }
</script>
</html>