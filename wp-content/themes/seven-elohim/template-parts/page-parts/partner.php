<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 12.04.18
 * Time: 17:24
 */

use \SEVENELOHIM\Partners;
$Partners = new Partners();

$all_partners = $Partners->getAllPartners();

?>

<div id="partner">
        <div class="partner-container">
            <div class="partner-text">
                <h1><?php echo $post->post_title;  ?></h1>
	            <?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?>
            </div>
            <div class="sponsors-container">

	            <?php foreach($all_partners as $partner): ?>

                <div class="img-container">
                          <a href="<?php echo $partner['url']; ?>" target="_blank">
                              <img
                                      src="<?php echo $partner['thumbnail']; ?>"
                                      srcset="<?php echo $partner['srcset']; ?>"
                                      title="<?php echo $partner['title']; ?>"
                                      alt="<?php echo $partner['title']; ?>"
                              />
                          </a>
                </div>

	            <?php endforeach; ?>
            </div>
        </div>
    </div>