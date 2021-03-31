<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 08.11.17
 * Time: 19:31
 */

?>


<div class="the_single_post">
    <a class="lightbox_link" href="<?php the_post_thumbnail_url(); ?>" data-rel="mylightbox">
        <img
                title="<?php echo get_the_title(); ?>"
                alt="<?php echo get_the_title(); ?>"
                src="<?php the_post_thumbnail_url(); ?>"
                srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>"
                sizes="700px"
        />
    </a>
    <p class="post_date">
        <?php echo get_the_date('Y-m-d'); ?>
    </p>
</div>