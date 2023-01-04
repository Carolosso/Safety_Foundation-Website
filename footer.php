</main>

<footer>
	<div class="container-fluid bg-navy text-secondary pt-5 ">
		<div class="container py-3">
			<div class="row">
				<div class="col-md-5">
					
					<div class="footer_logo">
						<a href="<?php echo home_url(); ?>">
            	<img style="width: 60%;"src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
          	</a>
					</div>
					<div class="my-4">
						<h3>
							<a href="#" class="mx-2 text-danger"><i class="bi bi-facebook"></i></a>
							<a href="#" class="mx-2 text-danger"><i class="bi bi-linkedin"></i></a>
						</h3>
					</div>
				</div>
				<div class="col-md-2">
					<h6 class="py-2">O fundacji</h6>
					<ul class="list-unstyled mb-0 ">
						<li class="py-1">
							<a href="<?php echo home_url()?>/misja-i-wizja-fundacji/">Misja i wizja</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/wp-content/pliki/fundacja_PiBIO_statut.pdf" target="_blank">Statut</a>
						</li class="py-1">
						<li class="py-1">
							<a href="<?php echo home_url()?>/zarzad/">Zarząd</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/realizacje/">Realizacje</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/eksperci/">Eksperci</a>
						</li>

					</ul>
				</div>
				<div class="col-md-2">
					<h6 class="py-2">Projekty</h6>
					<ul class="list-unstyled mb-0">
						<li class="py-1">
							<a href="<?php echo home_url()?>/aktualnosci/">Aktualności</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/szkolenia/">Szkolenia</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/doradztwo/">Doradztwo</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/audyty/">Audyty</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/zostan-wolontariuszem/">Zostań wolontariuszem!</a>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<h6 class="py-2">Informacje</h6>
					<ul class="list-unstyled mb-0 text-danger">
						<li class="py-1">
							<a href="<?php echo home_url()?>/security-assistance/">Security Assistance</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/publikacje/">Publikacje</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/blog/">Blog</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/rekomendowane-strony/">Rekomendowane strony</a>
						</li>
						<li class="py-1">
							<a href="<?php echo home_url()?>/kontakt/">Kontakt</a>
						</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-6 text-start">© <?php echo date("Y"); ?> Copyright Wszelkie prawa zastrzeżone.</div>
				<div class="col-6 text-end">
					<a href="#" class="text-secondary text-decoration-none">Polityka prywatności</a>
				</div>
			</div>
		</div>
	</div>
</footer>

	<?php wp_footer(); ?>

	</body>
</html>

