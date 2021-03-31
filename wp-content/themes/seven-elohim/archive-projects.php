<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 18.03.18
 * Time: 16:04
 */

get_header();

?>

    <div id="primary">
        <div class="main_content">
			<?php
			    get_template_part('template-parts/projects/p_project', 'overview');
			?>
        </div>
    </div>

<?php

get_footer();
