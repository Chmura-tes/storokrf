<!DOCTYPE html>
<html lang="PL-pl">

<head>
	<title>encyklopedia fajnych gier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgb(255, 255, 255);">
	<div id="baner">
		<h1>encyklopedia fajnych gier</h1>
	</div>
	<div class="main">
		<div class="high">
			<div class="high1">
				<h1>Akcje</h1>
			</div>

			<div class="high1">
				<h1>MMO</h1>
			</div>

			<div class="high1">
				<h1>Przygodowe</h1>
			</div>
		</div>

		<div class="content">
			<div class=" big">
				<ul class="titles">
                    <?php
            $conn = new mysqli('localhost', 'root', '', 'strona');
            $sql = "SELECT * FROM gry";
            $result = $conn->query($sql);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach  ($data as $d) {
				$id_gry = $d['id-gry'];
                $nazwa = $d['nazwa_gry'];
                $opis = $d['opis'];
				$obrazek = $d['link-obrazka'];
				?>
				<li style="
				background-image:
				linear-gradient(to left, rgba(255, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%),
				url('<?php echo $obrazek ?>');">
						<div class="tbox">
							<h2><?php echo $id_gry ?></h2>
							<h3><?php echo $nazwa ?></h3>
							<p>
								<?php echo $opis ?>
							</p>
							<button>Przejdź do opisu</button>
						</div>
					</li>
			<?php 
		} 
		?>


			</div>
			<div class="right">
				<form id="form" method="POST">
					<label>nazwa gry</label>
					<input type="text" name="nazwagry" required> <br>

					<label>opis</label>
					<input type="text" name="opis" required> <br>

					<label>wydawca</label>
					<input type="text" name="nazwawydawcy" required> <br>

					<label>producent</label>
					<input type="text" name="nazwaproducenta" required> <br>

					<label>obrazek</label>
					<input type="image" name="linkobrazka" required> <br>

					<label>link do strony</label>
					<input type="text" name="linkstrony"> <br>

					<label>multiplayer</label>
					<input type="checkbox" name="mp" required> <br>

					<label>singleplayer</label>
					<input type="checkbox" name="sp" required> <br>

					<label>dostępność na steamie</label>
					<input type="checkbox" name="steam" required> <br>

					<label>data wydania gry</label>
					<input type="date" name="data" required> <br>

					<button type="submit">Submit</button>
	</form>
			</div>
		</div>
		<div class="low">
			<ul class="a">
				<li>Beetroot</li>
				<li>Ginger</li>
				<li>Potato</li>
				<li>Radish</li>
			</ul>
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="ajax-script.js"></script>
</body>

</html>