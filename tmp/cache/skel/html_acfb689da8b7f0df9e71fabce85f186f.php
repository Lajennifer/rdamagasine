<?php

/*
 * Squelette : squelettes/article.html
 * Date :      Thu, 27 May 2021 16:51:11 GMT
 * Compile :   Thu, 27 May 2021 16:51:18 GMT
 * Boucles :   _article
 */ 

function BOUCLE_articlehtml_acfb689da8b7f0df9e71fabce85f186f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_article',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("header") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

		<div class="container" style="padding-top: 80px;">
			<!-- Example row of columns -->
			<div class="lab">

			</div>

			<div class="row pt-2">

				<hr>
				<div class="col-md-8">
					<div class="label" style="padding-top: 180px;">
						<p style="padding-left:20px;">MU RWANDA</p>
					</div>
					<h4><b>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</b></h4>

					<div class="row">
						<div class="col-md-12">
							<img src="' .
extraire_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src') .
'" style="width:px;height:485px;padding-right:20px">
							<p>
								' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
							</p>

						</div>
						<div class="somedia">
							<img src="img/facebook.webp" style="width:40px;">
							<img src="img/twitter.webp" style="width:40px;">
							<img src="img/mail.webp" style="width:40px;">
							<img src="img/linkedin.webp" style="width:40px;">
							<img src="img/pinterest.webp" style="width:40px;">
						</div>
						<br>
					</div>

					<hr>

					<div class="row" style="padding-top:20px;padding-bottom:30px;">
						<div class="col-md-12">
							<form>
								<h4>TANGA IBITEKEREZO</h4>
								<hr>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Amazina*">
									</div>
									<div class="col">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div><br>
								<div class="row" style="padding-left:15px;width:745px;height:90px">
									<input type="text" class="form-control" placeholder="Andika Ubutumwa">
								</div><br>
								<div class="butt" style="float:right;">
									<button type="submit" class="btn btn-warning mb-2">OHEREZA</button>
								</div>
							</form>
						</div>
					</div>

				</div>
				<div class="col-md-4" style="padding-left:60px;">
					<h4 style="text-align: center;">KWAMAMAZA</h4>
					<hr>

					<img src="img/advert.gif">
				</div>
			</div>

		</div> <!-- /container -->

		</main>

		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("footer") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',75,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/article.html
// Temps de compilation total: 15.128 ms
//

function html_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_articlehtml_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_acfb689da8b7f0df9e71fabce85f186f', $Cache, $page, 'squelettes/article.html');
}
?>