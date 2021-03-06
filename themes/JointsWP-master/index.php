<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row">
                    <div class="sidebar-container large-3 medium-3 small-12">
                        <?php get_sidebar(); ?>
                    </div>
                        <div id="main" class="large-6 medium-6 columns index" role="main">
                          <!-- To see additional archive styles, visit the /partials directory -->
                            <?php get_template_part( 'partials/loop', 'archive' ); ?>
                        </div> <!-- end #main -->

                    <div class="content-panel twitter-container large-3 medium-3 show-for-medium-up ">
                        <h4>Latest Tweets</h4>
                        <div class="twitter-timeline">
                            <?php db_twitter_feed() ?>
                        </div>
                    </div>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
<div class="clear"></div>
<?php get_footer(); ?>