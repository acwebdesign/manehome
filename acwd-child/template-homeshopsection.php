<?php
/**
 * Template Name: Template Accueil Boutique Section
 *
 * This is the template that displays contact page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section id="" class="bg-dark product-section text-center pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto mb-5">
                            <h2 class="text-white ">Random</h2>
							<?php echo do_shortcode('[products limit="4" columns="4" class="random-sale"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="" class="bg-dark procduct-section text-center pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto mb-5">
                            <h2 class="text-white ">Catégories</h2>
							<?php echo do_shortcode('[products limit="8" columns="4" category="telephones, accessoires" cat_operator="OR"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="random" class="random bg-light">
                <div class="container">
					<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
						<div class="col-lg-6">
							<img class="img-fluid" src="https://rc-habitat.fr/wp-content/uploads/2020/01/construction.jpg" alt="">
						</div>
						<div class="col-lg-6">
							<div class="bg-black text-center h-100 project">
								<div class="d-flex h-100">
									<div class="project-text w-100 my-auto text-center text-lg-left">
										<h4 class="text-white">Construction</h4>
										<div class="mb-0 text-white-50"><p>Implantation, fondations, élévation</p></div>
										<hr class="d-none d-lg-block mb-0 ml-0">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center no-gutters">
						<div class="col-lg-6">
							<img class="img-fluid" src="https://rc-habitat.fr/wp-content/uploads/2020/01/architecture-3173357_1920.jpg" alt="">
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="bg-black text-center h-100 project">
								<div class="d-flex h-100">
									<div class="project-text w-100 my-auto text-center text-lg-right">
										<h4 class="text-white">Démolition</h4>
										<div class="mb-0 text-white-50"><p>Démolition avant travaux, évacuation des gravats,&#8230;</p></div>
										<hr class="d-none d-lg-block mb-0 mr-0">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
						<div class="col-lg-6">
							<img class="img-fluid" src="https://rc-habitat.fr/wp-content/uploads/2020/01/extension.jpg" alt="">
						</div>
						<div class="col-lg-6">
							<div class="bg-black text-center h-100 project">
								<div class="d-flex h-100">
									<div class="project-text w-100 my-auto text-center text-lg-left">
										<h4 class="text-white">Extension</h4>
										<div class="mb-0 text-white-50"><p>Agrandissement de logement, bureau, entrepôt,&#8230;</p></div>
										<hr class="d-none d-lg-block mb-0 ml-0">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center no-gutters">
						<div class="col-lg-6">
							<img class="img-fluid" src="https://rc-habitat.fr/wp-content/uploads/2020/01/renovation.jpg" alt="">
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="bg-black text-center h-100 project">
								<div class="d-flex h-100">
									<div class="project-text w-100 my-auto text-center text-lg-right">
										<h4 class="text-white">Rénovation</h4>
										<div class="mb-0 text-white-50"><p>Maisons en tuffeaux, caves, enduits,&#8230;</p></div>
										<hr class="d-none d-lg-block mb-0 mr-0">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </section>

            <section id="contact" class="signup-section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 mx-auto text-center">
                            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                            <h2 class="text-white mb-5">CONTACTEZ NOUS !</h2>
                            <div role="form" class="wpcf7" id="wpcf7-f12-o1" lang="fr-FR" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/#wpcf7-f12-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="12" />
<input type="hidden" name="_wpcf7_version" value="5.1.5" />
<input type="hidden" name="_wpcf7_locale" value="fr_FR" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f12-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="g-recaptcha-response" value="" />
</div>
<p><span class="wpcf7-form-control-wrap nom"><input type="text" name="nom" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Prénom Nom" /></span><br />
<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" /></span><br />
<span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Téléphone" /></span><br />
<span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Votre message"></textarea></span></p>
<p class="text-white">Ce site est protégé par reCAPTCHA, la <a href="https://policies.google.com/privacy">politique de confidentialité</a> et les <a href="https://policies.google.com/terms">conditions d'utilisation</a> de Google s'appliquent.</p>
<div class="d-flex flex-column align-items-center">
<input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit btn btn-primary col-6 col-md-4" />
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="contact-section bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h5 class="text-white text-center">RC Habitat &#8211; Construction, Démolition, Extension, rénovation de bâtiment</h5>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Adresse</h4>
                                    <hr class="my-4">
                                    <div class="small text-black-50">
                                        22 rue des ormes
                                        37530
                                        NAZELLES NÉGRON
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4">
                                    <div class="small text-black-50">
                                        <a href="#">contact@rc-habitat.fr</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">TÉLÉPHONE</h4>
                                    <hr class="my-4">
                                    <div class="small text-black-50"><a href="tel:+33972223040">09 72 22 30 40</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-md-0 mt-3">
                            <div class="card py-2 h-100">
                                <div class="card-body text-center">
                                    <div class="acf-map">
                                        <div class="marker" data-zoom="10" data-lat="47.4180046" data-lng="0.964206900000022"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();