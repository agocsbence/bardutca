<?php

/**
 * Template Name: Lakásválasztó
 */


get_header(); ?>

<div id="lakasvalaszto-plugin">
    <br>
    <div id="lakas-plugin-wrapper" class="container">
        <div class="controls-container text-center">
            <button id="controlsBtn" class="btn btn-large">Szűrő beállítása <i class="fas fa-chevron-down hide-desktop"></i></button>
            <form class="controls noprint" id="controls">
                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-home"></i> Szobaszám</label>
                    <fieldset data-filter-group class="control-group">
                        <label> 
                            <input type="checkbox" value=".rooms-1"/>
                            <span class="checkmark"></span>
                            Nappali +1
                        </label>
                        <label>
                            <input type="checkbox" value=".rooms-2"/>
                            <span class="checkmark"></span>
                            Nappali +2
                        </label>
                        <label>
                            <input type="checkbox" value=".rooms-3"/>
                            <span class="checkmark"></span>
                            Nappali +3</label>
                        <label>
                            <input type="checkbox" value=".rooms-4"/>
                            <span class="checkmark"></span>
                            Nappali +4</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-ruler-combined"></i> Alapterület</label>
                    <fieldset data-filter-group class="control-group">
                        <label>    
                            <input type="checkbox" value=".size-1"/>
                            <span class="checkmark"></span>
                            30-60m²</label>
                        <label>
                            <input type="checkbox" value=".size-2"/>
                            <span class="checkmark"></span>
                            61-90m²</label>
                        <label>
                            <input type="checkbox" value=".size-3"/>
                            <span class="checkmark"></span>
                            91-120m²</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-store"></i> Erkély</label>
                    <fieldset data-filter-group class="control-group">
                        <label>
                            <input type="checkbox" value=".erkely-0"/>
                            <span class="checkmark"></span>
                            Erkély nélküli</label>
                        <label>
                            <input type="checkbox" value=".erkely-1"/>
                            <span class="checkmark"></span>
                            Kis erkély (<20m²)</label>
                        <label>
                            <input type="checkbox" value=".erkely-2"/>
                            <span class="checkmark"></span>
                            Nagy erkély (>20m²)</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-seedling"></i> Kert</label>
                    <fieldset data-filter-group class="control-group">
                        <label>    
                            <input type="checkbox" value=".kertes"/>
                            <span class="checkmark"></span>
                            Kertes</label>
                        <label>
                            <input type="checkbox" value=".nemkertes"/>
                            <span class="checkmark"></span>
                            Nem kertes</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-money-bill-alt"></i> Ár</label>
                    <fieldset data-filter-group class="control-group">
                        <label>    
                            <input type="checkbox" value=".price-1"/>
                            <span class="checkmark"></span>
                            39-45MFt</label>
                        <label>
                            <input type="checkbox" value=".price-2"/>
                            <span class="checkmark"></span>
                            46-55MFt</label>
                        <label>
                            <input type="checkbox" value=".price-3"/>
                            <span class="checkmark"></span>
                            56-65MFt</label>
                        <label>
                            <input type="checkbox" value=".price-4"/>
                            <span class="checkmark"></span>
                            65+ MFt</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-list-ol"></i> Emelet</label>
                    <fieldset data-filter-group class="control-group">
                        <label>    
                            <input type="checkbox" value=".floor-0"/>
                            <span class="checkmark"></span>
                            Földszint</label>
                        <label>
                            <input type="checkbox" value=".floor-1"/>
                            <span class="checkmark"></span>
                            1-3</label>
                        <label>
                            <input type="checkbox" value=".floor-2"/>
                            <span class="checkmark"></span>
                            4-7</label>
                        <label>
                            <input type="checkbox" value=".floor-3"/>
                            <span class="checkmark"></span>
                            8-9</label>
                    </fieldset>
                </div>

                <div class="control-group-wrapper">
                    <label class="control-group-label"><i class="fas fa-gavel"></i> Elérhetőség</label>
                    <fieldset data-filter-group="elerheto" class="control-group">
                        <label>
                            <input type="checkbox" value=".eladott"/>
                            <span class="checkmark"></span>
                            Eladott lakások mutatása</label>
                        <div class="hidden">
                            <label>Elérhető lakások</label>
                            <input type="checkbox" value=".Elerheto"/>
                            <label>Foglalt lakások</label>
                            <input type="checkbox" value=".foglalt"/>
                        </div>
                    </fieldset>
                    <button type="reset" class="btn btn-large control control-text control-reset">Szűrők törlése</button>
                </div>

            </form>
        </div>
        <div class="list-wrapper">
        
            <section id="compare">            
                <div class="compare-icon-list">
                    <div class="btn btn-compare-counter hidden" onclick="openCompare();">
                        <img src="../../wp-content/plugins/lakasvalaszto/assets/compare-list-star.png" alt="">
                        <span></span>
                    </div>
                        <?php

                        $loop = new WP_Query( array(  
                            'posts_per_page' => -1,
                            'post_type' => 'lakas',
                            'meta_key' => 'emelet',
                            'orderby' => 'meta_value',
                            'order' => 'ASC'
                        ) ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>


                                <div class="lakas-compare" data-id="<?php echo get_the_ID(); ?>" onclick="openCompare();">
                                    <div class="lakas-name">
                                        <img src="../../wp-content/plugins/lakasvalaszto/assets/lakas-badge.png" alt="">
                                        <div><?php the_title(); ?></div>
                                    </div>
                                </div>

                        <?php endwhile;

                        wp_reset_postdata(); 

                        ?>
                </div>
            </section>
        
            <div class="lakas-list noprint">
                <?php

                $loop = new WP_Query( array(
                    'posts_per_page' => -1,
                    'post_type' => 'lakas',
                    'meta_key' => 'emelet',
	                'orderby' => 'meta_value',
                    'order' => 'ASC'
                ) ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <div class="mix lakas rooms-<?php the_field('szobaszam');
                    if (get_field('alapterulet') < 60 ) { 
                        echo ' size-1 '; 
                    } elseif (get_field('alapterulet') >= 61 && get_field('alapterulet') < 90 ) {
                        echo ' size-2 '; 
                    } elseif (get_field('alapterulet') >= 91 && get_field('alapterulet') < 120 ) {
                        echo ' size-3 ';
                    }
                    if ( get_field('erkely') == 0 ) { 
                        echo 'erkely-0 '; 
                    } elseif (get_field('erkely') < 20 ) {
                        echo 'erkely-1 '; 
                    } elseif (get_field('erkely') >= 20 ) {
                        echo 'erkely-2 ';
                    }
                    if ( get_field('terasz') == 0 ) { 
                        echo 'terasz-0 '; 
                    } elseif (get_field('terasz') < 20 ) {
                        echo 'terasz-1 '; 
                    } elseif (get_field('terasz') >= 20 ) {
                        echo 'terasz-2 ';
                    }
                    if ( get_field('kertes') == 'igen' ) { 
                        echo 'kertes '; 
                    } else {
                        echo 'nemkertes '; 
                    }
                    if (get_field('ar') < 45 ) { 
                        echo 'price-1 '; 
                    } elseif (get_field('ar') >= 46 && get_field('ar') < 55 ) {
                        echo 'price-2 '; 
                    } elseif (get_field('ar') >= 56 && get_field('ar') < 65 ) {
                        echo 'price-3 ';
                    } elseif (get_field('ar') >= 65 ) {
                        echo 'price-4 ';
                    }
                    if (get_field('emelet') == 0 ) { 
                        echo 'floor-0 '; 
                    } elseif (get_field('emelet') > 0 && get_field('emelet') <= 3 ) {
                        echo 'floor-1 '; 
                    } elseif (get_field('emelet') > 3 && get_field('emelet') <= 7 ) {
                        echo 'floor-2 '; 
                    } elseif (get_field('emelet') > 7 && get_field('emelet') <= 9 ) {
                        echo 'floor-3 '; 
                    }
                    if (get_field('eladott_foglalt')) {
                        the_field('eladott_foglalt');
                    } else {
                        echo 'Elerheto';
                    }
                    ?>">
                        <div class="lakas-header">
                            <div class="lakas-name-wrapper">
                                <div class="lakas-name">
                                    <img src="../../wp-content/plugins/lakasvalaszto/assets/lakas-badge.png" alt="">
                                    <div><?php the_title(); ?></div>
                                </div>
                            </div>
                            <div class="lakas-data-wrapper">
                                <div class="lakas-data">
                                    <div class="header-row">
                                        <div class="prop">Szobaszám: <strong>N+<?php the_field('szobaszam'); ?> háló</strong></div>
                                        <div class="divider"></div>
                                        <div class="prop">Tájolás: <strong><?php the_field('tajolas'); ?></strong></div>
                                    </div>
                                    <div class="header-row">
                                        <div class="prop">Alapterület: <strong><?php the_field('alapterulet'); ?>
                                            <?php if (get_field('erkely') == 0) {
                                                echo '';
                                            } else { 
                                                echo '+';
                                                the_field('erkely'); } ?>
                                            <?php if (get_field('erkely_2') == 0) {
                                                echo '';
                                            } else { 
                                                echo '+';
                                                the_field('erkely_2'); } ?>
                                            m²</strong>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="prop"> Kilátás: <strong><?php the_field('kilatas'); ?></strong></div>
                                    </div>
                                    <div class="price">
                                        <strong>
                                        <?php if (get_field('eladott_foglalt')) {
                                                the_field('eladott_foglalt');
                                            } else { 
                                                the_field('ar');
                                                echo '0.000 Ft'; 
                                            }?>
                                        </strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="lakas-content">
                            <img src="<?php the_field('kep'); ?>" alt="">
                            <div class="data-all">
                                <div class="data">
                                    <div class="data-title">Alapterület</div>   
                                    <div class="data-value"><?php the_field('alapterulet'); ?>m²</div>
                                </div>
                                <?php if ( get_field('erkely') ) { ?>
                                    <div class="data">
                                        <div class="data-title">Erkély</div>   
                                        <div class="data-value">
                                            <?php the_field('erkely'); ?>
                                            <?php if ( get_field('erkely_2') ) { ?> + <?php the_field('erkely_2'); ?>
                                            m²</div>
                                    </div>
                                <?php } ?>
                                <?php if ( get_field('terasz') ) { ?>
                                    <div class="data">
                                        <div class="data-title">Terasz</div>   
                                        <div class="data-value">
                                            <?php the_field('terasz'); ?>
                                            <?php if ( get_field('terasz_2') ) { ?> + <?php the_field('terasz_2'); ?>
                                            m²</div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="data-buttons">
                            <div class="btn btn-compare" data-id="<?php echo get_the_ID(); ?>" onclick="setCompare(this);"><i class="fas fa-star"></i></div>
                            <a href="<?php the_field('pdf') ?>" download class="btn">Letöltés</a>
                            <div data-url="<?php the_field('pdf') ?>" class="btn btn-share hide-mobile">Megosztás</div>
                            <div data-url="<?php the_field('pdf') ?>" class="btn btn-share hide-desktop">Megosztás</div>
                            
                            <div class="btn header-collapse-button hide-desktop"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>

                <?php endwhile;

                wp_reset_postdata(); 

                ?>
                </div>
            </div>
        </div>
    </div>

    <div id="compare-popup" class="compare-wrapper">
        <!-- <div class="compare-buttons-wrapper"></div> -->
        <div id="compare-close" onclick="closeCompare()"><i class="fas fa-window-close"></i></div>
        <div id="lakas-compare-wrapper" class="print popup">

            <div class="lakas-compare-list">
            
                <div class="swiper-container compareSwiper">
                    <div class="swiper-wrapper">
                        <?php

                        $loop = new WP_Query( array(  
                            'posts_per_page' => -1,
                            'post_type' => 'lakas',
                            'meta_key' => 'emelet',
                            'orderby' => 'meta_value',
                            'order' => 'ASC'
                        ) ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                            <div class="swiper-slide" data-id="<?php echo get_the_ID(); ?>">
                                <div class="lakas lakas-compare" data-id="<?php echo get_the_ID(); ?>">
                                    <div class="lakas-header">
                                        <div class="lakas-name-wrapper">
                                            <div class="lakas-name">
                                                <img src="../../wp-content/plugins/lakasvalaszto/assets/lakas-badge.png" alt="">
                                                <div><?php the_title(); ?></div>
                                            </div>
                                        </div>
                                        <div class="lakas-data-wrapper">
                                            <div class="lakas-data">
                                            <div class="header-row">
                                                <div class="prop">Szobaszám: <strong>N+<?php the_field('szobaszam'); ?> háló</strong></div>
                                                <div class="divider"></div>
                                                <div class="prop">Tájolás: <strong><?php the_field('tajolas'); ?></strong></div>
                                            </div>
                                            <div class="header-row">
                                                <div class="prop">Alapterület: <strong><?php the_field('alapterulet'); ?>
                                                    <?php if (get_field('erkely') == 0) {
                                                        echo '';
                                                    } else { 
                                                        echo '+';
                                                        the_field('erkely'); } ?>
                                                    <?php if (get_field('erkely_2') == 0) {
                                                        echo '';
                                                    } else { 
                                                        echo '+';
                                                        the_field('erkely_2'); } ?>
                                                    m²</strong>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="prop"> Kilátás: <strong><?php the_field('kilatas'); ?></strong></div>
                                            </div>
                                            <div class="price">
                                                <strong>
                                                <?php if (get_field('eladott_foglalt')) {
                                                        the_field('eladott_foglalt');
                                                    } else { 
                                                        the_field('ar');
                                                        echo '0.000 Ft'; 
                                                    }?>
                                                </strong>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="lakas-content">
                                        <img src="<?php the_field('kep'); ?>" alt="">
                                        <div class="data-all">
                                            <div class="data">
                                                <div class="data-title">Alapterület</div>   
                                                <div class="data-value"><?php the_field('alapterulet'); ?>m²</div>
                                            </div>
                                            <div class="data">
                                                <div class="data-title">Erkély</div>   
                                                <div class="data-value"><?php the_field('erkely'); ?> + <?php the_field('erkely_2'); ?>m²</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="data-buttons">
                                        <div class="btn btn-compare" data-id="<?php echo get_the_ID(); ?>" onclick="setCompare(this);"><i class="fas fa-star"></i></div>
                                        <a href="<?php the_field('pdf') ?>" download class="btn">Letöltés</a>
                                        <div data-url="<?php the_field('pdf') ?>" class="btn btn-share hide-mobile">Megosztás</div>
                                        <div data-url="<?php the_field('pdf') ?>" class="btn btn-share hide-desktop">Megosztás</div>
                                        
                                        <!-- <div class="btn header-collapse-button hide-desktop"><i class="fas fa-chevron-down"></i></div> -->
                                    </div>
                                </div>
                            </div>
                        
                        <?php endwhile;

                        wp_reset_postdata(); 

                        ?>
                    </div>
                    <div class="swiper-button-white swiper-button-next"></div>
                    <div class="swiper-button-white swiper-button-prev"></div>

                </div>
            </div>
        </div>
    </div>
    <script src="../wp-content/plugins/lakasvalaszto/assets/all.min.js"></script>
    <script src="../wp-content/plugins/lakasvalaszto/assets/mixitup.min.js"></script>
    <script src="../wp-content/plugins/lakasvalaszto/assets/mixitup-multifilter.min.js"></script>
    <script src="../wp-content/plugins/lakasvalaszto/assets/mixitup.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".compareSwiper", {
        direction: 'vertical',
        resizeObserver: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 991
            991: {
                direction: 'horizontal',
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
      });
    </script>
    <script>
        //SHARE FUNCTION
        var shareBtns = document.querySelectorAll('.btn-share');

        shareBtns.forEach((shareBtn) => { 

        shareBtn.addEventListener('click', async () => {
            var shareData = {
                title: 'Bárd utca',
                text: 'Nézd, milyen lakást találtam!',
                url: shareBtn.dataset.url,
            }
            try {
                console.log(shareData);
                await navigator.share(shareData);
            } catch(err) {
                console.log('Error: ' + err);
            }
            });
        });

    </script>
    <script type="text/javascript">
        //MOBILE ACCORDION
        const accordionBtns = document.querySelectorAll(".header-collapse-button");
        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("active");
                // this.previousSibling.classList.toggle('active');
                this.parentElement.previousSibling.previousSibling.classList.toggle('active');
            };
        });
        //CONTROLS BUTTON
        const controlsBtn = document.querySelector('#controlsBtn');
        const controls = document.querySelector('#controls');
        controlsBtn.addEventListener('click', () => {
            controlsBtn.classList.toggle('active');
            controls.classList.toggle('active');
        })
    </script>
    <script type="text/javascript">
        //MIXITUP INIT
        var containerEl = document.querySelector('.lakas-list');

        var mixer = mixitup(containerEl, {
            multifilter: {
                enable: true
            },
            animation: {
                effects: 'fade translateZ(-100px)'
            }
        });
        mixer.setFilterGroupSelectors('elerheto', ['.Elerheto', '.foglalt']);
        mixer.parseFilterGroups(false);
    </script>
    <script type="text/javascript">
        // COMPARE LIST HANDLING
        const localStorage = window.localStorage;
        const compareCounterBtn = document.querySelector('.btn-compare-counter');
        const compareCounter = document.querySelector('.btn-compare-counter span');
        const compareButtons = document.querySelectorAll('.btn-compare');
        const compareHomes = document.querySelectorAll('.lakas-compare');
        const compareWrapper = document.querySelectorAll('#lakas-compare-wrapper');
        var comparePopup = document.querySelector('#compare-popup');
        var body = document.body;
        var compareListPopup = document.querySelector('#lakas-plugin-wrapper');
        var compareListView = document.querySelector('#compare');
        const comparePrint = document.querySelector('#compare-print');
        const compareClose = document.querySelector('#compare-close');
        var compareList = JSON.parse(localStorage.getItem('compareList'));
        if (typeof compareList == 'undefined' && compareList.length == 0 || compareList == null) {
            var compareList = [];
        }

        function openCompare() {
            comparePopup.classList.add('opened');
            body.classList.add('noscroll');
        }

        function closeCompare() {
            comparePopup.classList.remove('opened');
            body.classList.remove('noscroll');
        }

        document.addEventListener('keydown', function(event){
            if(event.key === "Escape"){
                closeCompare();
            }
        });

        function checkCompare() {
            console.log('compareList: '+compareList);
            compareButtons.forEach((compareBtn) => {
                var id = compareBtn.dataset.id;
                if ( compareList.includes(id) ) {
                    compareBtn.classList.add('active');
                }
            });
            if (localStorage.compareList.length > 6) {
                compareCounterBtn.classList.remove('hidden');
                compareCounter.innerHTML = compareList.length;
                compareCounterBtn.classList.remove('hidden');
                compareList.forEach((listElement) => {
                    const comparedHomes = document.querySelectorAll('.lakas-compare');
                    const comparedHomeSliders = document.querySelectorAll('.swiper-slide');
                    comparedHomes.forEach((comparedHome) => {
                        if (comparedHome.getAttribute('data-id') === listElement) {
                            comparedHome.classList.add('active');
                        }
                    });
                    comparedHomeSliders.forEach((comparedHomeSlider) => {
                        if (comparedHomeSlider.getAttribute('data-id') === listElement) {
                            comparedHomeSlider.classList.add('active');
                            // if ( comparedHomeSlider.classList.contains('active') ) {
                            //     console.log('lakas to show found!');
                            //     comparedHomeSlider.classList.add('shown');
                            // } else {
                            //     console.log('lakas to hide found!');
                            //     comparedHomeSlider.classList.add('hidden');
                            // }
                        }
                    });
                });
            } else {
                compareCounterBtn.classList.add('hidden');
            }
        }

        function setCompare(el) {
            var id = el.dataset.id;
            el.classList.toggle('active');

            if ( compareList.includes(id) ) { //check if CLICKED ID is in array
                var index = compareList.indexOf(id);
                compareHomes.forEach((compareHome) => {
                    var id = compareHome.dataset.id;
                    if ( compareList.includes(id) ) {
                        compareHome.classList.remove('active');
                    }
                });
                if (index > -1) {
                    compareList.splice(index, 1);
                    localStorage.setItem('compareList', JSON.stringify(compareList));
                    location.reload();
                }
            } else {
                compareList.push(id);
                localStorage.setItem('compareList', JSON.stringify(compareList));
                // location.reload();
            }
            checkCompare();
        }

        window.onload = checkCompare();


        // get the sticky element #compare
        const stickyElm = document.querySelector('#compare')

        const observer = new IntersectionObserver( 
        ([e]) => e.target.classList.toggle('scrolled', e.intersectionRatio < 1),
            {threshold: [1]}
        );

        observer.observe(stickyElm)
    </script>
</div>

<?php get_footer(); ?>