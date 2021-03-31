<?php
/**
 * Created by PhpStorm.
 * User: fmalik
 * Date: 2019-03-09
 * Time: 02:12
 */

get_header();

?>

	<div id="primary">
		<div class="main_content">
			<?php
			get_template_part('template-parts/projects/p_project', 'single');
			?>
		</div>
	</div>

<?php

get_footer();