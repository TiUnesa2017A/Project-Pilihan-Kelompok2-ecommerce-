<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		img{
			width: 250px;
			height: 250px;
			transform: translateX(160px);
		}
	</style>
	<title>Data Pembelian</title>
</head>
<body style="padding: 40px;background-color: #0552ad">
	<?php
			function rupiah($angka){
				$total = "Rp. " .number_format($angka,2,',','.');
				return $total;
			}

		$kode = $_POST["kode"];
		$nama_barang = $_POST["nama-barang"];
		$ukuran = substr($_POST["ukuran"], 2);
		$jumlah = $_POST["jumlah"];
		$harga = $_POST["harga"];
		$diskon = 0;
		$total = $jumlah * $harga;
		$mem = isset($_POST["member"]) ? true : false;

		if ($total>=1000000 && $total<1500000) {
			$diskon += 5;
		}
		elseif ($total>=1500000 && $total<3500000) {
			$diskon += 15;
		}
		elseif ($total>=3500000) {
			$diskon += 20;
		}

		if ($mem==true) {
			$diskon += 5;
		}

		$total *= ((100-$diskon)/100);

		$total = rupiah($total);
		$harga = rupiah($harga);

	?>
	<h1 style="color: #ffc300;">Data Pemesanan Barang</h1>
	<div class="row">
		<div class="card" style="width: 100%;padding: 30px;margin: 40px">
			<h4>Kode Barang: <?php echo " $kode "; ?> </h4>
			<h4>Nama Barang: <?php echo " $nama_barang "; ?> </h4>
			<?php
				switch ($kode) {
					case "0001":?>
						<img src="indonesia_home_2018.jpg">
					<?php
						break;
					case "0002":?>
						<img src="https://www.soccerlord.se/wp-content/uploads/2018/09/Wolverhampton-Wanderers-Home-Football-Shirt-18-19.jpg" alt="Wolverhampton Home 18-19">
					<?php
						break;
					case "0003":?>
						<img src="fcb-mashup.jpg" alt="Barcelona Mashup 20th Jersey">
					<?php
						break;
					case "0004":?>
						<img src="https://www.futbolemotion.com/imagesarticulos/128027/750/camiseta-nike-inter-milan-vapor-match-20th-aniversario-2018-2019-black-royal-blue-white-1.jpg">
					<?php
						break;
					case "0005":?>
						<img src="madrid-home-1819">
					<?php
						break;
					case "0006":?>
						<img src="https://store.juventus.com/data/store/product/2/26919/product.jpg">
					<?php
						break;
					case "0007":?>
						<img src="https://images-na.ssl-images-amazon.com/images/I/616KOBZWidL._UX385_.jpg">
					<?php
						break;
					case "0008":?>
						<img src="https://images-na.ssl-images-amazon.com/images/I/61UHxQiciML._SX425_.jpg">
					<?php
						break;
					case "0009":?>
						<img src="https://cdn1.uksoccershop.com/images/cache/1533315585-chelsea-home-goalkeeper-shirt-green-18-19-475x0.jpg">
					<?php
						break;
					case "0010":?>
						<img src="persebaya-home-2018.jpg">
					<?php
						break;
					case "0011":?>
						<img src="valencia-home-1819.jpg">
					<?php
						break;
					case "0012":?>
						<img src="https://i.ebayimg.com/images/g/y8wAAOSw9p9afSIP/s-l300.jpg">
					<?php
						break;
					case "0013":?>
						<img src="https://i.ebayimg.com/images/g/W~0AAOSwXitcJrK9/s-l300.jpg">
					<?php
						break;
					case "0014":?>
						<img src="https://clublinefootball.com/media/catalog/product/8/9/894512-010.jpg">
					<?php
						break;
					case "0015":?>
						<img src="https://www.lifestylesports.com/dw/image/v2/BCDN_PRD/on/demandware.static/-/Sites-LSS_eCommerce_Master/default/dw59c1c397/images/57656713xlarge.jpg?sw=530">
					<?php
						break;
					case "0016":?>
						<img src="https://teamsportshop24.de/media/image/product/78076/md/703447-02_puma-jersey-final-evoknit-703447-02_12.jpg">
					<?php
						break;
					case "0017":?>
						<img src="https://images-na.ssl-images-amazon.com/images/I/81XUcDm-luL._SL1500_.jpg">
					<?php
						break;
					case "0018":?>
						<img src="https://cdn3.volusion.com/goz35.avhz4/v/vspfiles/photos/TT-ADV13926-2.jpg?1456231556">
					<?php
						break;
					case "0019":?>
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5tUJGqV6WqOMlzozqe-YPQNJirgfZeLKtnMzjtmDgh2ygE6B5">
					<?php
						break;
					case "0020":?>
						<img src="https://media.e-subsidesports.com/sites/us/media/images/product/large/ACMHLS8486Gr8.gif">
					<?php
						break;
					case "0021":?>
						<img src="http://www.spieler-trikot.de/images/product_images/original_images/trikot045as082417as4kopie.jpg">
					<?php
						break;
				}
			?>
			<h4>Jumlah: <?php echo " $jumlah "; ?> </h4>
			<h4>Harga: <?php echo " $harga "; ?> </h4>
			<h4>Total: <?php echo " $total "; ?> </h4>
			<?php if($mem==true) { ?> <h4>Pembelian menggunakan member</h4> <?php } ?>
		</div>
	</div>
</body>
</html>