<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 12.04.18
 * Time: 17:24
 */

use SEVENELOHIM\Projects;

if (isset($_GET['category']) && is_numeric($_GET['category'])) {
	$category_id = htmlentities($_GET['category']);
} else {
	$category_id = -1;
}

$Projects = new Projects();
$thisProjects = $Projects->getProjectsByCategory($category_id, false);


?>

<div id="gallerie_ubersicht">
	<?php

	foreach ( $thisProjects as $index => $this_project ) {
		echo '
	    <div class="img-container" >
	        <a href="'.$this_project['url'].'">
                <img 
                    src="'.$this_project['image'].'" 
                    alt="'.$this_project['title'].'"
                    srcset="'.$this_project['image_srcset'].'"
                >
                <p>'.$this_project['title'].'</p>
            </a>
        </div>
        ';
	}

	?>
</div>
