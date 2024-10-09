<?php 
/*
Template For All Single Pages and Default Pages
*/
get_header(); ?>
    <div class="banner-area inner">
        <?php the_post_thumbnail(); ?>
        <div class="banner-text">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<div class="content-area">
   <div class="welcome-text">
        <div class="heading-div">
            <?php the_content(); ?>
        </div>
    </div>
 </div>
 <?php get_footer(); ?>