<?php
/*
Template Name: feedback
*/
?>

<?php require_once('config.php'); ?>

<?php get_header(); ?>

<div id="single" class="page">

<?php while ( have_posts() ) : the_post(); ?>

    <div id="top">
        <a class="<?php if (LOGO_FONT) { echo 'icon-icon'; } else { echo 'image-icon'; } ?>" href="javascript:history.back()"></a>
    </div>

    <div class="section">
	<div class="images">
	</div><div class="article">
        <div>

        <div class="content">
		    <?php the_content(); ?>
        </div>
        
        <div class="comment-wrap">
        <div class="comment link">添加评论</div>
        <?php comments_template(); ?> 
        </div>

        </div>
        </div>
    </div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>
