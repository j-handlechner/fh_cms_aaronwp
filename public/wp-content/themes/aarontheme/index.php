<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aaron G. Miller | <?= get_the_title(); ?></title>

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#2e2e2e">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#2e2e2e">

        <?php wp_head() ?>
    </head>
    <body>
        <?php wp_body_open() ?>
        <div class="hide-overflow-x">
            <header>
                <a href="/"><h1><strong>Aaron G. Miller</strong> | Choreographer</h1></a>
                <nav>
                    <button id="hamburger" aria-label="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </button>
                    <ul>
                        <li><a href="#workshops">Workshops</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#news">News</a></li>
                    </ul>                
                </nav>
                <div class="headline-button-wrapper">
                    <h2>I believe you can dance.</h2>
                    <a href="#" class="button">Book Workshop</a>
                </div>
            </header>

            <main>
                <section id="workshops">

                <?php
                    $workshops_headline_query = new WP_Query( array( 'p' => 47 ));
                    if( $workshops_headline_query->have_posts() ) {
                        while( $workshops_headline_query->have_posts() ) {
                            $workshops_headline_query->the_post(); // iterate the post here
                ?>

                    <p class="super-headline"><?= get_post_custom_values( 'super-headline' )[0]; ?></p>
                    <h2><?php the_title(); ?></h2>

                <?php
                        }
                    }
                ?>
    
                    <div class="workshop-grid">
                    <?php
                        $workshops_query = new WP_Query( array( 'category_name' => 'level', 'order' => 'ASC' ));
                        if( $workshops_query->have_posts() ) {

                            while( $workshops_query->have_posts() ) {
                                $workshops_query->the_post(); // iterate the post here
                    ?>

                        <div class="level">
                            <p class="only-desktop step-number <?= get_post_custom_values( 'level-number-position' )[0]; ?>"><?= get_post_custom_values( 'level' )[0]; ?></p>
                            <div class="level-icon-wrapper only-mobile">
                                <p><?= get_post_custom_values( 'level' )[0]; ?></p>
                                <div class="background-circle"></div>
                                <?php the_post_thumbnail(); ?>
                            </div>
        
                            <div class="step-content config-1">
                                <div class="step-text config-1">
                                    <div>
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>    
                                    </div>
                                    <a href="#" class="button">Book Workshop</a>  
                                
                                
                                </div>

                                <div class="background-circle config-1 only-desktop"></div>

                                <div class="only-desktop icon config-1">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/images/quote.svg" alt='quote sign' class="quote-sign config-1">
                                <blockquote class="config-1">
                                    <?= get_post_custom_values( 'quote' )[0]; ?>
                                </blockquote>
                            </div>
                                
                        </div>
                    <?php
                            }
                        }
                    ?>
    
                    <p class='apply audition'>Apply for an audition now!</p>     
                    <p class='apply register register-1'>Registration now open for everybody!</p>
                    <p class='apply register register-2'>Registration now open for everybody!</p>
    
                    </div>
                </section>
    
                <section id="about" class="full-bleed">
                    <div class="about-container">
                        <img
                            sizes="(max-width: 1237px) 100vw, 1237px"
                            srcset="
                                <?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_200.png 200w,
                                <?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_633.png 633w,
                                <?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_912.png 912w,
                                <?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_1088.png 1088w,
                                <?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_1237.png 1237w"
                            src="<?php echo get_template_directory_uri() ?>/images/about-image-cut_buaoaf_c_scale,w_1237.png"
                            alt="portrait of aaron" >
                        <div class="text-content">
                        <?php
                            $aboutme_query = new WP_Query( array( 'p' => 8 ));
                            if( $aboutme_query->have_posts() ) {

                                while( $aboutme_query->have_posts() ) {
                                    $aboutme_query->the_post(); // iterate the post here
                        ?>

                            <p class="super-headline">
                                <?= get_post_custom_values( 'super-headline' )[0]; ?>
                            </p>
                            
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <a href="#">Learn more</a>
                            
                        <?php
                                }
                            }

                            wp_reset_postdata();
                        ?>
                        </div>
                    </div>     
                </section>
                <section id="news">
                    <p class="super-headline">Making waves since 2004</p>
                    <h2>In the News</h2>
                    <div class="news-container">
                        <?php
                            $news_query = new WP_Query(array('category_name' => 'news' ));
                            if( $news_query->have_posts() ) {
                                while( $news_query->have_posts() ) {
                                    $news_query->the_post(); // iterate the post here
                        ?>

                        <article> 
                            <h3><?php the_title(); ?></h3>
                            <?php the_post_thumbnail() ?>
                            <?php the_content(); ?>
                            <a href="#" class="button">Read more</a>
                        </article>

                        <?php
                                }
                            }
                        ?>
                    </div>
                </section>
            </main>
    
            <footer>
                <div class="footer-container">
                    <h4 class="item-1">Thank you for your interest in Art!</h4>
                    <p class="item-2">© 2004 – 2023 Aaron G. Miller</p>
                    <a href="#" class="item-3">Imprint & Privacy</a>
                </div> 
            </footer>
        </div>

        <script src='<?php echo get_template_directory_uri() ?>/main.js' type="module"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                MainNav.init();
            });
        </script>
    <?php wp_footer() ?>
</body>
</html>