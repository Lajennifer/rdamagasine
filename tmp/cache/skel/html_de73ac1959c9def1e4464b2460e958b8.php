<?php

/*
 * Squelette : squelettes/footer.html
 * Date :      Thu, 27 May 2021 14:56:06 GMT
 * Compile :   Thu, 27 May 2021 16:51:19 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/footer.html
// Temps de compilation total: 0.035 ms
//

function html_de73ac1959c9def1e4464b2460e958b8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- Footer -->
<footer class="page-footer font-small green pt-4" style="background-color: rgb(193, 217, 218);padding-left:180px;">

	<!-- Footer Links -->
	<div class="container-fluid text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-4 mt-md-0 mt-3">
				<h5 class="text-uppercase">IBIRIMO</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!" style="color: black;">Irembo</a>
					</li>
					<li>
						<a href="#!" style="color: black;">Imyidagaduro</a>
					</li>
					<li>
						<a href="#!" style="color: black;">Inkuru Zicukumbuye</a>
					</li>
					<li>
						<a href="#!" style="color: black;">Imikino</a>
					</li>
				</ul>
			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none pb-3">

			<!-- Grid column -->
			<div class="col-md-4 mb-md-0 mb-3">
				<p> Tweets by Rwanda_Magazine</p>
				<a class="twitter-timeline" data-height="200" data-theme="dark"
					href="https://twitter.com/jpngabonziza?ref_src=twsrc%5Etfw">Tweets by jpngabonziza</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 mb-md-0 mb-3">

				<!-- Links -->
				<h5 class="text-uppercase">CONTACT US</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!" style="color: black;">Rwanda Magazine</a>
					</li>
					<li>
						<a href="#!" style="color: black;">Kigali City - Rwanda</a>
					</li>
					<li>
						<a href="#!" style="color: black;">
							info@rwandamagazine.com</a>
					</li>
					<li>
						<a href="#!" style="color: black;">
							(+250) 788 696 317</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->
	<hr>

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<!-- <a href="https://mdbootstrap.com/"> MDBootstrap.com</a> -->
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="dist/js/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script>window.jQuery || document.write(\'<script src="../../assets/js/vendor/jquery-slim.min.js"><\\/script>\')</script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>

</html>';

	return analyse_resultat_skel('html_de73ac1959c9def1e4464b2460e958b8', $Cache, $page, 'squelettes/footer.html');
}
?>