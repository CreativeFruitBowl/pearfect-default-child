<?php

	/**
	 * [Page template]	Index: Blog lister
	 *
	 * This is a core WordPress template file and is required by all themes. It's 
	 * the most basic template that will be used if no other template files exist. 
	 * Typically though it'll be used as the template for the "Blog" lister page.
	 *
	 * You should note the `wp_header()` and `wp_footer();` hooks that plugins and 
	 * WordPress core may use to add additional HTML and stylesheets and/or 
	 * JavaScript files to the website.
	 *
	 * Please note: You should enqueue stylesheets and JavaScript documents
	 * - DO NOT simply insert them in this document.
	 *
	 * @category 	Core WordPress template files
	 * @package  	fruit-bowl
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2023 The Very Creative Fruit Bowl Company
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */

	get_header();

?>


	<main id="main">
		<?php if (have_posts()) : ?>
			<div class="o-container">
				<div class="o-grid  o-grid--wide">
					<?php while (have_posts()) : the_post(); ?>
						<div class="o-grid__item  u-one-half  u-palm--one-whole">
							<?php get_template_part('template-partials/listers/listers.article'); ?>
						</div><!-- /.o-grid__item -->
					<?php endwhile; ?>
				</div><!-- /.o-grid -->


				<?php get_template_part('template-partials/generic/generic.pagination'); ?>
			</div><!-- /.o-container -->
		<?php endif; ?>
	</main>


<?php

	/**
	 * Load our footer
	 *
	 * @since 1.0.0
	 */

	get_footer();

?>