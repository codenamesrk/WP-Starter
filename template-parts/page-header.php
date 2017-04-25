<?php
/**
 * Page Title Block
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<header class="wps section-title-block">
	<?php if(is_page('about')) : ?>
	<h2 class="sec-about"><?php wp_title(''); ?></h2>
	<?php else : ?>
	<h2 class="sec-muse"><?php wp_title(''); ?></h2>		
	<?php endif; ?>
	<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
</header>