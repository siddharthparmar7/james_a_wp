<?php
/**
 * Created by PhpStorm.
 * User: Sid
 * Date: 2017-05-10
 * Time: 6:12 PM
 */
?>
<div class="copyright-nav-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="copyright">
                    <p>&copy; 2017 James Adonis | all rights reserved | <span>crafted by FOE</span></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-md-offset-1">
                <nav role="navigation">
                    <div id="footerMenu">
                        <?php wp_nav_menu( array(
                                'menu'              => 'footer-menu',
                                'theme_>ocation'    => 'footer-menu',
                                'depth'             => 0,
                                'menu_class'        => 'nav navbar-nav')
                        ); ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

