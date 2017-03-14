<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<section class="top">
	<div class="background-top">
		<h1> Musique <br /> Action <br /> Festival</h1>
	</div>
</section>

<section class="programme">
	<h2>Programme</h2>
	<div class="row">
		<div class="large-3 columns contour">
			<p>Mercredi <br />03 Mai 2017<br /><strong>Médiathèque</strong><br />18h<br /></p>
			<h3>CIE OUÏE/DIRE</h3>
		</div>
		<div class="large-3 columns contour">
			<p>Mercredi <br />05 Mai 2017<br /><strong>St-Léon - Nancy</strong><br />18h<br /></p>
			<h3>CHARLÈNE <br />MARCHAND</h3>
		</div>
		<div class="large-3 columns contour">
			<p>Mercredi <br />03 Mai 2017<br /><strong>Médiathèque</strong><br />18h<br /></p>
			<h3>CIE OUÏE/DIRE</h3>
		</div>
		<div class="large-3 columns contour">
			<p>Mercredi <br />03 Mai 2017<br /><strong>Médiathèque</strong><br />18h<br /></p>
			<h3>CIE OUÏE/DIRE</h3>
		</div>
	</div>
</section>

<?php get_footer();
