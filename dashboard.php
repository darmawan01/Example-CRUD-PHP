<?php
session_start();

if(empty($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin 1.0</title>
	<link rel="stylesheet" type="text/css" href="asset/animate.css">
    <style>
        * {
            margin: 0;
        }

        body {
            background-color: #BDBDBD;
            font-family: 'Times New Roman', Times, serif;
        }

        .wrapper {
            width: auto;
            margin: auto;
        }

        .nav {
            position: fixed;
            background-color: #26A69A;
            width: 1330px;
            padding: 18px;
        }

        .sidebar {
            float: left;
            background: black;
            color: white;
            margin-left: 0px;
            width: 200px;
            height: 593px;
            position: fixed;
            margin-top: 60px;
        }

        .nav-left {
            margin-left: 10px;
            float: left;
            padding-right:65px;
            border-right:2px solid;

        }

        .nav-right {
            margin-right: 5px;
            float: right;

        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: #26A69A;
        }
        .active {
            color: #26A69A;
        }

        .side-menu h4 {
            text-decoration: none;
            margin-left: 5px;
        }

        .content {
            padding: 10px;

        }

        .input-form {
            height: 20px;
            width: 300px;
        }

        .input-group {
            padding: 5px;
        }

        .button-form {
            height: 25px;
        }

        .button-reset {
            margin-left: 196px;
            height: 25px;

        }

        .container {
            margin-left: 200px;
            height: auto;
            margin-top: 58px;
            padding: 10px;
            background-color: white;

        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 13px;
            text-align:center;
        }

        .side-header {
            /* padding: 25px; */
            margin-top:30px;
            margin-bottom:40px;
            margin-left:15px;    
            
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-left animated fadeInLeft">
                <a href="index.php?p=index">
                    <h3>Admin Apps</h3>
                </a>
            </div>
            <div class="nav-right animated fadeInRight">
                <a href="index.php?p=logout">
                    Logout
                </a>
            </div>
        </nav>

        <div class="sidebar">
            <div class="side-header">
                <img src="<?php echo $_SESSION['img'] ?>" alt="img!" style="float:left" width="50" height="50" class="animated flipInY">
                <h4 style="margin-left:60px;" class="animated flipInY"><?php echo $_SESSION['username'] ?></h4>
                <p style="margin-left:62px; font-size:13px;" class="animated flipInY"><?php echo $_SESSION['level'] ?></p>
            </div>
            <hr/>
            <hr/>
            <br/>
            <div class="side-menu animated flipInX">
                <a href="index.php?p=index">
                    <h4 class="active">Data Pegawai</h4>
                </a>
                </br>
                <a href="index.php?p=tambah">
                    <h4>Tambah Karyawan</h4>
                </a>
            </div>
        </div>

        <div class="content">
            <div class="container animated rollIn">
                <h3>Data Karyawan</h3>
                <hr>
                <br>
                <div class="form">
                    <table border="2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>Telephone</th>
                                <th>Pendidikan Terkhir</th>
                                <th>Bidang</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            while ($row = mysqli_fetch_object($sql)) {
                        ?>
                    
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $row->nik ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->tmp_lahir ?></td>
                                <td><?php echo $row->tgl_lahir ?></td>
                                <td><?php echo $row->gender ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->tlp ?></td>
                                <td><?php echo $row->pdd_terakhir ?></td>
                                <td><?php echo $row->bidang ?></td>
                                <td class="actions">
                                    <a href="index.php?p=ubah&id=<?php echo $row->id;?>" style="color:black;">
                                        Ubah
                                    </a>|   
                                    <a href="index.php?p=hapus&id=<?php echo $row->id;?>" style="color:black;">
                                       Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }	
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr>
            </div>
        </div>
    </div>

</body>

</html>