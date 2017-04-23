<?php
/**
* The template for the Front Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Filmarte
*/

get_header(); ?>

<?php
$opciones_imgd = get_option('opciones_imgd');

$slider = $opciones_imgd['imgd_slider'][0];
$slider_size = $opciones_imgd['imgd_slider_size'];

//echo piklist::pre($opciones_imgd);
//echo piklist::pre($video);
//var_dump($video);

 ?>
<?php if(isset($description) && $description!=0): ?>
<div id="description" class="container">
	<blockquote>
	<?php echo bloginfo( 'description' );?>
	</blockquote>
</div>
<?php endif; ?>


<?php if ($slider!=0) {?>
	<?php include( locate_template( 'template-parts/carrousel.php' ) );?>
<?php } ?>


 <?php
 while ( have_posts() ) : the_post();
 	the_content();
 endwhile; // End of the loop.
 ?>

<?php get_footer(); ?>