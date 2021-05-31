<?php

/*
 * Squelette : squelettes/rubrique.html
 * Date :      Thu, 27 May 2021 16:40:32 GMT
 * Compile :   Thu, 27 May 2021 16:51:54 GMT
 * Boucles :   S_amakuru
 */ 

function BOUCLES_amakuruhtml_0caead67327defaf94febb642f511490(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = 'S_amakuru';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.id_article",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array('articles.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/rubrique.html','html_0caead67327defaf94febb642f511490','S_amakuru',16,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'	
						
					<div class="row mt-3">
							
							<div class="col-md-4">
								<div class="picture">
									<img src="' .
extraire_attribut(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'src') .
'" style="width:230px;height:230px;">
								</div>
							</div>
							<div class="col-md-8">
								<div class="par" style="float: right;">
									<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'"><b>
											<h5 style="color: black;">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'<h5>
										</b></a>
									<p style="font-family:Times New Roman">' .
interdire_scripts(couper(propre($Pile[$SP]['texte'], $connect, $Pile[0]),'200','...')) .
'
										<a href="#" style="color:chocolate; float: right;">Read more</a>
									</p>


								</div>
							</div>
						</div>
					');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLES_amakuru @ squelettes/rubrique.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/rubrique.html
// Temps de compilation total: 10.200 ms
//

function html_0caead67327defaf94febb642f511490($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("header") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_0caead67327defaf94febb642f511490\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

	<div class="container" style="padding-top: 80px;">
		<!-- Example row of columns -->
		<div class="lab">

		</div>

		<div class="row pt-2">
			<hr>
			<div class="col-md-8">
				<h4>Imyidagaduro</h4>

				<div class="row">
					<div class="col-md-12">
					' .
BOUCLES_amakuruhtml_0caead67327defaf94febb642f511490($Cache, $Pile, $doublons, $Numrows, $SP) .
'


					</div>
					<br>
				</div>
				<hr>
				

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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("footer") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/rubrique.html\',\'html_0caead67327defaf94febb642f511490\',\'\',60,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>');

	return analyse_resultat_skel('html_0caead67327defaf94febb642f511490', $Cache, $page, 'squelettes/rubrique.html');
}
?>