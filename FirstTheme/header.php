<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <?php wp_head(); ?>
    <!-- recupere les scripts et les styles -->
  </head>

  <body <?php body_class(); ?>
    >
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light col-12 flex-header ">
        <a class="margin" href="<?php echo home_url( '/' ); ?>">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-full.svg"
            alt="Logo"
          />
        </a>

        <?php wp_nav_menu( array(
'theme_location' => 'my-custom-menu',
'container_class' => 'custom-menu-class' ) );
?>
        <!--Menu hamburger pour responsive tablette et mobile -->

        <div class="pos-f-t nav-items-tablet">
        <nav class="navbar navbar-dark bg-dark burger-X">
            <button
              class="btn btn-hamb menu-btn "
              type="button"
              data-toggle="collapse"
              data-target="#navbarToggleExternalContent"
              aria-controls="navbarToggleExternalContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            > MENU
              <span class="navbar-toggler-icon tae"></span>
            </button>
          </nav>
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg">
              <ul class="menu-site-hamburger">
                <li> <a class="nav-item item-tabl nav-link active" href="#"
          ><span class="black-underline">MAGASIN</span>
          <span class="sr-only">(current)</span></a
        ></li>
                <li><a class="nav-item item-tabl nav-link active" href="#"
          ><span class="black-underline">ARCHITECTE D'INTERIEUR</span>
          <span class="sr-only">(current)</span></a
        ></li>
                <li> <a class="nav-item item-tabl nav-link active" href="#"
          ><span class="black-underline">A PROPOS</span>
          <span class="sr-only">(current)</span></a
        ></li>
                <li><a class="nav-item item-tabl nav-link active" href="#"
          ><span class="black-underline">BLOG</span>
          <span class="sr-only">(current)</span></a
        ></li>
                <li> <a class="nav-item item-tabl nav-link active" href="#"
          ><span class="black-underline">CONTACT</span>
          <span class="sr-only">(current)</span></a
        ></li>

              </ul>
            </div>
          </div>

        </div>
        <!-- FIN NAV BAR STANDAR -->
        <!-- ON VEUT LA METTRE ICI -->
      </nav>



    </header>

    <?php wp_body_open(); ?>
  </body>
</html>
