<?php
add_filter('twentyten_header_image_height','sesam_header_height');
add_filter('twentyten_header_image_width','sesam_header_width');
function sesam_header_height($size){
   return 65;
}
function sesam_header_width($size){
   return 900;
}
class Twentyten_Child_Text_Wrangler {
function reading_more($translation, $text, $domain) {
  $translations = &get_translations_for_domain( $domain );
  if ( $text == 'Continue reading <span class="meta-nav">&rarr;</span>' ) {
   return $translations->translate( 'Loga eanet <span class="meta-nav">&raquo;</span>' );
  }
  return $translation;
 }
}
add_filter('gettext', array('Twentyten_Child_Text_Wrangler', 'reading_more'), 10, 4);
?>