<?php
function ak_widgets()
{
    $uri = get_theme_file_uri();

    register_sidebar([
        "name" => __("Search", "navic"),
        "id" => "ak_search_sidebar",
        "description" => __("Search widget for Navic website", "navic"),
        "before_widget" => '<div class="search-widget">',
        "after_widget" => "</div>",
        "before_title" => '',
        "after_title" => "",
    ]);
}
