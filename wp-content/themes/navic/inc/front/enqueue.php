<?php
function ak_enqueue()
{
  $uri = get_theme_file_uri();
  $ver = AK_DEV_MODE ? time() : false;

  // CSS
  wp_register_style(
    "ak_bootstrap",
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_google_fonts",
    "https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,900;1,300;1,400;1,600;1,900&display=swap",
    [],
    $ver
  );
  wp_register_style(
    "ak_main_stylesheet",
    $uri . "/assets/styles/css/main.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_secondary_stylesheet",
    $uri . "/assets/styles/css/style.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_dark_stylesheet",
    $uri . "/assets/styles/css/dark.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_responsive_stylesheet",
    $uri . "/assets/styles/css/responsive.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_icons_stylesheet",
    $uri . "/assets/styles/css/vendor/icons.css",
    [],
    $ver
  );
  wp_register_style(
    "ak_forms_stylesheet",
    $uri . "/assets/styles/css/vendor/forms.css",
    [],
    $ver
  );

  wp_enqueue_style("ak_bootstrap");
  wp_enqueue_style("ak_google_fonts");
  wp_enqueue_style("ak_main_stylesheet");
  wp_enqueue_style("ak_secondary_stylesheet");
  wp_enqueue_style("ak_dark_stylesheet");
  wp_enqueue_style("ak_responsive_stylesheet");
  wp_enqueue_style("ak_icons_stylesheet");
  wp_enqueue_style("ak_forms_stylesheet");

  // JS
  wp_register_script(
    "ak_popper",
    "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
    [],
    $ver,
    true
  );
  wp_register_script(
    "ak_bootstrap",
    "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
    [],
    $ver,
    true
  );
  wp_register_script(
    "ak_anime",
    $uri . "/assets/scripts/vendor/anime/lib/anime.min.js",
    [],
    $ver,
    true
  );
  wp_register_script(
    "ak_index",
    $uri . "/assets/scripts/index.js",
    [],
    $ver,
    true
  );
  wp_register_script(
    "ak_fontawesome",
    "https://kit.fontawesome.com/c6acc79be7.js",
    [],
    $ver,
    true
  );

  wp_enqueue_script("jquery");
  wp_enqueue_script("ak_popper");
  wp_enqueue_script("ak_bootstrap");
  wp_enqueue_script("ak_anime");
  wp_enqueue_script("ak_index");
  wp_enqueue_script("ak_fontawesome");
}
