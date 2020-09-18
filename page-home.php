<?php
/*
 Template Name: HOME
*/
?>

<?php get_header(); ?>

<div id="content">
	<div class="section angle_container">
		<div id="inner-content" class="wrap w100 cf">
			<ul class="home_slide">	
				<?php while( have_rows('home_slide_loop') ): the_row(); 
				$id = get_sub_field('home_slide');
				$alt = get_sub_field('home_slide_cap');
				$size = 'full'; 
				$src = wp_get_attachment_image_src($id, 'full')
				?>
				<li><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt; ?>" /></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	
	<div class="section angle_container">
		<div class="angle-above outside c_white"></div>
		<div id="inner-content" class="wrap cf">
		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" >
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content();?>
			<?php endwhile; else : ?>			
			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>
			<?php endif; ?>
			
			<div class="wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
			<div class="profile_area"> 
			<h2><?php the_field('profile_text'); ?></h2>
			
			<table> 
			<?php while( have_rows('profile_loop') ): the_row(); ?>			
			<tr>
				<td class="profile_year"><?php the_sub_field('profile_year'); ?></td>
				<td>
					<ul>
						<?php while( have_rows('profile_event_loop') ): the_row(); ?>
						<li><?php the_sub_field('profile_event'); ?></li>
						<?php endwhile; ?>
					</ul>
				</td>
			</tr>
			<?php endwhile; ?>
			</table>
			</div>
			</div>
		</main>
	</div>
	
</div>
<?php get_footer(); ?>
