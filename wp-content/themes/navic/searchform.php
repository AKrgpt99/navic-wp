<?php $unique_id = esc_attr(uniqid("search-form-")); ?>

<form
  role="search"
  method="get"
  class="ak-search-form"
  action="<?php echo esc_url(home_url("/")); ?>">
  <div class="ak-input-group">
    <input
      type="search"
      id="<?php echo $unique_id; ?>"
      class="ak-form-control"
      name="s"
      value="<?php the_search_query(); ?>"
      placeholder="<?php _e("Search", "navic"); ?>">
    <i class="fas fa-search"></i>
  </div>
</form>
