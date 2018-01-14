<?php

class karyawan{
	function koneksi(){
		$host = "localhost";
		$username = "root";
		$password = "parkour88";
		$database = "karyawan";
		return mysqli_connect($host, $username, $password, $database);
    }
    
    function login(){
        session_start();
        if(isset($_POST['btnLogin'])){
            $user = $_POST['username'];
            $pass = sha1(trim($_POST['password']));
           
            $query = "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'";
            $result = mysqli_query($this->koneksi(),$query);
            $count = mysqli_num_rows($result);
            
            if ($count == 1){
                $data = mysqli_fetch_object($result);  
                $_SESSION['username'] = $data->username;
                $_SESSION['level'] = $data->level;
                $_SESSION['img'] = $data->img;
                header('location:index.php');
            }else{
                header('location:login.php');
            }
            
                     
        }
    }

    function logout(){
        session_start();
        session_unset();
        header('location:login.php');
    }

    function index() {
        session_start();
        if (isset($_POST['submit'])) {
            if($_POST['submit'] == "tambah"){
                $this->proses_tambah();
            }else if($_POST['submit'] == "update"){
                $this->update_data();
            }
        }

        $sql = mysqli_query($this->koneksi(), "SELECT * FROM tbl_karyawan");
        include 'dashboard.php';
    
    }

    function tambah(){
        include 'tambah.php';
    }

    function proses_tambah(){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tmp_lahir = $_POST['tempat'];
        $tgl_lahir = $_POST['tanggal'];
        $gender = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];
        $pdd = $_POST['pendidikan'];
        $bidang = $_POST['bidang'];

        // $file_dir = "image/";
        // $file_name = $_FILES['images']['name'];
        // $file_tmp = $_FILES['images']['tmp_name'];

        // if(isset($file_name)){
        //     if(empty($file_name)){
        //         echo "Foto Wajib Ada";
        //     }else{
        //         if (move_uploaded_file($file_tmp, $file_dir.$file_name)){
        //             echo "Success";
        //         }else{
        //             echo "Failed";
                    

        //         }
        //     }
        // }
  
        $sql = mysqli_query($this->koneksi(), 
                "INSERT INTO tbl_karyawan VALUES 
                    (NULL, '$nik', '$nama', '$tmp_lahir', '$tgl_lahir', '$gender', '$alamat', '$tlp', '$pdd', '$bidang', NULL)
                "                    
			);

		if ($sql) { 
			header("location:index.php");
		}else{
            echo "Data gagal Tambah".mysqli_error($sql);
        }

    }
    
    function ubah(){
        include 'update.php';
    }
    
    function proses_ubah(){
        $id = $_POST['id'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tmp_lahir = $_POST['tempat'];
        $tgl_lahir = $_POST['tanggal'];
        $gender = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];
        $pdd = $_POST['pendidikan'];
        $bidang = $_POST['bidang'];

        // $file_dir = "image/";
        // $file_name = $_FILES['images']['name'];
        // $file_tmp = $_FILES['images']['tmp_name'];

        // if(isset($file_name)){
        //     if(empty($file_name)){
        //         echo "Foto Wajib Ada";
        //     }else{
        //         if (move_uploaded_file($file_tmp, $file_dir.$file_name)){
        //             echo "Success";
        //         }else{
        //             echo "Failed";
                    

        //         }
        //     }
        // }
  
        $sql = mysqli_query($this->koneksi(), 
				"UPDATE tbl_karyawan SET    
                    nik = '$nik',
                    nama = '$nama',
                    tmp_lahir = '$tmp_lahir',
                    tgl_lahir = '$tgl_lahir',
                    gender = '$gender',
                    alamat = '$alamat',
                    tlp = '$tlp',
                    pdd_terakhir = '$pdd',
                    bidang = '$bidang',
                    image = ''
                    WHERE id='$id'"
			);

		if ($sql) { 
			header("location:index.php");
		}else{
            echo "Data gagal Ubah".mysqli_error($sql);
        }
    }

    function delete(){
        include 'hapus.php';
    }

   
        
}

$page = isset($_GET['p']) ? $_GET['p'] : "index";

$data = new Karyawan();
$data->{$page}();

?>
