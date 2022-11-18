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
        <title>Aaron G. Miller | Choreographer</title>

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
                    <p class="super-headline">Find your entrance level & book a workshop with Aaron</p>
                    <h2>If you never start, you will never know.</h2>
    
                    <div class="workshop-grid">
                        <div class="level">
                            <p class="only-desktop step-number">3</p>
                            <div class="level-icon-wrapper only-mobile">
                                <p>3</p>
                                <div class="background-circle"></div>
                                <img src="<?php echo get_template_directory_uri() ?>/images/level-3.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                            </div>
    
                            <div class="step-content config-1">
                                <div class="step-text config-1">
                                    <div>
                                        <h3>As pro as you can get</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptas corrupti quam delectus tempore ipsa veniam inventore quae illum dolorem consectetur, rerum totam explicabo odit obcaecati officia nobis pariatur ex?</p>    
                                    </div>
                                    <a href="#" class="button">Book Workshop</a>  
                                </div>

                                <div class="background-circle config-1 only-desktop"></div>
                                <img class="only-desktop config-1 icon" src="<?php echo get_template_directory_uri() ?>/images/level-3.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                                <img src="<?php echo get_template_directory_uri() ?>/images/quote.svg" alt='quote sign' class="quote-sign config-1">
                                <blockquote class="config-1">Respect your talent!</blockquote>
                            </div>
                            
                        </div>
                        <p class='apply'>Apply for an audition now!</p>
        
    
                        <div class="level">
                            <p class="only-desktop step-number centered">2</p>
                            <div class="level-icon-wrapper only-mobile">
                                <p>2</p>
                                <div class="background-circle"></div>
                                <img src="<?php echo get_template_directory_uri() ?>/images/level-2.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                            </div>
    
                            <div class="step-content config-2">
                                <div class="step-text config-2">
                                    <div>
                                        <h3>Aspire more</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptas corrupti quam delectus tempore ipsa veniam inventore quae illum dolorem consectetur, rerum totam explicabo odit obcaecati officia nobis pariatur ex?</p>
                                    </div>
                                    <a href="#" class="button">Book Workshop</a>    
                                </div>        

                                <div class="background-circle config-2 only-desktop"></div>
                                <img class="only-desktop config-2 icon" src="<?php echo get_template_directory_uri() ?>/images/level-2.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                                <img src="<?php echo get_template_directory_uri() ?>/images/quote.svg" alt='quote sign' class="quote-sign config-2">
                                <blockquote class="config-2">Thank yourself for leveling up now!</blockquote>
                            </div>
                        </div>
                        <p class='apply config-2'>Registration now open for everybody!</p>
    
    
                        <div class="level">
                            <p class="only-desktop step-number bottom">1</p>
                            <div class="level-icon-wrapper only-mobile">
                                <p>1</p>
                                <div class="background-circle"></div>
                                <img src="<?php echo get_template_directory_uri() ?>/images/level-1.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                            </div>
    
                            <div class="step-content config-3">
                                <div class="step-text config-3">
                                    <div>
                                        <h3>Learn the Basics profoundly</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla voluptas corrupti quam delectus tempore ipsa veniam inventore quae illum dolorem consectetur, rerum totam explicabo odit obcaecati officia nobis pariatur ex?</p>
                                    </div>

                                    <a href="#" class="button">Book Workshop</a>  
                                </div>

                                <div class="background-circle config-3 only-desktop"></div>
                                <img class="only-desktop config-3 icon" src="<?php echo get_template_directory_uri() ?>/images/level-1.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
                                <img src="<?php echo get_template_directory_uri() ?>/images/quote.svg" alt='quote sign' class="quote-sign config-3">
                                <blockquote class="config-3">Fall in love with dancing!</blockquote>        
                            </div>
                        </div>
                        <p class='apply config-3'>Registration now open for everybody!</p>
    
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
                            <p class="super-headline">Why I teach</p>
                            <h2>Hi, I'm Aaron!</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum!</p>

                            <a>Learn more</a>
                        </div>
                    </div>     
                </section>
                <section id="news">
                    <p class="super-headline">Making waves since 2004</p>
                    <h2>In the News</h2>
                    <div class="news-container">
                        <article> 
                            <h3>Sydney Dance Festival 2022</h3>
                            <img
                                sizes="(max-width: 1400px) 100vw, 1400px"
                                srcset="
                                    <?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_200.jpg 200w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_922.jpg 922w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_1272.jpg 1272w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_1337.jpg 1337w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_1400.jpg 1400w"
                                src="<?php echo get_template_directory_uri() ?>/images/dance_festival_performance_jqsv8l_c_scale,w_1400.jpg"
                                alt="Aaron performing at the Sydney dance festival 2022" >
                            <p> 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </article>
        
                        <article> 
                            <h3>"Dance Pool" 2023 sold out!</h3>
                            <img
                                sizes="(max-width: 1400px) 100vw, 1400px"
                                srcset="
                                    <?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_200.jpg 200w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_803.jpg 803w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_1157.jpg 1157w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_1283.jpg 1283w,
                                    <?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_1400.jpg 1400w"
                                src="<?php echo get_template_directory_uri() ?>/images/dance_pool_group_pic_m9qg0e_c_scale,w_1400.jpg"
                                alt="Group picture of 'Dance Pool" >
                            <p> 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </article>
        
                        <article> 
                            <h3>New London Workshop Oct. 2025</h3>
                            <img
                                sizes="(max-width: 1400px) 100vw, 1400px"
                                srcset="
                                    <?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_200.jpg 200w,
                                    <?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_948.jpg 948w,
                                    <?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_1228.jpg 1228w,
                                    <?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_1349.jpg 1349w,
                                    <?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_1400.jpg 1400w"
                                src="<?php echo get_template_directory_uri() ?>/images/workshop_snapshot_whqaqt_c_scale,w_1400.jpg"
                                alt="Aaron at a workshop">
                            <p> 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero
                                eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est.
                            </p>
                            <a href="#" class="button">Read more</a>
                        </article>
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
        
        <script src='<?= get_template_directory_uri() ?>/main.js'></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                MainNav.init();
            });
        </script>

    <?php wp_footer() ?>
</body>
</html>