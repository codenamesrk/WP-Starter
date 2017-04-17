<?php
/**
 * Page Title Block
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<header class="section-header wps text-center">
	<h1 class="entry-title"><?php wp_title(''); ?></h1>
	<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
</header>