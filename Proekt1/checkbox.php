<html>
<?php
	include 'Connection.php';
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/Style.css" />
<script type="text/javascript">
		function active(){
		var searchBar = document.getElementById('searchBar');
		if(searchBar.value == 'Пребаруваj...'){
			searchBar.value = ''
			searchBar.placeholder = 'Пребаруваj...'
		}
	}
	function inactive(){
		var searchBar = document.getElementById('searchBar');
		if(searchBar.value == ''){
			searchBar.value = 'Пребаруваj...'
			searchBar.placeholder = ''
		}
	}
</script>
<style>

</style>
<title>Home</title>
</head>
<body>
<div id="header">
	<div id="logo">
		<a href=""><img src="../Proekt1/Sliki/logo.png" width="464px" height="44px" /></a>
	</div>

		<form class="searchbar" method="post">
			<input type="text" id="searchBar" placeholder="Пребаруваj..." value="" maxlenght="25" autocomplete="off" onMouseDown="active();" onBlur="inactive();" /><input type="submit" id="searchBtn" value="Пребарај" />
		</form>
</div>
<div id="nav" class="menu">
	<ul style="padding-left: 0px;">
		<li><a href="../Proekt1/Home.php">ПОЧЕТНА</a></li>
		<li><a href="../Proekt1/AboutUS.php">ЗА НАС</a></li>
		<li><a href="../Proekt1/Location.php">ЛОКАЦИЈА</a></li>
		<li><a href="#">КОШНИЧКА</a></li>
	</ul>
</div>
<div id="main">
	<div id="selection">
		<div id="center">
			<div id="naslov"><a href="#">Избери Категорија</a></div>
		</div>
		<div id="left">
				<b class="firsts"> Процесори:</b>
			<form action="checkbox.php" method="post">
				<input class="box" type="checkbox" name="cpu[]" value="i7"/>i7<br/>
				<input class="box" type="checkbox" name="cpu[]" value="i5"/>i5<br/>
				<input class="box" type="checkbox" name="cpu[]" value="i3"/>i3<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 7"/>Ryzen 7<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 5"/>Ryzen 5<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 3"/>Ryzen 3

				<b class="font">Графички:</b>

				<input class="box" type="checkbox" name="gpu[]" value="Nvidia"/>Nvidia<br/>
				<input class="box" type="checkbox" name="gpu[]" value="AMD Radeon"/>AMD Radeon

				<b class="font">РАМ:</b>

				<input class="box" type="checkbox" name="ram[]" value="Kingston"/>Kingston<br/>
				<input class="box" type="checkbox" name="ram[]" value="G.Skill"/>G.Skill<br/>
				<input class="box" type="checkbox" name="ram[]" value="CORSAIR"/>CORSAIR<br/>
		</div>
		<div id="right">
			<b class="firsts">Меморија:</b>

			<input class="box" type="checkbox" name="storage[]" value="SSD"/>SSD<br/>
			<input class="box" type="checkbox" name="storage[]" value="HardDisk"/>HardDisk<br/>

			<b class="font">Куќишта:</b>

			<input class="box" type="checkbox" name="cases[]" value="Cooler Master"/>Cooler Master<br/>
			<input class="box" type="checkbox" name="cases[]" value="NZXT"/>NZXT<br/>
			<input class="box" type="checkbox" name="cases[]" value="Fractal Design"/>Fractal Design<br/>
			<input class="box" type="checkbox" name="cases[]" value="Termaltake"/>Termaltake<br/>

			<b class="font"s>Напојување:</b>

			<input class="box" type="checkbox" name="psu[]" value="Seasonic"/>Seasonic<br/>
			<input class="box" type="checkbox" name="psu[]" value="Corsair"/>Corsair<br/>
			<input class="box" type="checkbox" name="psu[]" value="EVGA"/>EVGA<br/>
			<input class="box" type="checkbox" name="psu[]" value="Thermaltake"/>Thermaltake<br/><br/>
		</div>
		<input class="submit1" type="submit" value="Одбери" />
	</form ><br />
	</div>
	<div id="content">
<?php
	echo "Ги избравте следниве: <br />";
	if(isset($_POST['cpu'])){
		$cpu = $_POST['cpu'];
		foreach($cpu as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['gpu'])){
		$gpu = $_POST['gpu'];
		foreach($gpu as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['cases'])){
		$cases = $_POST['cases'];
		foreach($cases as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['storage'])){
		$storage = $_POST['storage'];
		foreach($storage as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['ram'])){
		$ram = $_POST['ram'];
		foreach($ram as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['psu'])){
		$psu = $_POST['psu'];
		foreach($psu as $key => $value){
			echo $value.'<br />';
		}
	}
?>
</div>
<div id="discount">
	<div id="center2">Промоција</div>
	<div id="reklama1">
		<img src="../Proekt1/Sliki/cpu.jpg" width="248px" height="248px"></img>
	</div>
	<div id="reklama1">
		<img src="../Proekt1/Sliki/i39100box_1.jpg" width="220px" height="164px"></img>
	</div>
</div>
</div>
<div id="footer">
	<div id="kontakthead">
		<h3 class="margin">КОНТАКТ</h3>

		<p class="font">
			Email:sj26207@seeu.edu.mk
		</p>
		<p class="font">
			Тел: 044/454-344
		</p>
		<div class="social-media">
			<ul>
				<li><a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
<?php

 ?>
</div>
</body>
</html>
