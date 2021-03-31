<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 2019-03-09
 * Time: 05:52
 */

use \SEVENELOHIM\Projects;

$Projects = new Projects();
$project  = $Projects->getProjectById( $post->ID, true );

?>

<div id="gallerie_case">
    <div id="gallerie_case_container">
        <a class="img-container" href="<?php echo $project['image']; ?>">
            <img
                    src="<?php echo $project['image_medium']; ?>"
                    srcset="<?php echo $project['image_srcset']; ?>"
                    alt="<?php echo $project['title']; ?>"
            >
        </a>
        <a class="img-container" href=".casetext">
            <div class="casetext">
                <div class="innercasetext">
                    <h1><?php echo $project['title']; ?></h1>
									<?php echo $project['text']; ?>
                </div>
            </div>
        </a>
			<?php
			foreach ( $project['images'] as $key => $image ) {
				echo '
                    <a class="img-container" href="' . $image['image_max'] . '">
                        <img 
                            src="' . $image['image_medium'] . '" 
                            srcset="' . $image['image_srcset'] . '"
                            alt="' . $image['caption'] . '"
                        >
                    </a>
                ';
			}
			?>
    </div>
</div>