<?php // Single Content Wrapper
$anchor = get_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag
$className = 'mtm_module_single_content_area';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className); ?>" id="<?php echo( esc_html( $anchor ) ); ?>">

  <?php mtm_get_block_part( 'mtm-block', 'text' ); ?>

</div>
