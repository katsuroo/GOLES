<div class="large-12 columns show-for-medium-up remove-side">
    <div class="sticky contain-to-grid navbar-background">
        <nav class="top-bar navbar-background" data-topbar>
            <div class="goles-logo">
                <a href="http://local.wordpress.dev/">
                    <span class="home-link"></span>
                </a>
                <div class="upper-text">GOOD OLD LOWER EAST SIDE</div><div class="lower-text-1">GO</div><div class="lower-text-2">LES</div><div class="filler">&nbsp</div>
            </div>
            <ul class="title-area">
                <!-- Title Area -->
                <li class="name">
                </li>
            </ul>
            <section class="top-bar-section">
                <?php joints_main_nav(); ?>
            </section>
        </nav>
    </div>
</div>

<!-- This is the nav that will show for mobile/small devices -->
<div class="large-12 columns show-for-small-only remove-side">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="left-small">
				<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only remove-side">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>