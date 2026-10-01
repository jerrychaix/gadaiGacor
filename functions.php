<?php
    function connect() {
        $conn = mysqli_connect('localhost', 'root', '', 'gacor_db');
        if($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            return null;
        } else {
            return $conn;
        }
    }
    
    function cek_data_post($dat) {
        if(isset($_POST[$dat])) {
            return $_POST[$dat];
        } else {
            return 0;
        }
    }

    function cek_data_get($dat) {
        if(isset($_GET[$dat])) {
            return $_GET[$dat];
        } else {
            return 0;
        }
    }

    function register($nama, $email, $username, $password, $alert, $location) {
        $conn = connect();
        $query = "INSERT INTO pengguna (nama, email, username, password, role) VALUES ('$nama', '$email', '$username', '$password', 'user')";
        mysqli_query($conn, $query);
        ?>
        <script>
            alert("<?= $alert ?>");
            window.location.href = "<?= $location ?>";
        </script>
        <?php
    }

    function login($user, $pass) {
        session_start();
        $conn = connect();
        $q_u = "SELECT * FROM pengguna WHERE username = '$user'";
        $qu = mysqli_query($conn, $q_u);

        if (mysqli_num_rows($qu) < 1) {
            header('Location: login.php?status=no_akun');
            exit();
        } else {
            $dat = mysqli_query($conn, "SELECT * FROM pengguna");
            foreach($dat as $i) {
                if ($i['username'] == $user && $i['password'] == $pass) {
                    $_SESSION['sesi'] = $i["id"];
                    $_SESSION['role'] = $i["role"];
                    
                    if($i['role'] == "admin") {
                        header("Location: admin/index.php");
                        exit();
                    } else {
                        header("Location: user/index.php");
                        exit();
                    }
                }
            }
            header('Location: login.php?status=salah');
            exit();
        }
    }

    function tambah_gadai($user_id, $nama_barang, $estimasi, $layanan) {
        $conn = connect();
        $q = "INSERT INTO transaksi_gadai (user_id, nama_barang, estimasi_nilai, layanan_unik, status_gadai) VALUES ('$user_id', '$nama_barang', '$estimasi', '$layanan', 'Pending')";
        mysqli_query($conn, $q);
    }
?>