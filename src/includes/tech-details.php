<div class="tech-details bordered">
    <div class="grid grid-3-2">

    <?php if( have_rows('adatok', 'option') ): ?>

        <?php while( have_rows('adatok', 'option') ): the_row(); ?>

            <div class="detail-name">
                <img src="<?php the_sub_field('ikon'); ?>" alt="">
                <?php the_sub_field('tulajdonsag'); ?>
            </div>
            <div class="detail-data" style="color: <?php the_sub_field('szin'); ?>"><?php the_sub_field('ertek'); ?></div>

        <?php endwhile; ?>

    <?php endif; ?>

    </div>
</div>