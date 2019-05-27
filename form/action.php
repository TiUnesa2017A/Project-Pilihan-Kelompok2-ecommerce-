<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Pemesanan Produk</title>
</head>
<body style="padding: 40px;background-color: #0552ad">
	<?php
		

		$nama_barang = $_POST["nama-barang"];

		switch ($nama_barang) {
			case "Jersey Indonesia Home 2018":
				$kode = "0001";
				$harga = 450000;
				break;
			
			case "Jersey Wolverhampton Home 2018-2019":
				$kode = "0002";
				$harga = 600000;
				break;

			case "Jersey Barcelona Mashup 20th Anniversary":
				$kode = "0003";
				$harga = 900000;
				break;

			case "Jersey Inter Milan Mashup 20th Anniversary":
				$kode = "0004";
				$harga = 900000;
				break;

			case "Jersey Real Madrid Home 2018-2019":
				$kode = "0005";
				$harga = 750000;
				break;

			case "Jersey Juventus Home 2018-2019":
				$kode = "0006";
				$harga = 750000;
				break;

			case "Jersey Juventus Away 2018-2019":
				$kode = "0007";
				$harga = 750000;
				break;

			case "Jersey Manchester City Home 2018-2019":
				$kode = "0008";
				$harga = 725000;
				break;

			case "Jersey Chelsea Kiper 2018-2019":
				$kode = "0009";
				$harga = 700000;
				break;

			case "Jersey Persebaya Home 2018":
				$kode = "0010";
				$harga = 210000;
				break;

			case "Jersey Valencia Home 2018-2019":
				$kode = "0011";
				$harga = 700000;
				break;

			//plain
			case "Jersey Adidas AdiPro 18 Black/Red":
				$kode = "0012";
				$harga = 690000;
				break;

			case "Jersey Adidas AdiPro 18 Orange":
				$kode = "0013";
				$harga = 690000;
				break;

			case "Jersey Nike Gardien Goalkeeper Black":
				$kode = "0014";
				$harga = 600000;
				break;

			case "Jersey Training Nike AeroSwift Strike Blue":
				$kode = "0015";
				$harga = 700000;
				break;

			case "Jersey Puma Final evoKNnit Blue":
				$kode = "0016";
				$harga = 715000;
				break;

			case "Jersey Joma Grada Yellow":
				$kode = "0017";
				$harga = 550000;
				break;

			//old
			case "Jersey Chelsea Home 2011-2012":
				$kode = "0018";
				$harga = 580000;
				break;

			case "Jersey Germany Home 1990":
				$kode = "0019";
				$harga = 800000;
				break;

			case "Jersey AC Milan Home 1984-1986":
				$kode = "0020";
				$harga = 830000;
				break;

			case "Jersey Borussia Dortmund Home 1999-2000":
				$kode = "0021";
				$harga = 870000;
				break;
		}


	?>
	<h1 style="color: #ffc300;">Form Pengisian Data Barang</h1>
	<form action="summary.php" method="post">
		<div class="form-group">
			<label for="kode" style="color: #fff">Kode barang:</label>
			<div class="input-group mb-3">
				<?php echo '<input type="text" class="form-control" id="kode" name="kode" value="'.$kode.'" readonly>' ; ?>
			</div>
		</div>

		<div class="form-group">
			<label for="nama-barang" style="color: #fff">Nama barang:</label>
			<div class="input-group mb-3">
				<?php echo '<input type="text" class="form-control" id="nama-barang" name="nama-barang" value="'.$nama_barang.'" readonly>' ; ?>
			</div>
		</div>

		<div class="form-group">
			<label for="jenis" style="color: #fff">Ukuran:</label>
			<div class="input-group mb-3">
				<select class="form-control" id="ukuran" name="ukuran" required>
					<option disabled selected value> -- pilih ukuran -- </option>
	    			<option>1. S</option>
	    			<option>2. M</option>
	    			<option>3. L</option>
    			</select>
			</div>
		</div>

		<div class="form-group">
			<label for="jumlah" style="color: #fff">Jumlah:</label>
			<div class="input-group mb-3">
				<input type="number" min="1" class="form-control" id="jumlah" name="jumlah" required="number">
			</div>
		</div>

		<div class="form-group">
			<label for="harga" style="color: #fff">Harga barang:</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1" style="background-color: #ffc300;color: #034694">Rp.</span>
				</div>
					<?php echo'<input type="number" min="0" step="1" class="form-control" id="harga" name="harga" value="'.$harga.'" readonly>' ; ?>
			</div>
		</div>

		<div class="form-group">
			<div class="input-group mb-3">
				<label style="color: #fff;"><input type="checkbox" name="member" value=true style="width: 30px;">Member</label>
			</div>
		</div>

		<button type="reset" class="btn btn-primary" style="background-color: #fff;color: #034694">Reset</button>
		
		<button type="submit" class="btn btn-primary" style="background-color: #ffc300;color: #034694">Submit</button>
	</form>
</body>
</html>