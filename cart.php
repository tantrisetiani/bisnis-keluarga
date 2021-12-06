<?php
error_reporting(0);

include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnis Keluarga</title>
    <link rel="stylesheet" href="styleku.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse pl-5 " id="navbarText">
            <ul class="navbar-nav mr-auto ">
            
                <li class="nav-item">
                    <a class="nav-link text-light" href="mulai-beli.php">Mulai Beli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="hubungi.php">Hubungi Kami</a>
                </li>
                
            </ul>
            <span class="navbar-text">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">

                            <a class="nav-link text-light" href="prroduk.php">Produk <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link text-light" href="about2.php">Pentol Corah <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="index.php">Logout</a>
                        </li>

                        </li>
                    </ul>
            </span>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="foto_logo pl-5">
            <img src="BocilCuy.png" border="0" width="90px" height="90px" />
        </div>
        
            
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    --> 
    
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Keranjang</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Nama Produk</th>
						      <th>Harga</th>
					
						     
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
							  	if(isset($_GET['id'])){
								$id = $_GET['id'];
								
								$sql = "SELECT * FROM tb_product where product_id = '".$id."'";
								$kueri = mysqli_query($conn, $sql);
                                $query = mysqli_fetch_array($kueri);
                                
                                $gambar = $query['product_image'];
                                $nama = $query['product_name'];
                                $harga_produk = $query['product_price'];
                                $user = $_SESSION['id'];
                                $sql2 = "INSERT INTO tb_keranjang (idkeranjang, noproduct, namaproduct, gambar, harga, akun) VALUES ('".$id."', '".$gambar."', '".$harga_produk."', '".$user."')";
                                $kueri2 = mysqli_query($conn, $sql2);
                                $sql3 = "SELECT * FROM tb_keranjang WHERE akun = '".$user."'";
                                $kueri3 = mysqli_query($conn, $sql3);
								
								while($query3 = mysqli_fetch_array($kueri3)){
							?>
									<tr class="alert" role="alert">
										<td>
											<div class="img" style="background-image: url(<?php echo $query3['gambar'];?>);"></div>
										</td>
									<td>
										<div class="email">
											<span><?php echo $query3['namaproduct'];?></span>
										</div>
									</td>
									<td><?php echo $query3['harga'];?></td>
						
									
									<td>
                                        <form action="hapus_produk.php" method="post">
										    <button type="submit" name="hapus_produk" value="<?php echo $query3['idkeranjang']; ?>" class="close" data-dismiss="alert" aria-label="Close">
										    <span aria-hidden="true"><i class="fa fa-close"></i></span>
									        </button>
                                        </form>
									</td>
									</tr>

							<?php
                                        }
                                    }
                            else {
                                $user = $_SESSION['id'];
                                $sql3 = "SELECT * FROM Tb_keranjang WHERE akun = '".$user."'";
                                $kueri3 = mysqli_query($conn, $sql3);
								
								while($query3 = mysqli_fetch_array($kueri3)){
							?>
									<tr class="alert" role="alert">
										<td>
											<div class="img" style="background-image: url(<?php echo $query3['gambar'];?>);"></div>
										</td>
									<td>
										<div class="email">
											<span><?php echo $query3['namaproduct'];?></span>
										</div>
									</td>
									<td><?php echo $query3['harga'];?></td>
						
									
									<td>
                                        <form action="hapus_produk.php" method="post">
										    <button type="submit" name="hapus_produk" value="<?php echo $query3['idkeranjang']; ?>" class="close" data-dismiss="alert" aria-label="Close">
										    <span aria-hidden="true"><i class="fa fa-close"></i></span>
									        </button>
                                        </form>
									</td>
									</tr>
                                    <?php
                                    }
                                }
							?> 
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- footer-->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p>Jl.Budomanis 2 No.8, Madiun</p>
            <h4>Email</h4>
            <p>millenia1205@gmail.com</p>
            <h4>No Tlp</h4>
            <p>+62 896-0512-7205</p>
            <small>Copyright &copy; 2020- Bisnis Keluarga</small>
        </div>

    </div>
</body>

</html>