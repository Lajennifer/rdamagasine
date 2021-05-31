<?php

/*
 * Squelette : squelettes/header.html
 * Date :      Thu, 27 May 2021 15:57:43 GMT
 * Compile :   Thu, 27 May 2021 16:51:18 GMT
 * Boucles :   _menubar
 */ 

function BOUCLE_menubarhtml_80f428b735eb958cf1c478827c0b168a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_menubar';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', "8"));
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
		array('squelettes/header.html','html_80f428b735eb958cf1c478827c0b168a','_menubar',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
					<li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
				');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menubar @ squelettes/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/header.html
// Temps de compilation total: 3.152 ms
//

function html_80f428b735eb958cf1c478827c0b168a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Rdamagazine</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->

	<link href="css/jumbotron.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
		<div class="logo">
			<img src="images/logo.png">
		</div>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">


			<div class="banner" style="float:right;">
				<img src="images/hosting.gif">
			</div>

		</div>
	</nav>

	<main role="main" style="border: 1px solid black;">

		<div class="menubar">
			<hr size="3" width="90%" color="#F3A31C">
			<ul>
				<li><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'">IREMBO</a></li>
				' .
BOUCLE_menubarhtml_80f428b735eb958cf1c478827c0b168a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</ul>
		</div>');

	return analyse_resultat_skel('html_80f428b735eb958cf1c478827c0b168a', $Cache, $page, 'squelettes/header.html');
}
?>