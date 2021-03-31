<?php

use SEVENELOHIM\Projects;

get_header();
$category = get_queried_object();

?>

<div id="primary">
    <div class="main_content">
        <?php

        if ( isset( $category->term_id ) && is_numeric( $category->term_id ) ) {
            $category_id = htmlentities( $category->term_id );
        } else {
            $category_id = - 1;
        }

        $Projects     = new Projects();

        $thisProjects = $Projects->getProjectsByCategory( $category_id, false );

        ?>

        <div id="gallerie_ubersicht">
        <?php

        foreach ( $thisProjects as $index => $this_project ) {
            echo '
            <div class="img-container" >
                <a href="' . $this_project['url'] . '">
                    <img 
                        src="' . $this_project['image'] . '" 
                        alt="' . $this_project['title'] . '"
                        srcset="' . $this_project['image_srcset'] . '"
                    >
                    <p>' . $this_project['title'] . '</p>
                </a>
            </div>
            ';
        }

        ?>
        </div>
    </div>
</div>

<?php

get_footer();
