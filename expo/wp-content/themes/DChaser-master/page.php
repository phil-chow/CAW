<?php 
 get_header('meta');
 get_header(); 
 ?>
<div class="heading-top">
当前位置：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php the_title(); ?>
</div>
<!-- Main Container -->
<div id="body-wrapper">
 <!-- Content -->
    <div id="content" class="clearfix">
		<?php get_sidebar(); ?>
        <!-- Main Content -->
        <div class="main">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="divleft">
                <div class="single_list">
                    <span class="comment-count"><?php comments_popup_link ('0°','+1°','+%°'); ?></span><h2><?php the_title() ?></h2>
                    <div class="hr-line" style="margin-bottom: 8px;"></div>
                    <div class="post-entry">
                    <?php the_content() ?>

                    </div>
                </div>
            </div>
         <!-- /Post -->
                <?php comments_template('', true); ?>
            <?php endwhile; ?>
                <?php endif; ?>	
        </div>
        <!-- /Main Content -->
</div>

<?php get_footer(); ?> 