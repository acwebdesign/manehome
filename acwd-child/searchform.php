<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" id="site-search" class="input-search pl-3" name="s" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>">
</form>
