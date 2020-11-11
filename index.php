<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<title>Cotizador de precios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<style type="text/css">
		html, body
		{
			box-sizing: inherit;
			background: linear-gradient(to left, #E8FFF9 , #eef2f3);
		}
		.blanco
		{
			background: #fff
		}
		.blancoletra
		{
			color: #fff;
		}
		.negroletra
		{
			color: #000;
		}
	</style>
</head>
<body>
<div class="container mt-3 ">
	<div name="sumar">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-sm-12 col-lg-9">
				<h1 class="pl-3"><span class="negroletra">Cotizador de Mega Hosting Sv y PlanetHost</span></h1>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-4">Selecciona el tipo de base de datos que deseas</h5>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-7">
						<select class="select-css" name="TipodeBasededatos" id="TipodeBasededatos" onchange="fncSumar();">

							<option value="0">Seleccione una opcion</option>
							<option value="1">Ninguna (Gratis)</option>
							<option value="2">Local ($0.10 ctvs)</option>
							<option value="3">Remota($0.50 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-5">Selecciona la cantidad de slots que deseas</h5>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-7">
						<select class="select-css" id="Slots" name="Slots" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">50 ($0.10 ctvs)</option>
						<option value="2">100 ($0.20 ctvs)</option>
						<option value="3">150 ($0.30 ctvs)</option>
						<option value="4">200 ($0.40 ctvs)</option>
						<option value="5">250 ($0.50 ctvs)</option>
						<option value="6">300 ($0.60 ctvs)</option>
						<option value="7">350 ($0.70 ctvs)</option>
						<option value="8">400 ($0.80 ctvs)</option>
						<option value="9">450 ($0.90 ctvs)</option>
						<option value="10">500 ($1 dolar)</option>
						<option value="11">550 ($1.10 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-4">Selecciona la cantidad de RAM que deseas</h5>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-7">
						<select class="select-css" name="RAM" id="RAM" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">128 MB ($0.20 ctvs)</option>
						<option value="2">256 MB ($0.40 ctvs)</option>
						<option value="3">512 MB ($0.60 ctvs)</option>
						<option value="4">640 MB ($0.80 ctvs)</option>
						<option value="5">768 MB ($1 dolar)</option>
						<option value="6">896 MB ($1.20 ctvs)</option>
						<option value="7">1 GB ($1.40 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-5">Selecciona el tipo de servidor que deseas</h5>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-7">
						<select class="select-css" name="TipodeServidor" id="TipodeServidor" onchange="fncSumar();">

						<option value="1">Seleccione una opcion</option>
						<option value="2">Servidor dedicado ($2 dolares)</option>
						<option value="3">Servidor compartido ($1 dolar)</option>

						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-1">Selecciona la cantidad de bases de datos que deseas</h5>
				<div class="row">
					<div class="col-lg-2 "></div>
					<div class="col-lg-7">
						<select class="select-css" name="CantidadBasededatos" id="CantidadBasededatos" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">0 (Gratis)</option>
						<option value="2">1 ($0.10 ctvs)</option>
						<option value="3">2 ($0.20 ctvs)</option>
						<option value="4">3 ($0.30 ctvs)</option>
						<option value="5">4 ($0.40 ctvs)</option>
						<option value="6">5 ($0.50 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-5 blanco">
				<h5 class="ml-1">Selecciona la cantidad de almacenamiento que deseas</h5>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-7">
						<select class="select-css" name="Almacenamiento" id="Almacenamiento" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">100 MB ($0.10 ctvs)</option>
						<option value="2">200 MB ($0.20 ctvs)</option>
						<option value="3">300 MB ($0.30 ctvs)</option>
						<option value="4">400 MB ($0.40 ctvs)</option>
						<option value="5">500 MB ($0.50 ctvs)</option>
						<option value="6">600 MB ($0.60 ctvs)</option>
						<option value="7">700 MB ($0.70 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-5 blanco p-2">
				<h5 class="ml-1">Selecciona el tipo de puerto que deseas</h5>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-7">
						<select class="select-css" name="Puerto" id="Puerto" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">Aleatorio ($0.50 ctvs)</option>
						<option value="2">Igual ($1 dolar )</option>
						<option value="3">7777 ($2 dolares segun disponibilidad)</option>

						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-5 blanco">
				<h5 class="ml-1">Selecciona la cantidad de slots para NPC que deseas</h5>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-7">
						<select class="select-css" name="NPC" id="NPC" onchange="fncSumar();">

						<option value="0">Seleccione una opcion</option>
						<option value="1">0 (Gratis)</option>
						<option value="2">10 ($0.20 ctvs)</option>
						<option value="3">20 ($0.30 ctvs)</option>
						<option value="4">30 ($0.40 ctvs)</option>
						<option value="5">40 ($0.50 ctvs)</option>

						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 blanco">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<h1 class="ml-4">Total <div id="resultado"></div></h1>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<script>
		function fncSumar()
		{
			TipodeBasededatos = document.getElementById("TipodeBasededatos").value;
			if(TipodeBasededatos == "0")
			{
				TipodeBasededatos = 0;
			}
			if(TipodeBasededatos == "1")
			{
				TipodeBasededatos = 0;
			}
			if(TipodeBasededatos == "2")
			{
				TipodeBasededatos = 0.1;
			}
			if(TipodeBasededatos == "3")
			{
				TipodeBasededatos = 0.5;
			}
			Slots = document.getElementById("Slots").value;
			if(Slots == "0")
			{
				Slots = 0;
			}
			if(Slots == "1")
			{
				Slots = 0.1;
			}
			if(Slots == "2")
			{
				Slots = 0.2;
			}
			if(Slots == "3")
			{
				Slots = 0.3;
			}
			if(Slots == "4")
			{
				Slots = 0.4;
			}
			if(Slots == "5")
			{
				Slots = 0.5;
			}
			if(Slots == "6")
			{
				Slots = 0.6;
			}
			if(Slots == "7")
			{
				Slots = 0.7;
			}
			if(Slots == "8")
			{
				Slots = 0.8;
			}
			if(Slots == "9")
			{
				Slots = 0.9;
			}
			if(Slots == "10")
			{
				Slots = 1;
			}
			if(Slots == "11")
			{
				Slots = 1.1;
			}
			RAM = document.getElementById("RAM").value;
			if(RAM == "0")
			{
				RAM = 0;
			}
			if(RAM == "1")
			{
				RAM = 0.2;
			}
			if(RAM == "2")
			{
				RAM = 0.4;
			}
			if(RAM == "3")
			{
				RAM = 0.6;
			}
			if(RAM == "4")
			{
				RAM = 0.8;
			}
			if(RAM == "5")
			{
				RAM = 1;
			}
			if(RAM == "6")
			{
				RAM = 1.2;
			}
			if(RAM == "7")
			{
				RAM = 1.4;
			}
			TipodeServidor = document.getElementById("TipodeServidor").value;
			if(TipodeServidor == "1")
			{
				TipodeServidor = 0;
			}
			if(TipodeServidor == "2")
			{
				TipodeServidor = 2;
			}
			if(TipodeServidor == "3")
			{
				TipodeServidor = 1;
			}
			Almacenamiento = document.getElementById("Almacenamiento").value;
			if(Almacenamiento == "0")
			{
				Almacenamiento = 0;
			}
			if(Almacenamiento == "1")
			{
				Almacenamiento = 0.1;
			}
			if(Almacenamiento == "2")
			{
				Almacenamiento = 0.2;
			}
			if(Almacenamiento == "3")
			{
				Almacenamiento = 0.3;
			}
			if(Almacenamiento == "4")
			{
				Almacenamiento = 0.4;
			}
			if(Almacenamiento == "5")
			{
				Almacenamiento = 0.5;
			}
			if(Almacenamiento == "6")
			{
				Almacenamiento = 0.6;
			}
			if(Almacenamiento == "7")
			{
				Almacenamiento = 0.7;
			}
			CantidadBasededatos = document.getElementById("CantidadBasededatos").value;
			if(CantidadBasededatos == "0")
			{
				CantidadBasededatos = 0;
			}
			if(CantidadBasededatos == "1")
			{
				CantidadBasededatos = 0;
			}
			if(CantidadBasededatos == "2")
			{
				CantidadBasededatos = 0.1;
			}
			if(CantidadBasededatos == "3")
			{
				CantidadBasededatos = 0.2;
			}
			if(CantidadBasededatos == "4")
			{
				CantidadBasededatos = 0.3;
			}
			if(CantidadBasededatos == "5")
			{
				CantidadBasededatos = 0.4;
			}
			if(CantidadBasededatos == "6")
			{
				CantidadBasededatos = 0.5;
			}
			Puerto = document.getElementById("Puerto").value;
			if(Puerto == "0")
			{
				Puerto = 0;
			}
			if(Puerto == "1")
			{
				Puerto = 0.5;
			}
			if(Puerto == "2")
			{
				Puerto = 1;
			}
			if(Puerto == "3")
			{
				Puerto = 2;
			}
			NPC = document.getElementById("NPC").value;
			if(NPC == "0")
			{
				NPC = 0;
			}
			if(NPC == "1")
			{
				NPC = 0;
			}
			if(NPC == "2")
			{
				NPC = 0.2;
			}
			if(NPC == "3")
			{
				NPC = 0.3;
			}
			if(NPC == "4")
			{
				NPC = 0.4;
			}
			if(NPC == "5")
			{
				NPC = 0.5;
			}

			resultado=TipodeBasededatos+Slots+RAM+TipodeServidor+Almacenamiento+CantidadBasededatos+Puerto+NPC;

			parseFloat(resultado).toFixed(2);
			if(!isNaN(resultado))
			{
				document.getElementById("resultado").innerHTML = "$"+parseFloat(resultado).toFixed(2);
			}
		}
	</script>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
