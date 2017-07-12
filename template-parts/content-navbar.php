<?php
/**
 * Created by PhpStorm.
 * User: Sid
 * Date: 2017-05-09
 * Time: 2:08 PM
 */

?>
 <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerMenu">
                <span class="sr-only">Toggle navigation</span>
                <div class="icon">
                    <i class="material-icons">menu</i>
<!--                    <i class="material-icons">close</i>-->
                </div>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri()?>/images/ja-logo.png" alt="" title="<?php bloginfo( 'name' ); ?>"/>
            </a>
        </div>

<!--    for mobile devices  -->
        <div id="mobile-nav" class="header-nav-wrapper">
            <div id="headerMenu" class="collapse navbar-collapse ">
                <?php
                wp_nav_menu( array(
                        'menu'              => 'header-mobile',
                        'theme_location'    => 'header mobile',
                        'depth'             => 0,
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
                <div class="social-icon-header-wrapper">
                    <a href="#"><img class="social-icon-header" src="<?php echo get_template_directory_uri()?>/images/facebook-box.png" alt="facebook"/></a>
                    <a href="#"><img class="social-icon-header" src="<?php echo get_template_directory_uri()?>/images/instagram.png" alt="facebook"/></a>
                    <a href="https://twitter.com/jamesadonis"><img class="social-icon-header" src="<?php echo get_template_directory_uri()?>/images/twitter.png" alt="facebook"/></a>
                    <a href="#"><img class="social-icon-header" src="<?php echo get_template_directory_uri()?>/images/google-plus.png" alt="facebook"/></a>
                </div>
            </div>
        </div>

<!--    for big desktops    -->
        <div id="desktop-nav" class="header-nav-wrapper collapse navbar-collapse">
             <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
              wp_nav_menu( array(
                  'menu'              => 'header-desktop',
                  'theme_location'    => 'header desktop',
                  'depth'             => 0,
                  // 'container'         => 'div',
                  // 'container_class'   => 'collapse navbar-collapse',
                  // 'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
               );
              ?>
       </div>
</nav>
