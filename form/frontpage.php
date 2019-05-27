
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>KitStore Front Page</title>
	<style>
		.card{
			width:250px;
			margin: 10px;
		}

		.img-btn{
			width: 190px;
			height: 190px;
		}

	</style>
</head>
<body style="background-color: #0552ad">
	<h1 style="text-align: center;font-size: 40px;margin: 10px;color: #ffc300;">Daftar Barang</h1>
	<form action="action.php" method="post">
		<div class="row" style="margin-top: 10px;justify-content: center;">
			<h3 style="text-align: center;color: #fff">Terbaru</h3>
		</div>
		<div class="row" style="margin: 10px;justify-content: center;">
			<?php
				for ($i=0; $i < 11; $i++) { 
			?>
				<div class="card">
					<?php switch ($i) {
						case 0:?>
							<button class="btn" name="nama-barang" value="Jersey Indonesia Home 2018">
								<img class="img-btn" src="indonesia_home_2018.jpg">
								<h4 class="card-title">Indonesia Home Jersey 2018</h4>
							</button>
					<?php break;
						case 1:?>
							<button class="btn" name="nama-barang" value="Jersey Wolverhampton Home 2018-2019">
								<img class="img-btn" src="https://www.soccerlord.se/wp-content/uploads/2018/09/Wolverhampton-Wanderers-Home-Football-Shirt-18-19.jpg" alt="Wolverhampton Home 18-19">
								<h4 class="card-title">Wolverhampton Home Jersey 2018-2019</h4>
							</button>
					<?php break;
						case 2: ?>
							<button class="btn" name="nama-barang" value="Jersey Barcelona Mashup 20th Anniversary">
								<img class="img-btn" src="fcb-mashup.jpg" alt="Barcelona Mashup 20th Jersey">
								<h4 class="card-title">Barcelona Mashup 20th Anniversary Jersey</h4>
							</button>
					<?php break;
						case 3: ?>
							<button class="btn" name="nama-barang" value="Jersey Inter Milan Mashup 20th Anniversary">
								<img class="img-btn" src="https://www.futbolemotion.com/imagesarticulos/128027/750/camiseta-nike-inter-milan-vapor-match-20th-aniversario-2018-2019-black-royal-blue-white-1.jpg">
								<h4 class="card-title">Inter Milan Mashup 20th Anniversary Jersey</h4>
							</button>
	
					<?php break;
						case 4: ?>
							<button class="btn" name="nama-barang" value="Jersey Real Madrid Home 2018-2019">
								<img class="img-btn" src="madrid-home-1819.jpg">
								<h4 class="card-title">Real Madrid Home Jersey 2018-2019</h4>
							</button>

					<?php break;	
						case 5: ?>
							<button class="btn" name="nama-barang" value="Jersey Juventus Home 2018-2019">
								<img class="img-btn" src="https://store.juventus.com/data/store/product/2/26919/product.jpg">
								<h4 class="card-title">Juventus Home Jersey 2018-2019</h4>
							</button>

					<?php break;
						case 6: ?>
							<button class="btn" name="nama-barang" value="Jersey Juventus Away 2018-2019">
								<img class="img-btn" src="https://images-na.ssl-images-amazon.com/images/I/616KOBZWidL._UX385_.jpg">
								<h4 class="card-title">Juventus Away Jersey 2018-2019</h4>
							</button>

					<?php break;	
						case 7: ?>
							<button class="btn" name="nama-barang" value="Jersey Manchester City Home 2018-2019">
								<img class="img-btn" src="https://images-na.ssl-images-amazon.com/images/I/61UHxQiciML._SX425_.jpg">
								<h4 class="card-title">Manchester City Home Jersey 2018-2019</h4>
							</button>

					<?php break;
						case 8: ?>
							<button class="btn" name="nama-barang" value="Jersey Chelsea Kiper 2018-2019">
								<img class="img-btn" src="https://cdn1.uksoccershop.com/images/cache/1533315585-chelsea-home-goalkeeper-shirt-green-18-19-475x0.jpg">
								<h4 class="card-title">Chelsea Goalkeeper Jersey 2018-2019</h4>
							</button>

					<?php break;	
						case 9: ?>
							<button class="btn" name="nama-barang" value="Jersey Persebaya Home 2018">
								<img class="img-btn" src="persebaya-home-2018.jpg">
								<h4 class="card-title">Persebaya Home Jersey 2018</h4>
							</button>

					<?php break;	
						case 10: ?>
							<button class="btn" name="nama-barang" value="Jersey Valencia Home 2018-2019">
								<img class="img-btn" src="valencia-home-1819.jpg">
								<h4 class="card-title">Valencia Home Jersey 2018-2019</h4>
							</button>
					
					<?php break;  
						} ?>
				</div>
			<?php	}?>
		</div>

		<div class="row" style="margin-top: 10px;justify-content: center;">
			<h3 style="text-align: center;color: #fff">Jersey Plain</h3>
		</div>
		<div class="row" style="margin: 10px;justify-content: center;">
			<?php
				for ($i=0; $i < 6; $i++) { 
			?>
				<div class="card">
					<?php switch ($i) {
						case 0:?>
							<button class="btn" name="nama-barang" value="Jersey Adidas AdiPro 18 Black/Red">
								<img class="img-btn" src="https://i.ebayimg.com/images/g/y8wAAOSw9p9afSIP/s-l300.jpg">
								<h4 class="card-title">Adidas AdiPro 18 Goalkeeper Jersey Black/Red</h4>
							</button>
					<?php break;
						case 1:?>
							<button class="btn" name="nama-barang" value="Jersey Adidas AdiPro 18 Orange">
								<img class="img-btn" src="https://i.ebayimg.com/images/g/W~0AAOSwXitcJrK9/s-l300.jpg">
								<h4 class="card-title">Adidas AdiPro 18 Goalkeeper Jersey Orange</h4>
							</button>
					<?php break;
						case 2: ?>
							<button class="btn" name="nama-barang" value="Jersey Nike Gardien Goalkeeper Black">
								<img class="img-btn" src="https://clublinefootball.com/media/catalog/product/8/9/894512-010.jpg">
								<h4 class="card-title">Nike Gardien Goalkeeper Jersey Black</h4>
							</button>
					<?php break;
						case 3: ?>
							<button class="btn" name="nama-barang" value="Jersey Training Nike AeroSwift Strike Blue">
								<img class="img-btn" src="https://www.lifestylesports.com/dw/image/v2/BCDN_PRD/on/demandware.static/-/Sites-LSS_eCommerce_Master/default/dw59c1c397/images/57656713xlarge.jpg?sw=530" style="width: 73%">
								<h4 class="card-title">Nike AeroSwift Strike Top Training Blue</h4>
							</button>
	
					<?php break;
						case 4: ?>
							<button class="btn" name="nama-barang" value="Jersey Puma Final evoKNnit Blue">
								<img class="img-btn" src="https://teamsportshop24.de/media/image/product/78076/md/703447-02_puma-jersey-final-evoknit-703447-02_12.jpg">
								<h4 class="card-title">Puma Final evoKNnit Jersey Blue</h4>
							</button>

					<?php break;	
						case 5: ?>
							<button class="btn" name="nama-barang" value="Jersey Joma Grada Yellow">
								<img class="img-btn" src="https://images-na.ssl-images-amazon.com/images/I/81XUcDm-luL._SL1500_.jpg">
								<h4 class="card-title">Joma Teamwear T-Shirt Grada Yellow</h4>
							</button>
					<?php break;  
						} ?>
				</div>
			<?php	}?>
		</div>

		<div class="row" style="margin-top: 10px;justify-content: center;">
			<h3 style="text-align: center;color: #fff">Old-Classic</h3>
		</div>
		<div class="row" style="margin: 10px;justify-content: center;">
			<?php
				for ($i=0; $i < 4; $i++) { 
			?>
				<div class="card">
					<?php switch ($i) {
						case 0:?>
							<button class="btn" name="nama-barang" value="Jersey Chelsea Home 2011-2012">
								<img style="width: 70%;" class="img-btn" src="https://cdn3.volusion.com/goz35.avhz4/v/vspfiles/photos/TT-ADV13926-2.jpg?1456231556">
								<h4 class="card-title">Chelsea Home Jersey 2011-2012</h4>
							</button>
					<?php break;
						case 1:?>
							<button class="btn" name="nama-barang" value="Jersey Germany Home 1990">
								<img class="img-btn" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5tUJGqV6WqOMlzozqe-YPQNJirgfZeLKtnMzjtmDgh2ygE6B5">
								<h4 class="card-title">Germany Home Jersey 1990</h4>
							</button>
					<?php break;
						case 2: ?>
							<button class="btn" name="nama-barang" value="Jersey AC Milan Home 1984-1986">
								<img class="img-btn" src="https://media.e-subsidesports.com/sites/us/media/images/product/large/ACMHLS8486Gr8.gif">
								<h4 class="card-title">AC Milan Home Jersey 1984-1986</h4>
							</button>
					<?php break;
						case 3: ?>
							<button class="btn" name="nama-barang" value="Jersey Borussia Dortmund Home 1999-2000">
								<img class="img-btn" src="http://www.spieler-trikot.de/images/product_images/original_images/trikot045as082417as4kopie.jpg" style="width: 73%">
								<h4 class="card-title">Borussia Dortmund Home Jersey 1999-2000</h4>
							</button>
	
					<?php break; 
						} ?>
				</div>
			<?php	}?>
		</div>
	</form>
</body>
</html>