<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 04.03.18
 * Time: 23:45
 */

/*
Template Name: Frontpage - Startseite
*/

use \SEVENELOHIM\Projects;
get_header();

?>

<div id="primary">
    <div class="main_content">
        <?php
        get_template_part('template-parts/page-parts/logo_new');

        // Showing and processing the Projects
        $Projects = new Projects();
        $projectIds = $Projects->getAllFrontpageProjectsIds();
        ?>

        <div id="carousel" class="carousel frontpage_carousel slide vert" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $project = 0;
                foreach ($projectIds as $key => $projectId) :
                    $thisProject = $Projects->getProjectById($projectId);
                    if ($thisProject["image"]){
	                    if ($project === 0) :
		                    ?>
                                <div
                                    onclick="window.location.href='<?php echo $thisProject['url']; ?>'"
                                    class="carousel-item active full-screen carousel_single_project"
                                    style="background-image: url('<?php echo $thisProject['image'] ?>');"
                                >
                                <footer>&raquo;<?php echo $thisProject['title']; ?>&laquo;</footer>
                                </div>
	                    <?php
	                    else:
		                    ?>
                                <div
                                        onclick="window.location.href='<?php echo $thisProject['url']; ?>'"
                                        class="carousel-item full-screen carousel_single_project"
                                        style="background-image: url('<?php echo $thisProject['image'] ?>');"
                                >
                                    <footer>&raquo;<?php echo $thisProject['title']; ?>&laquo;</footer>
                                </div>
	                        <?php
	                    endif;
                    }
                    $project++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();