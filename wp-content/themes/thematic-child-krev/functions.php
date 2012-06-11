<?php

function childtheme_override_postheader_postmeta(){
  return "";
}

function childtheme_override_postfooter() {
  return "";
}

function my_postfooter($postfooter) {
  return "foo";
}
add_filter('thematic_postfooter', 'my_postfooter');

function remove_thematic_blogdescription() {
  remove_action('thematic_header','thematic_blogdescription',5);
}
add_action('init','remove_thematic_blogdescription')

?>