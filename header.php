<!DOCTYPE html>
<html>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="icon"
            href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
        </link>
        <title>MyBlog</title> -->
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="site-header">
            <div class="container">
                <h1 class="site-logo-text flex-left">
                    <a href="<?php echo site_url(); ?>">
                        <strong>
                            <?php bloginfo('name'); ?>
                        </strong>
                    </a>
                </h1>
                <div class="site-header__menu">
                    <nav class="main-navigation">
                        <ul class="main-list">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Main Articles</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>