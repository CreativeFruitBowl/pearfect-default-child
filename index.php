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
		<div class="o-container">
			<div class="o-container  o-container--optimise-readability">
				<?php

					if (have_posts()) : 
						while (have_posts()) : the_post();
							the_content();

						endwhile;

					else :
						echo '<h2>Sorry!</h2>';
						echo '<p style-"text-align: center;">Looks like there\'s no content to be found here.</p>';

					endif;

				?>
			</div><!-- /.o-container -->
		</div><!-- /.o-container -->
	</main>


<?php

	/**
	 * Load our footer
	 *
	 * @since 1.0.0
	 */

	get_footer();

?>