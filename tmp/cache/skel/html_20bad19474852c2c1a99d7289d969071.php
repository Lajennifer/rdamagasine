<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Thu, 27 May 2021 16:40:08 GMT
 * Compile :   Thu, 27 May 2021 16:51:38 GMT
 * Boucles :   _amakuru
 */ 

function BOUCLE_amakuruhtml_20bad19474852c2c1a99d7289d969071(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_amakuru';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.date');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "1"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_20bad19474852c2c1a99d7289d969071','_amakuru',82,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<div class="row">
								<div class="col-md-5">
									<div class="photo">
										<img src="' .
extraire_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src') .
'" style="width:130px">
									</div>
								</div>
								<div class="col-md-7">
									<div class="parag">
										<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
									</div>
								</div>
							</div><br>
							');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_amakuru @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 12.073 ms
//

function html_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("header") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_20bad19474852c2c1a99d7289d969071\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	<div class="container" style="padding-top: 80px;">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-6" style="padding:1px;">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/technology.jpg" alt="First slide"
								style="padding:0px">
							<div class="carousel-caption d-none d-md-block">
								<h5><b>IKORANABUHANGA</b></h5>
								<p><b>Hagiye gutoranywa imishinga mito y’ishoramari rishingiye ku ikoranabuhanga
										izahabwa ubufasha
										bwa miliyoni 19 Frw</b></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/france.jpg" alt="Second slide"
								style="padding-right:0px">
							<div class="carousel-caption d-none d-md-block">
								<h5><b>POLITICS</b></h5>
								<p><b>Perezida Kagame yavuze ko ibiganiro ku gukorera inkingo za COVID19 mu Rwanda
										bigeze kure</b></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/abarimu mu  myanya.jpg" alt="Third slide"
								style="padding-right:0px">
							<div class="carousel-caption d-none d-md-block">
								<h5><b>EDUCATION</b></h5>
								<p><b>Gushyira abarimu mu myanya, ikoranabuhanga mu burezi,
										uko yihebeye ubwarimu– Ikiganiro na Dr Mbarushimana uyobora REB</b></p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-3" style="padding:1px;">
				<img src="images/dreamunity.jpg" style="width:100%;height:100%">
			</div>
			<div class="col-md-3" style="padding:1px;">
				<img src="images/dreamunity.jpg" style="width:100%;height:50%">
				<img src="images/dreamunity.jpg" style="width:100%;height:50%;padding:1px;">
			</div>
		</div>

		<div class="row pt-4">
			<div class="col-md-8">
				<h4><b>AMAKURU</b></h4>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<img src="images/mugabe.jpg"
							style="width:380px;height:250px;padding-right:20px;z-index: -1; position: relative;">
						<div class="label">
							<p>INKURU ZIHERUKA</p>
							<h4>Umutware yategetse ko umubiri wa Robert Mugabe utabururwa</h4>
						</div>
					</div>
					<div class="col-md-6">
						<img src="images/PK.jpg" style="width:380px;height:250px;z-index: -1;position:relative;">
						<div class="label">
							<p style="padding-left:10px;">MU RWANDA</p>
							<h4 style="padding-top:-200px;">Perezida Kagame yavuze ko ibiganiro ku gukorera inkingo
								za COVID19 mu Rwanda bigeze kure</h4>
						</div>
					</div>
				</div>

				<div class="row" style="padding-top:100px;">
					<div class="col-md-6">
						' .
BOUCLE_amakuruhtml_20bad19474852c2c1a99d7289d969071($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5">
								<div class="photo">
									<img src="images/aprfc.jpg" style="width:130px">
								</div>
							</div>
							<div class="col-md-7">
								<div class="parag">
									<a href="#">
										’Cannavaro’ yakoresheje imyitozo ya nyuma bitegura AS Muhanga</a>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-5">
								<div class="photo">
									<img src="images/jcole.jpg" style="width:130px">
								</div>
							</div>
							<div class="col-md-7">
								<div class="parag">
									<a href="#">J. Cole ntazakina imikino ikurikira ya BAL</a>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-5">
								<div class="photo">
									<img src="images/mugabe.jpg" style="width:130px">
								</div>
							</div>
							<div class="col-md-7">
								<div class="parag">
									<a href="#">Umutware yategetse ko umubiri wa Robert Mugabe utabururwa</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="padding-left: 60px;">
				<h4 style="text-align: center;">KWAMAMAZA</h4>
				<hr>
				<img src="images/advert.gif">
			</div>
		</div>

	</div> <!-- /container -->

	</main>

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("footer") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_20bad19474852c2c1a99d7289d969071\',\'\',149,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>');

	return analyse_resultat_skel('html_20bad19474852c2c1a99d7289d969071', $Cache, $page, 'squelettes/sommaire.html');
}
?>