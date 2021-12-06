<?php
session_start();
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnis Keluarga</title>
    <link rel="stylesheet" type="text/css" href="styleku.css">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">BocilCuy</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['admin_global']->admin_name ?></h4>
                <br>
                <img src="BocilCuy.png" width="320" height="300"/>

                <div class="kolom">
                    <p class="deskripsi">#BISNIS KELUARGA </p>
                    <h2>Penjualan Pentol Online</h2>
                    <p>Indonesia sejak dulu dikenal sebagai salah satu negara dengan beragam kulinernya. Untuk camilan dan jajanan, Indonesia juga punya memiliki beragam jajanan. Bicara mengenai jajanan khas Indonesia, kita semua tentu sudah tak asing lagi dengan cimol, cilok dan pentol. Rasanya yang gurih dipadukan dengan saus sambal, saus kacang atau saus tomat yang lezat, menjadikan jajanan ini sulit buat ditolak kelezatannya.</p>
                    <br>

                    <p>Menurut Wikipedia, Pentol (Bakso tusuk) adalah sebutan untuk jajanan tradisional serupa seperti bakso namun kandungan dagingnya lebih sedikit, terkadang pentol hanya terbuat dari tepung kanji. Pentol banyak digemari masyarakat semua usia dan semua kalangan karena harganya yang relatif murah dan rasanya yang enak</p>
                    <br>
                    <p>Pentol adalah jajanan yang berasal dari Jawa Timur. Pentol terbuat dari tepung kanji dengan sedikit tambahan daging sapi dan daun bawang juga daun seledri. Pentol dimasak dengan cara dibentuk bulat-bulat kemudian direbus pakai air mendidih hingga mengapung seperti pembuatan bakso</p>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <small>Copyright &copy; 2021 - Penthol Corah </small>
            </div>
        </footer>
</body>

</html>