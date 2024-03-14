<?php
/**
 * Contains the header.
 */
?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo ( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
  

    <!-- header | navbar section  -->
    <header>
      <nav class="navbar navbar-expand-lg fixed-top bg-light paddingAll">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <p class="logo">
              Nancy <span>Ogboi</span>
            </p>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span><i class="fa fa-bars" onclick="barMenu(this)"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent primary">
            <?php
                if (has_nav_menu('primary')) :
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'nancy')
                    );
                endif;
                ?>
            
            <form class="button">
            <?php
                    if (has_nav_menu('header_action')) :
                        wp_nav_menu(array(
                            'theme_location' => 'header_action',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    else :
                        printf(
                            '<button> <a class="btn-getstarted scrollto visit" href="%1$s">%2$s</a></button>',
                            esc_url(admin_url('/nav-menus.php')),
                            esc_html__('Action Menu', 'nancy')
                        );
                    endif;
                    ?>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- header | navbar section  -->