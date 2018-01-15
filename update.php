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
    <title>Admin Page</title>
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
            border-right:2px solid;
            padding-right:65px;

        }

        .nav-right {
            margin-right: 10px;
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
            width: 340px;
        }



        .input-group {
            padding: 5px;
        }

        .button-form {
            width: 80px;
            height: 30px;
            cursor: pointer;
            border: 0;

        }

        .button-form:hover {
            background-color: rgb(55, 55, 146);
            color: white;
        }

        .button-reset:hover {
            background-color: rgb(55, 55, 146);
            color: white;
        }

        .button-input {
            margin-top: 10px;
            height: 30px;
            cursor: pointer;
            border: 0;
        }

        .button-reset {
            margin-left: 185px;
            width: 80px;
            height: 30px;
            cursor: pointer;
            border: 0;

        }

        .container {
            margin-left: 200px;
            height: auto;
            margin-top: 58px;
            padding: 10px;
            background-color: white;

        }

        .card {
            margin-top: -230px;
        }

        .card-content {
            border: 2px solid black;
            padding: 30px;
            height: 200px;

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
            <div class="nav-left">
                <a href="index.php?=index">
                    <h3>Admin Apps</h3>
                </a>
            </div>
            <div class="nav-right">
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
            <div class="side-menu">
            <a href="index.php?p=index">
                <h4 >Data Pegawai</h4>
            </a>
            </br>
            <a href="index.php?p=tambah">
                <h4>Tambah Karyawan</h4>
            </a>
            </div>
        </div>

        <div class="content">
            <div class="container animated rollIn">
                <h3>Pendaftaran Karyawan</h3>
                <hr>
                <br>
                <div class="form">
                    <table>
                        <tr>
                            <?php
                                $id = $_GET['id'];
                                $sql = mysqli_query($this->koneksi(),
                                    "SELECT * FROM tbl_karyawan WHERE id='$id'");

                                $row = mysqli_fetch_object($sql);
                            ?>
                            <form action="index.php?p=proses_ubah" method="post" id="form" enctype="multipart/form-data">
                                <td>
                                    <div class="card">
                                        <div class="card-content">
                                            <img id="output" src="<?php echo $row->img ?>" alt="! image" width="200" height="200">
                                        </div>
                                        <div class="card-actions">
                                            <input type="file" name="images" class="button-input" onchange="loadFile(event)">
                                        </div>
                                    </div>
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>
                                    <div class="input-group">
                                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                    </div>

                                    <div class="input-group">
                                        <label for="">Nik</label>
                                        <br/>
                                        <input class="input-form" type="text" name="nik" id="nik" value="<?php echo $row->nik ?>">
                                        <br/>
                                    </div>


                                    <div class="input-group">
                                        <label for="">Nama</label>
                                        <br/>
                                        <input class="input-form" type="text" name="nama" id="nama" value="<?php echo $row->nama ?>">
                                        <br/>
                                    </div>

                                    <div class="input-group">
                                        <label for="">Tempat Lahir</label>
                                        <br/>
                                        <input class="input-form" type="text" name="tempat" id="tempat" value="<?php echo $row->tmp_lahir ?>">
                                        <br/>
                                    
                                    </div>
                                    <div class="input-group">
                                        <label for="">Tanggal Lahir</label>
                                        <br/>
                                        <input class="input-form" type="date" data-date-format="DD MMMM YYYY" name="tanggal" id="tanggal" value="<?php echo $row->tgl_lahir ?>">
                                        <br/>
                                    </div>

                                    <div class="input-group">
                                        <label for="">Gender</label>
                                        <br/>       
                                        <input <?php if ($row->gender == "Laki" ) echo 'checked' ?> type="radio" name="jk" value="Laki" id="jk" > Laki-Laki
                                        <input <?php if ($row->gender == "Perempuan" ) echo 'checked' ?> id="jk" type="radio" name="jk" value="Perempuan"> Perempuan
                                        
                                    </div>

                                    <div class="input-group">
                                        <label for="">Alamat</label>
                                        <br/>
                                        <textarea name="alamat" rows="6" cols="40" id="alamat"><?php echo $row->alamat ?></textarea>
                                    </div>

                                    <div class="input-group">
                                        <label for="">Telephone</label>
                                        <br/>
                                        <input class="input-form" type="text" name="tlp" id="tlp" value="<?php echo $row->tlp ?>">
                                        <br/>
                                    </div>

                                    <div class="input-group">
                                        <label for="">Pendidikan Terakhir</label>
                                        <br/>
                                        <select name="pendidikan" id="pendidikan">
                                            <option value="">=== Pilih ===</option>
                                            <option <?php if ($row->pdd_terakhir == "SMA/SMK" ) echo 'selected' ?> value="SMA/SMK">SMA/SMK</option>
                                            <option <?php if ($row->pdd_terakhir == "S1" ) echo 'selected' ?> value="S1">S1</option>
                                            <option <?php if ($row->pdd_terakhir == "S2" ) echo 'selected' ?> value="S2">S2</option>
                                            <option <?php if ($row->pdd_terakhir == "S3" ) echo 'selected' ?> value="S3">S3</option>
                                        </select>
                                    </div>

                                    <div class="input-group">
                                        <label for="">Bidang</label>
                                        <br/>
                                        <input class="input-form" type="text" id="bidang" name="bidang" value="<?php echo $row->bidang ?>">
                                        <br/>
                                    </div>

                                    <button type="submit" class="button-form" name="submit">Simpan</button>
                                </td>
                            </form>
                         </tr>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</html>