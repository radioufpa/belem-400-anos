<!doctype html>
<html lang="pt-br">

<head>

	<link href="http://radio.ufpa.br/belem-400-anos/belem-400.css" rel="stylesheet" type="text/css">

	<?php 

	$page_name = 'Belém 400 Anos';
	$page_description = 'Em homenagem aos 400 anos da cidade de Belém, a Rádio Web UFPA preparou uma programação especial. Confira!';
	$page_tags = 'belem 400 anos, especial belem 400 anos, belem 400 anos ufpa, belem 400 anos radio web';
	$color = '#F89D18';
	$image_icon = 'http://radio.ufpa.br/belem-400-anos/_images/icon.png';
	$image_share = 'http://radio.ufpa.br/belem-400-anos/_images/share.png';

	$pre_audio_url = 'http://radio.ufpa.br/media/audio/belem-400-anos/';

	include '../_includes/head.php';
 
	?>

</head>

<body>

	<?php 
	include '../_includes/header.php'; 
	include '../_includes/share.php'; 
	include '../_includes/player.php';
	?>


    <section class="full-screen img-home">

    	<div class="full-screen-container background-2">

    		<img src="_images/belem-400-anos-logo.svg" width="600px" alt="logo belem 400 anos">

	        <!-- <h1 class="title">Belém 400 Anos</h1> -->

	        <a href="#1" id="scroll-button" class="color-1"></a>

		</div>

    </section>

   	<section id="1">

			<h2 class="text-1">Espaços de Cultura Alternativa</h2>

			<div class="tile tile-play">

			<div class="quad-tile">
				<figure class="img-gotazkaen"></figure>
				<a href="#1" id="play" onclick="playFile('BELEM_400_ANOS__CULTURA_ALTERNATIVA__CASAS_DE_ARTE_E_CULTURA.mp3'); playAudio();">
					<h3>Casas de Cultura</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-cine-olympia"></figure>
				<a href="#1" id="play" onclick="playFile('BELEM_400_ANOS__CULTURA_ALTERNATIVA__CINEMAS.mp3');">
					<h3>Cinemas</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-fotoativa"></figure>
				<a href="#1" id="play" onclick="playFile('BELEM_400_ANOS__CULTURA_ALTERNATIVA__FOTOATIVA.mp3');">
					<h3>Fotoativa</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-elf-galeria"></figure>
				<a href="#1" id="play" onclick="playFile('BELEM_400_ANOS__CULTURA_ALTERNATIVA__GALERIAS.mp3');">
					<h3>Galerias de Arte</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-sesc"></figure>
				<a href="#1" id="play" onclick="playFile('BELEM_400_ANOS__CULTURA_ALTERNATIVA__SESC_BOULEVARD.mp3');">
					<h3>Sesc Boulevard</h3>
				</a>
			</div>

			</div>

    </section>


	<section id="2">

			<h2 class="text-1">Curiosidades</h2>

			<div class="tile tile-play">

			<div class="big-tile">
				<figure class="img-belem"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__BELEM.mp3');">
					<h3>Belém</h3>
				</a>
			</div>

			<div class="big-tile">
				<figure class="img-cirio"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__CIRIO.mp3');">
					<h3>Círio de Nazaré</h3>
				</a>
			</div>

			<div class="big-tile">
				<figure class="img-chuva"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__CLIMA.mp3');">
					<h3>Clima</h3>
				</a>
			</div>

			<div class="big-tile">
				<figure class="img-tv-cultura"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__EMISSORAS_DE_TV.mp3');">
					<h3>Emissoras de TV</h3>
				</a>
			</div>

			<div class="big-tile">
				<figure class="img-assembleia-de-deus"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__EVANGELICOS.mp3');">
					<h3>Evangélicos</h3>
				</a>
			</div>

			<div class="big-tile">
				<figure class="img-futebol"></figure>
				<a href="#2" id="play" onclick="playFile('BELEM_400_ANOS__CURIOSIDADES__TIMES_DE_FUTEBOL.mp3');">
					<h3>Times de Futebol</h3>
				</a>
			</div>

			</div>

    </section>


   	<section id="3">

			<h2 class="text-1">Ruas de Belém</h2>

			<div class="tile tile-play">

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__13_DE_MAIO.mp3');">
					<h3>13 de Maio</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__15_DE_NOVEMBRO.mp3');">
					<h3>15 de Novembro</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__ARCIPRESTE_MANOEL_TEODORO.mp3');">
					<h3>Arcipreste Manoel Teodoro</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__DOMINGOS_MARREIROS.mp3');">
					<h3>Domingos Marreiros</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__DOS_48.mp3');">
					<h3>Dos 48</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__DOUTOR_ASSIS.mp3');">
					<h3>Doutor Assis</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__DOUTOR_MALCHER.mp3');">
					<h3>Doutor Malcher</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__GASPAR_VIANA.mp3');">
					<h3>Gaspar Viana</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__JOAO_ALFREDO.mp3');">
					<h3>João Alfredo</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__JOAO_BALBI.mp3');">
					<h3>João Balbi</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__MANOEL_BARATA.mp3');">
					<h3>Manoel Barata</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__PAES_DE_CARVALHO.mp3');">
					<h3>Paes de Carvalho</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__SIQUEIRA_MENDES.mp3');">
					<h3>Siqueira Mendes</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-belem"></figure>
				<a href="#3" id="play" onclick="playFile('BELEM_400_ANOS__RUAS__VEIGA_CABRAL.mp3');">
					<h3>Veiga Cabral</h3>
				</a>
			</div>

			</div>

    </section>


    <section id="4" class="full-screen">

		<div class="full-screen-container">

			<h2 class="text-1">Depoimentos</h2>

			<div class="track">

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__EDILBERTO_E_HELIDA.mp3');">
					<p>Edilberto e Helida</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__EDSON_HORTIZ.mp3');">
					<p>Edson Hortiz</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__ELIZABETH_VASCONCELOS.mp3');">
					<p>Elizabeth Vasconcelos</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__FERNANDO_ARTHUR.mp3');">
					<p>Fernando Arthur</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__FLAVIO_NASSAR.mp3');">
					<p>Flávio Nassar</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__FRANCISCO_HERNANDES.mp3');">
					<p>Francisco Hernandes</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__HERALDO_MAUES.mp3');">
					<p>Heraldo Maués</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__JERRY_ORLET.mp3');">
					<p>Jerry Orlet</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__JOANA_VIEIRA.mp3');">
					<p>Joana Vieira</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__JUNIOR_SOARES.mp3');">
					<p>Junior Soares</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__MANOEL_DUTRA.mp3');">
					<p>Manoel Dutra</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__MAURO_MAGALHAES.mp3');">
					<p>Mauro Magalhães</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PADRE_GEOVANE.mp3');">
					<p>Padre Geovane</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PATRICIA_CESAR.mp3');">
					<p>Patrícia César</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PAULO_BARRADAS.mp3');">
					<p>Paulo Barradas</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PAULO_BARRADAS.mp3');">
					<p>Rodrigo e Yessica</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PAULO_BARRADAS.mp3');">
					<p>Ronaldo Silva</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__PAULO_BARRADAS.mp3');">
					<p>Roseane Norat</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__SANCLEYTON_MOREIRA.mp3');">
					<p>Sancleyton Moreira</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__THAIANE_OLIVEIRA.mp3');">
					<p>Thaiane Oliveira</p>
				</a>

				<a href="#4" id="play" onclick="playFile('BELEM_400_ANOS__DEPOIMENTO__THAIS_SANJAD.mp3');">
					<p>Thais Sanjad</p>
				</a>

			</div>

		</div>

    </section>


	<?php include '../_includes/footer.php'; ?>
	

<!-- Scripts -->

<script>
	
function playFile(file)
    {
    var audio = file;
    if(audio !== '') {
    document.getElementById('audio').src = 'http://radio.ufpa.br/media/audio/belem-400-anos/'+audio;
    }
    else {

    }
}
</script>

<script src="http://radio.ufpa.br/_scripts/functions.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/menu.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/header.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/scroll.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/player.js" type="text/javascript"></script>

</body>
</html>