<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <title>Navic</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- End Metadata -->
    
    <!-- Stylesheets -->
    <?php wp_head(); ?>
    <!-- End Stylesheets -->
  </head>
  <body <?php body_class("dark-bg-color"); ?>>
    <header
      id="site-header"
      class="header-group"
      role="banner"
      style="<?= AK_DEV_MODE ? "margin-top: 2rem;" : "" ?>"
    >
      <div class="header-inner-left">
        <div class="header-logo-wrapper">
          <div class="header-logo">
            <a href=""
              ><img src="/wp-content/themes/navic/assets/images/logo/4x/Logo@4x.png" alt="Navic logo"
            /></a>
          </div>
        </div>
        <!-- .header-logo-wrapper -->

        <div class="header-social-wrapper">
          <nav class="social-menu-wrapper">
            <ul class="social-menu">
              <li>
                <a href=""
                  ><img
                    class="ak-icon"
                    src="/wp-content/themes/navic/assets/images/icons/facebook-icon.png"
                    alt=""
                /></a>
              </li>
              <li>
                <a href=""
                  ><img
                    class="ak-icon"
                    src="/wp-content/themes/navic/assets/images/icons/instagram-icon.png"
                    alt=""
                /></a>
              </li>
              <li>
                <a href=""
                  ><img
                    class="ak-icon"
                    src="/wp-content/themes/navic/assets/images/icons/whatsapp-icon.png"
                    alt=""
                /></a>
              </li>
            </ul>
            <!-- .social-menu -->
          </nav>
          <!-- .social-menu-wrapper -->
        </div>
        <!-- .header-nav-wrapper -->
      </div>
      <!-- .header-inner-left -->

      <div class="header-inner-right">
        <div class="header-menu-wrapper" id="header-menu-wrapper">
          <div class="primary-menu-wrapper" id="primary-menu-wrapper">
            <?php if (has_nav_menu("primary")) {
              wp_nav_menu([
                "theme_location" => "primary",
                "container" => false,
                "menu_class" => "primary-menu",
                "fallback_cb" => false,
                "depth" => 4,
              ]);
            } ?>
            <!-- .primary-menu -->
          </div>
          <!-- .primary-menu-wrapper -->

          <div class="header-menu-btn-toggle" id="menu-open">
            <div class="menu-btn-wrapper">
              <button class="menu-btn" id="main-menu-btn">
                <img class="ak-icon" src="/wp-content/themes/navic/assets/images/icons/menu-icon.png" alt="">
              </button>
            </div>
          </div>
        </div>
        <!-- .header-menu-wrapper -->
      </div>
      <!-- .header-inner-right -->
    </header>
    <!-- .site-header -->