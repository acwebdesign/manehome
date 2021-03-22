<?php get_header(); ?>

<section class="bandeau-erreur position-relative">

  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/Reception-chantier-BatiScript.jpg" alt="" class="d-block w-100 h-100 img-404" alt="" height="515px">

    <div class="d-flex align-items-center error-content" >
      <div class="error-titre p-3 d-flex">

        <p class=" pr-5 mb-0 error-text">
          Erreur<br>
          <span>404</span>

        </p>
    </div>

    <a href="<?php echo home_url(); ?>" class="error-link">
      <i class="fas fa-arrow-circle-left"></i>
      Retour à la page d'accueil
    </a>

  </div>

</section>

<style>
  .error-hide{
    display: none;
  }
  footer{
    padding-top: 2rem;
  }
  footer .container{
    margin-top: 0 !important;
  }
</style>

<?php get_footer(); ?>
